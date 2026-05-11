<?php
/**
 * CTA block
 * @var array $data  heading, subheading, cta_label, cta_url
 */
$data = array_merge([
    'heading' => '', 'subheading' => '', 'cta_label' => '', 'cta_url' => '',
], $data ?? []);
?>
<section class="site-section site-cta">
    <div class="site-container site-cta__inner">
        <?php if (!empty($data['heading'])): ?>
            <h2 class="site-cta__heading"><?= esc($data['heading']) ?></h2>
        <?php endif; ?>
        <?php if (!empty($data['subheading'])): ?>
            <p class="site-cta__subheading"><?= esc($data['subheading']) ?></p>
        <?php endif; ?>
        <?php if (!empty($data['cta_label']) && !empty($data['cta_url'])): ?>
            <a href="<?= esc($data['cta_url'], 'attr') ?>" class="site-btn site-btn--primary site-btn--lg">
                <?= esc($data['cta_label']) ?>
            </a>
        <?php endif; ?>
    </div>
</section>
