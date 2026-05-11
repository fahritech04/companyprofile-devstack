<?php
/**
 * Footer block
 * @var array $data  brand, tagline, copyright, links[]
 * @var array $site  (injected by renderer) website context with slug
 */
$data = array_merge([
    'brand' => '', 'tagline' => '', 'copyright' => '', 'links' => [],
], $data ?? []);
$links = is_array($data['links']) ? $data['links'] : [];
$site  = $site ?? null;

$prefix = $site ? '/s/' . rawurlencode($site['slug']) . '/' : '/';
?>
<footer class="site-footer">
    <div class="site-container site-footer__inner">
        <div class="site-footer__brand">
            <?php if (!empty($data['brand'])): ?>
                <div class="site-footer__name"><?= esc($data['brand']) ?></div>
            <?php endif; ?>
            <?php if (!empty($data['tagline'])): ?>
                <div class="site-footer__tagline"><?= esc($data['tagline']) ?></div>
            <?php endif; ?>
        </div>

        <?php if (!empty($links)): ?>
            <nav class="site-footer__nav">
                <?php foreach ($links as $link): ?>
                    <?php
                    $label = is_array($link) ? ($link['label'] ?? '') : '';
                    $url   = is_array($link) ? ($link['url'] ?? '') : '';
                    if (empty($label)) continue;
                    // Resolve relative paths against the website root
                    $isExternal = preg_match('#^(https?:|mailto:|tel:|/)#i', $url) === 1;
                    $href = $isExternal ? $url : $prefix . ltrim($url, '/');
                    ?>
                    <a href="<?= esc($href, 'attr') ?>" class="site-footer__link"><?= esc($label) ?></a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
    </div>

    <?php if (!empty($data['copyright'])): ?>
        <div class="site-footer__bottom">
            <div class="site-container"><?= esc($data['copyright']) ?></div>
        </div>
    <?php endif; ?>
</footer>
