<?php
/**
 * Sprint 4 HTTP smoke — delete after use.
 *
 * Mirrors browser behavior: reads the current CSRF token from the
 * `csrf_cookie_name` cookie (which CI4 rotates after each successful POST)
 * and sends it in X-CSRF-TOKEN header for subsequent JSON requests.
 *
 * Requires dev server on :8099.
 */

$base  = 'http://localhost:8099';
$email = 'smoketest@example.com';
$pass  = 'Secret123!Xy';

$jar = tempnam(sys_get_temp_dir(), 'ci_cookie_');
register_shutdown_function(fn() => @unlink($jar));

function req(string $method, string $url, array $opts = []): array {
    global $jar;
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_CUSTOMREQUEST  => $method,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_COOKIEJAR      => $jar,
        CURLOPT_COOKIEFILE     => $jar,
        CURLOPT_HTTPHEADER     => $opts['headers'] ?? [],
        CURLOPT_TIMEOUT        => 15,
    ]);
    if (isset($opts['body'])) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $opts['body']);
    }
    $resp = curl_exec($ch);
    if ($resp === false) {
        throw new RuntimeException('curl: ' . curl_error($ch));
    }
    $status      = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize  = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers     = substr($resp, 0, $headerSize);
    $body        = substr($resp, $headerSize);
    curl_close($ch);
    return ['status' => $status, 'headers' => $headers, 'body' => $body];
}

/**
 * Read the current CSRF token from the cookie jar. CI4 rotates this cookie
 * after every successful POST, so the value is always fresh after the last
 * request that updated the jar.
 */
function csrfFromJar(): array {
    global $jar;
    $name = 'csrf_test_name';
    $cookie = 'csrf_cookie_name';
    $raw = file_exists($jar) ? file_get_contents($jar) : '';
    foreach (explode("\n", $raw) as $line) {
        if ($line === '') continue;
        // Skip plain comment lines, but keep #HttpOnly_ cookie lines (which are real data)
        if ($line[0] === '#' && strpos($line, '#HttpOnly_') !== 0) continue;
        // Strip the #HttpOnly_ prefix from the host field if present
        $line = preg_replace('/^#HttpOnly_/', '', $line);
        $parts = preg_split('/\s+/', $line);
        if (count($parts) >= 7 && $parts[5] === $cookie) {
            return ['name' => $name, 'hash' => $parts[6]];
        }
    }
    return ['name' => $name, 'hash' => ''];
}

function extractCsrfFromHtml(string $html): array {
    if (preg_match('/<meta name="csrf-name"\s+content="([^"]+)"/', $html, $n)
        && preg_match('/<meta name="csrf-hash"\s+content="([^"]+)"/', $html, $h)) {
        return ['name' => $n[1], 'hash' => $h[1]];
    }
    if (preg_match('/name="csrf_test_name"\s+value="([^"]+)"/', $html, $m)) {
        return ['name' => 'csrf_test_name', 'hash' => $m[1]];
    }
    return ['name' => 'csrf_test_name', 'hash' => ''];
}

$fail = 0;
function ok(bool $cond, string $label) {
    global $fail;
    echo ($cond ? "  ok: " : "  FAIL: ") . $label . "\n";
    if (!$cond) $fail++;
}

echo "=== Sprint 4 HTTP smoke ===\n";

// 1) GET /login to warm the cookie jar and obtain the initial CSRF
echo "1) GET /login\n";
$r = req('GET', $base . '/login');
ok($r['status'] === 200, 'login 200');
$csrf = extractCsrfFromHtml($r['body']);

// 2) POST /auth/authenticate (form-encoded)
echo "2) POST /auth/authenticate\n";
$r = req('POST', $base . '/auth/authenticate', [
    'body' => http_build_query([
        'email' => $email,
        'password' => $pass,
        $csrf['name'] => $csrf['hash'],
    ]),
    'headers' => ['Content-Type: application/x-www-form-urlencoded'],
]);
ok(in_array($r['status'], [302, 303], true), 'login redirects (' . $r['status'] . ')');

// 3) List websites
echo "3) GET /api/website-builder\n";
$r = req('GET', $base . '/api/website-builder');
ok($r['status'] === 200, 'list 200');
$data = json_decode($r['body'], true);
ok(!empty($data['data']), 'has websites');
$website = $data['data'][0];
$websiteId = (int) $website['id'];
echo "   using website id=$websiteId slug=" . $website['slug'] . "\n";

// 4) Block catalog
echo "4) GET /api/website-builder/blocks/available\n";
$r = req('GET', $base . '/api/website-builder/blocks/available');
ok($r['status'] === 200, 'catalog 200');
$catalog = json_decode($r['body'], true);
ok(count($catalog['data']) >= 8, '>=8 block types');

/**
 * JSON POST with auto-refreshed CSRF. After the call, the cookie jar is
 * updated with the new token automatically by curl.
 */
