<?php
/**
 * Single image block
 * @var array $data  src, alt, caption
 */
$data = array_merge(['src' => '', 'alt' => '', 'caption' => ''], $data ?? []);
if (empty($data['src'])) return;
?>
<section class="site-section site-image-block">
    <div class="site-container">
        <figure class="site-image-block__figure">
            <img
                src="<?= esc($data['src'], 'attr') ?>"
                alt="<?= esc($data['alt'], 'attr') ?>"
                loading="lazy"
                class="site-image-block__img"
            >
            <?php if (!empty($data['caption'])): ?>
                <figcaption class="site-image-block__caption"><?= esc($data['caption']) ?></figcaption>
            <?php endif; ?>
        </figure>
    </div>
</section>
