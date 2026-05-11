<?php
/**
 * Gallery block
 * @var array $data  heading, images[]
 */
$data = array_merge(['heading' => '', 'images' => []], $data ?? []);
$images = array_filter(is_array($data['images']) ? $data['images'] : [], fn($i) => !empty($i['src']));
?>
<section class="site-section site-gallery">
    <div class="site-container">
        <?php if (!empty($data['heading'])): ?>
            <div class="site-section__header">
                <h2 class="site-section__heading"><?= esc($data['heading']) ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($images)): ?>
            <div class="site-gallery__grid">
                <?php foreach ($images as $img): ?>
                    <figure class="site-gallery__item">
                        <img
                            src="<?= esc($img['src'], 'attr') ?>"
                            alt="<?= esc($img['alt'] ?? '', 'attr') ?>"
                            loading="lazy"
                        >
                    </figure>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
