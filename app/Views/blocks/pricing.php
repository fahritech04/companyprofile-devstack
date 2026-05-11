<?php
/**
 * Pricing block
 * @var array $data  heading, plans[]
 */
$data  = array_merge(['heading' => '', 'plans' => []], $data ?? []);
$plans = is_array($data['plans']) ? $data['plans'] : [];
?>
<section class="site-section site-pricing">
    <div class="site-container">
        <?php if (!empty($data['heading'])): ?>
            <div class="site-section__header">
                <h2 class="site-section__heading"><?= esc($data['heading']) ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($plans)): ?>
            <div class="site-pricing__grid">
                <?php foreach ($plans as $plan): ?>
                    <?php
                    $plan = array_merge([
                        'name' => '', 'price' => '', 'period' => '',
                        'features' => '', 'cta_label' => '', 'cta_url' => '',
                        'featured' => 'no',
                    ], is_array($plan) ? $plan : []);
                    $isFeatured = ($plan['featured'] ?? 'no') === 'yes';
                    $features = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', (string) $plan['features'])));
                    ?>
                    <div class="site-pricing-card<?= $isFeatured ? ' is-featured' : '' ?>">
                        <?php if ($isFeatured): ?>
                            <span class="site-pricing-card__badge">Popular</span>
                        <?php endif; ?>

                        <?php if (!empty($plan['name'])): ?>
                            <h3 class="site-pricing-card__name"><?= esc($plan['name']) ?></h3>
                        <?php endif; ?>

                        <div class="site-pricing-card__price">
                            <?php if (!empty($plan['price'])): ?>
                                <span class="site-pricing-card__amount"><?= esc($plan['price']) ?></span>
                            <?php endif; ?>
                            <?php if (!empty($plan['period'])): ?>
                                <span class="site-pricing-card__period"><?= esc($plan['period']) ?></span>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($features)): ?>
                            <ul class="site-pricing-card__features">
                                <?php foreach ($features as $feat): ?>
                                    <li><?= esc($feat) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if (!empty($plan['cta_label'])): ?>
                            <a href="<?= esc($plan['cta_url'] ?: '#', 'attr') ?>" class="site-btn <?= $isFeatured ? 'site-btn--primary' : 'site-btn--outline' ?>">
                                <?= esc($plan['cta_label']) ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
