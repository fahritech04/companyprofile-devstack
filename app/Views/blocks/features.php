<?php
/**
 * Features block
 * @var array $data  heading, subheading, items[]
 */
$data = array_merge(['heading' => '', 'subheading' => '', 'items' => []], $data ?? []);
$items = is_array($data['items']) ? $data['items'] : [];
?>
<section class="site-section site-features">
    <div class="site-container">
        <?php if (!empty($data['heading']) || !empty($data['subheading'])): ?>
            <div class="site-section__header">
                <?php if (!empty($data['heading'])): ?>
                    <h2 class="site-section__heading"><?= esc($data['heading']) ?></h2>
                <?php endif; ?>
                <?php if (!empty($data['subheading'])): ?>
                    <p class="site-section__subheading"><?= esc($data['subheading']) ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($items)): ?>
            <div class="site-features__grid">
                <?php foreach ($items as $item): ?>
                    <?php $item = array_merge(['icon' => '', 'title' => '', 'description' => ''], is_array($item) ? $item : []); ?>
                    <div class="site-feature-card">
                        <?php if (!empty($item['icon'])): ?>
                            <div class="site-feature-card__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="<?= esc($item['icon'], 'attr') ?>"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($item['title'])): ?>
                            <h3 class="site-feature-card__title"><?= esc($item['title']) ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($item['description'])): ?>
                            <p class="site-feature-card__desc"><?= esc($item['description']) ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
