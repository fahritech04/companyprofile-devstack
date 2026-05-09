<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Services Hero Section -->
<section class="min-h-[60vh] flex items-center pt-28 pb-20 relative overflow-hidden hero-section"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">

    <!-- Modern Hero Background -->
    <div class="hero-bg-modern">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="hero-grid-overlay"></div>
    </div>

    <!-- Canvas Particle Network -->
    <canvas id="particle-network-services" class="absolute inset-0 w-full h-full opacity-40"></canvas>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-8 max-w-4xl mx-auto reveal">
            <div class="badge-modern">
                <span class="dot"></span>
                <?= lang('App.expertise_areas') ?>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-gradient-blue leading-tight hero-text-reveal text-3d"><?= lang('App.services_main_title') ?></h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto scramble-text">
                <?= lang('App.services_main_description') ?>
            </p>

            <!-- Stats with enhanced glow -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto mt-8">
                <div class="glass-card p-4 text-center shine-card stat-glow">
                    <div class="text-xl md:text-2xl font-bold text-blue-400 mb-1 stat-number glow-text" data-counter="50" data-suffix="+">0</div>
                    <div class="text-xs text-gray-400 uppercase tracking-wider"><?= lang('App.projects_delivered') ?></div>
                </div>
                <div class="glass-card p-4 text-center shine-card stat-glow">
                    <div class="text-xl md:text-2xl font-bold text-blue-400 mb-1 stat-number glow-text" data-counter="25" data-suffix="+">0</div>
                    <div class="text-xs text-gray-400 uppercase tracking-wider"><?= lang('App.happy_clients') ?></div>
                </div>
                <div class="glass-card p-4 text-center shine-card stat-glow">
                    <div class="text-xl md:text-2xl font-bold text-blue-400 mb-1 glow-text">99.9%</div>
                    <div class="text-xs text-gray-400 uppercase tracking-wider"><?= lang('App.success_rate') ?></div>
                </div>
                <div class="glass-card p-4 text-center shine-card stat-glow">
                    <div class="text-xl md:text-2xl font-bold text-blue-400 mb-1 glow-text">24/7</div>
                    <div class="text-xs text-gray-400 uppercase tracking-wider"><?= lang('App.expert_support') ?></div>
                </div>
            </div>

            <!-- CTA -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4 stagger-children">
                <a href="<?= base_url('contact') ?>" class="btn-glow-modern magnetic-btn neon-pulse">
                    <span><?= lang('App.discuss_project') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#services-list" class="btn-glass-modern magnetic-btn">
                    <span><?= lang('App.explore_services') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>

<div class="divider-glow-modern"></div>

<!-- Core Services Section -->
<section id="services-list" class="py-16 md:py-24 relative" style="background: #040b18;">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 reveal">
            <h2 class="text-gradient-blue mb-6 text-3d"><?= lang('App.core_services') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.core_services_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 perspective-container">
            <div class="glass-card p-8 group service-card-3d shine-card">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_1_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_1_desc') ?>
                </p>
            </div>
            <div class="glass-card p-8 group service-card-3d shine-card">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2-2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_2_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_2_desc') ?></p>
            </div>
            <div class="glass-card p-8 group service-card-3d shine-card">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_3_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_3_desc') ?></p>
            </div>
        </div>

        <div class="text-center mt-12 reveal">
            <a href="<?= base_url('contact') ?>" class="btn-glow-modern magnetic-btn neon-pulse">
                <span><?= lang('App.get_started_today') ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section id="industries" class="py-16 md:py-24 relative" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="divider-glow-modern mb-16"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 reveal">
            <h2 class="text-gradient-blue mb-6 text-3d"><?= lang('App.industries_serve') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.industries_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 perspective-container">
            <?php
            $industries = [
                ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'fintech_banking', 'desc' => 'fintech_desc'],
                ['icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4', 'title' => 'healthcare_medical', 'desc' => 'healthcare_desc'],
                ['icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14M5 9a2 2 0 012-2h10a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V9z', 'title' => 'ecommerce_retail', 'desc' => 'ecommerce_desc'],
                ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'education_edtech', 'desc' => 'education_desc'],
                ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'manufacturing', 'desc' => 'manufacturing_desc'],
                ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'professional_services', 'desc' => 'professional_desc'],
            ];
            foreach ($industries as $ind):
                ?>
                <div class="glass-card p-8 text-center group tilt-card shine-card">
                    <div class="tilt-card-glow"></div>
                    <div class="tilt-card-inner relative z-10">
                        <div class="icon-box-dark mx-auto mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $ind['icon'] ?>">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-white"><?= lang('App.' . $ind['title']) ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.' . $ind['desc']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>

        <div class="text-center mt-12 reveal">
            <a href="<?= base_url('contact') ?>" class="btn-glass-modern magnetic-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                    </path>
                </svg>
                <span><?= lang('App.explore_solutions') ?></span>
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     CTA SECTION
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-16 md:py-24 relative overflow-hidden mesh-gradient" style="background: linear-gradient(180deg, #040b18, #0a1628);">
    <div class="hero-bg-modern">
        <div class="orb orb-1" style="width:500px;height:500px;top:50%;left:50%;transform:translate(-50%,-50%);"></div>
    </div>

    <div class="max-w-3xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-gradient-blue mb-6 text-3d">
            <?= lang('App.cta_services_title') ?? 'Ready to Transform Your Business?' ?>
        </h2>
        <p class="text-gray-400 text-lg mb-10 max-w-xl mx-auto">
            <?= lang('App.cta_services_subtitle') ?? 'Get a free consultation and discover how our services can help you grow and succeed in the digital era.' ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center stagger-children">
            <a href="<?= base_url('contact') ?>" class="btn-glow-modern magnetic-btn neon-pulse">
                <span><?= lang('App.schedule_consultation') ?? 'Schedule a Consultation' ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            <a href="<?= base_url('portfolio') ?>" class="btn-glass-modern magnetic-btn">
                <span><?= lang('App.view_our_work') ?? 'View Our Work' ?></span>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
