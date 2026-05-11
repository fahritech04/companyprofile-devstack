<?php
/**
 * Rich Text block — paragraphs separated by blank lines.
 * @var array $data  heading, body, align
 */
$data = array_merge(['heading' => '', 'body' => '', 'align' => 'left'], $data ?? []);
$align = in_array($data['align'], ['left', 'center', 'right'], true) ? $data['align'] : 'left';
$paragraphs = array_filter(array_map('trim', preg_split('/\n\s*\n/', (string) $data['body'])));
?>
<section class="site-section site-text" style="text-align: <?= esc($align, 'attr') ?>;">
    <div class="site-container site-text__inner">
        <?php if (!empty($data['heading'])): ?>
            <h2 class="site-text__heading"><?= esc($data['heading']) ?></h2>
        <?php endif; ?>

        <?php foreach ($paragraphs as $para): ?>
            <p class="site-text__p"><?= nl2br(esc($para)) ?></p>
        <?php endforeach; ?>
    </div>
</section>
