<?php
/**
 * Hero block
 * @var array $data  eyebrow, heading, subheading, cta_label, cta_url, image
 */
$data = array_merge([
    'eyebrow' => '',
    'heading' => '',
    'subheading' => '',
    'cta_label' => '',
    'cta_url' => '',
    'image' => '',
], $data ?? []);
?>
<section class="site-hero" <?= $data['image'] ? 'style="background-image: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)), url(\'' . esc($data['image'], 'attr') . '\'); background-size: cover; background-position: center;"' : '' ?>>
    <div class="site-container site-hero__inner">
        <?php if (!empty($data['eyebrow'])): ?>
            <p class="site-hero__eyebrow"><?= esc($data['eyebrow']) ?></p>
        <?php endif; ?>

        <?php if (!empty($data['heading'])): ?>
            <h1 class="site-hero__heading"><?= esc($data['heading']) ?></h1>
        <?php endif; ?>

        <?php if (!empty($data['subheading'])): ?>
            <p class="site-hero__subheading"><?= esc($data['subheading']) ?></p>
        <?php endif; ?>

        <?php if (!empty($data['cta_label']) && !empty($data['cta_url'])): ?>
            <a href="<?= esc($data['cta_url'], 'attr') ?>" class="site-btn site-btn--primary">
                <?= esc($data['cta_label']) ?>
            </a>
        <?php endif; ?>
    </div>
</section>