function apiPost(string $url, array $payload): array {
    $csrf = csrfFromJar();
    $full = array_merge($payload, [$csrf['name'] => $csrf['hash']]);
    return req('POST', $url, [
        'body' => json_encode($full),
        'headers' => [
            'Content-Type: application/json',
            'Accept: application/json',
            'X-CSRF-TOKEN: ' . $csrf['hash'],
        ],
    ]);
}

// 5) Load editor (acts like browser view)
echo "5) GET /dashboard/websites/editor/$websiteId\n";
$r = req('GET', $base . '/dashboard/websites/editor/' . $websiteId);
ok($r['status'] === 200, 'editor 200');
ok(strpos($r['body'], "x-data='editor(") !== false, 'editor Alpine init present');

// 6) Add a text block
echo "6) POST add 'text' block\n";
$r = apiPost("$base/api/website-builder/$websiteId/pages/home/blocks", ['type' => 'text']);
ok($r['status'] === 200, 'add block 200');
if ($r['status'] !== 200) {
    echo "   DEBUG status=" . $r['status'] . "\n";
    echo "   DEBUG body=" . substr($r['body'], 0, 400) . "\n";
    echo "   DEBUG jar=" . (file_exists($jar) ? file_get_contents($jar) : '(empty)') . "\n";
    $csrf = csrfFromJar();
    echo "   DEBUG csrf from jar: name=" . $csrf['name'] . " hash=" . substr($csrf['hash'], 0, 16) . "...\n";
}
$res = json_decode($r['body'], true);
$blockId = $res['data']['id'] ?? null;
ok(!empty($blockId), 'block id returned');

// 7) Update block
echo "7) POST update block data\n";
$r = apiPost("$base/api/website-builder/$websiteId/pages/home/blocks/$blockId", [
    'data' => ['heading' => 'Smoke test', 'body' => 'Hello from curl.', 'align' => 'center'],
]);
ok($r['status'] === 200, 'update 200');
if ($r['status'] !== 200) {
    echo "   DEBUG status=" . $r['status'] . "\n";
    echo "   DEBUG body=" . substr($r['body'], 0, 400) . "\n";
}

// 8) Media upload (multipart)
echo "8) POST upload PNG\n";
$png = base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGNgAAIAAAUAAeImBZsAAAAASUVORK5CYII=');
$tmp = tempnam(sys_get_temp_dir(), 'smoke_') . '.png';
file_put_contents($tmp, $png);
$csrf = csrfFromJar();
$r = req('POST', $base . '/api/media/upload', [
    'body' => [
        'file'       => new CURLFile($tmp, 'image/png', 'smoke.png'),
        'website_id' => $websiteId,
        $csrf['name'] => $csrf['hash'],
    ],
    'headers' => ['Accept: application/json', 'X-CSRF-TOKEN: ' . $csrf['hash']],
]);
@unlink($tmp);
ok($r['status'] === 200, 'upload 200');
$up = json_decode($r['body'], true);
$mediaUrl = $up['data']['url'] ?? '';
ok(!empty($mediaUrl), 'upload returned URL');
// Normalize URL to the test server's base (CI base_url uses Config\App::baseURL
// which may point to a different port than the dev server we launched).
$mediaUrlLocal = '';
if ($mediaUrl) {
    $path = parse_url($mediaUrl, PHP_URL_PATH);
    $mediaUrlLocal = $base . $path;
}
echo "   -> $mediaUrl\n";
echo "   testing via -> $mediaUrlLocal\n";

// 9) Serve the media back
echo "9) GET media URL\n";
if ($mediaUrlLocal) {
    $r = req('GET', $mediaUrlLocal);
    ok($r['status'] === 200, 'media serve 200');
    ok(strpos($r['headers'], 'Content-Type: image/png') !== false, 'content-type image/png');
} else {
    ok(false, 'media serve skipped (no URL)');
}

// 10) List media
echo "10) GET /api/media\n";
$r = req('GET', $base . '/api/media');
ok($r['status'] === 200, 'media list 200');
$ml = json_decode($r['body'], true);
ok(count($ml['data']) >= 1, 'has media');
ok(isset($ml['usage']['percent']), 'usage info');

// 11) Delete block
echo "11) POST delete block\n";
$r = apiPost("$base/api/website-builder/$websiteId/pages/home/blocks/$blockId/delete", []);
ok($r['status'] === 200, 'delete block 200');

// 12) Publish
echo "12) POST publish\n";
$r = apiPost("$base/api/website-builder/publish/$websiteId", []);
ok($r['status'] === 200, 'publish 200');

// 13) Public site
echo "13) GET /s/{slug}\n";
$r = req('GET', $base . '/s/' . $website['slug']);
ok($r['status'] === 200, 'public site 200');
ok(strpos($r['headers'], 'X-Frame-Options: SAMEORIGIN') !== false, 'X-Frame-Options header');
ok(strpos($r['headers'], 'Content-Security-Policy:') !== false, 'CSP header');

echo "\n=== RESULT ===\n";
if ($fail > 0) {
    echo "FAILED — $fail assertion(s)\n";
    exit(1);
}
echo "ALL PASS\n";
