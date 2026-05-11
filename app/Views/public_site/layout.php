<?php
/**
 * Public website layout. Renders a user-owned website with its own theme.
 *
 * @var array  $site       the websites row (config has `colors`, `typography`, `layout`)
 * @var array  $page       the active page definition
 * @var string $blocksHtml pre-rendered HTML for the page's blocks
 * @var array  $navPages   visible pages for the top nav
 */
$colors = $site['config']['colors'] ?? [];
$type   = $site['config']['typography'] ?? [];
$layout = $site['config']['layout'] ?? [];

$prefix = '/s/' . rawurlencode($site['slug']) . '/';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($page['name']) ?> — <?= esc($site['meta_title'] ?: $site['site_name']) ?></title>
    <?php if (!empty($site['meta_description'])): ?>
        <meta name="description" content="<?= esc($site['meta_description'], 'attr') ?>">
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css2?family=<?= urlencode($type['heading'] ?? 'Inter') ?>:wght@400;600;700&family=<?= urlencode($type['body'] ?? 'Inter') ?>:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/site-public.css') ?>">
    <style>
        :root {
            --c-primary:   <?= esc($colors['primary']   ?? '#3b82f6', 'css') ?>;
            --c-secondary: <?= esc($colors['secondary'] ?? '#1e40af', 'css') ?>;
            --c-accent:    <?= esc($colors['accent']    ?? '#60a5fa', 'css') ?>;
            --c-text:      <?= esc($colors['text']      ?? '#e2e8f0', 'css') ?>;
            --c-bg:        <?= esc($colors['bg']        ?? '#040b18', 'css') ?>;
            --font-heading: '<?= esc($type['heading'] ?? 'Inter', 'css') ?>', sans-serif;
            --font-body:    '<?= esc($type['body']    ?? 'Inter', 'css') ?>', sans-serif;
            --layout-max:   <?= esc($layout['max_width'] ?? '1200px', 'css') ?>;
            --layout-pad:   <?= esc($layout['padding']   ?? '2rem', 'css') ?>;
        }
    </style>
</head>
<body>
    <header class="site-nav">
        <div class="site-container site-nav__inner">
            <a href="<?= esc($prefix, 'attr') ?>" class="site-nav__brand"><?= esc($site['site_name']) ?></a>
            <nav class="site-nav__menu">
                <?php foreach ($navPages as $p): ?>
                    <?php
                    $slug   = $p['slug'] === '/' ? '' : ltrim($p['slug'], '/');
                    $href   = $prefix . $slug;
                    $active = (($page['id'] ?? '') === ($p['id'] ?? ''));
                    ?>
                    <a href="<?= esc($href, 'attr') ?>"
                       class="site-nav__link<?= $active ? ' is-active' : '' ?>">
                        <?= esc($p['name']) ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <main class="site-main">
        <?= $blocksHtml ?>
    </main>

    <!-- Builder attribution (remove once paid plans enforce white-label) -->
    <div class="site-attribution">
        Built with <a href="<?= base_url() ?>" target="_blank" rel="noopener">DevStack</a>
    </div>
</body>
</html>
