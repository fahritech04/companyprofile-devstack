<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Services Hero Section -->
<section class="min-h-[60vh] flex items-center pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">
    <div class="grid-bg"></div>
    <div class="dot-grid-dark"></div>
    <div class="glow-orb glow-orb-1"></div>
    <div class="glow-orb glow-orb-2"></div>
    <!-- Particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-8 max-w-4xl mx-auto" data-aos="fade-up">
            <div class="badge-glow inline-flex items-center text-xs">
                <span class="badge-pulse"></span>
                <?= lang('App.expertise_areas') ?>
            </div>
            <h1 class="text-gradient-blue leading-tight"><?= lang('App.services_main_title') ?></h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.services_main_description') ?>
            </p>

            <!-- Stats -->
            <div class="stats-bar-dark max-w-3xl mx-auto mt-8">
                <div class="stat-item-dark">
                    <div class="stat-number-dark" data-counter="50" data-suffix="+">0</div>
                    <div class="stat-label-dark"><?= lang('App.projects_delivered') ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark" data-counter="25" data-suffix="+">0</div>
                    <div class="stat-label-dark"><?= lang('App.happy_clients') ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark">99.9%</div>
                    <div class="stat-label-dark"><?= lang('App.success_rate') ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark">24/7</div>
                    <div class="stat-label-dark"><?= lang('App.expert_support') ?></div>
                </div>
            </div>

            <!-- CTA -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <a href="<?= base_url('contact') ?>" class="btn-glow px-8 py-4">
                    <span><?= lang('App.discuss_project') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#services-list" class="btn-glass px-8 py-4">
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

<div class="divider-glow"></div>

<!-- Core Services Section -->
<section id="services-list" class="py-24 relative" style="background: #040b18;">
    <div class="absolute inset-0 dot-grid-dark opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.core_services') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.core_services_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2zm3 4h8M7 12h10M7 16h6">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_1_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_1_desc') ?></p>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.modern_web_apps') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.mobile_app_dev') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.custom_software') ?></span></div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_2_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_2_desc') ?></p>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.intuitive_ux') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.brand_identity') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.marketing_assets') ?></span></div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-white text-center"><?= lang('App.service_3_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed text-center mb-6"><?= lang('App.service_3_desc') ?></p>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.system_architecture') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.technology_strategy') ?></span></div>
                    <div class="flex items-center space-x-2 text-sm text-gray-300"><svg class="w-4 h-4 text-blue-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg><span><?= lang('App.performance_opt') ?></span></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= base_url('contact') ?>" class="btn-glow px-8 py-4">
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
<section id="industries" class="py-24 relative" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="glow-orb"
        style="width:400px;height:400px;background:radial-gradient(circle,rgba(37,99,235,.06),transparent 70%);top:15%;left:-8%;filter:blur(80px);">
    </div>
    <div class="divider-glow mb-16"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.industries_serve') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.industries_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $industries = [
                ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'fintech_banking', 'desc' => 'fintech_desc'],
                ['icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4', 'title' => 'healthcare_medical', 'desc' => 'healthcare_desc'],
                ['icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14M5 9a2 2 0 012-2h10a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V9z', 'title' => 'ecommerce_retail', 'desc' => 'ecommerce_desc'],
                ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'education_edtech', 'desc' => 'education_desc'],
                ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'manufacturing', 'desc' => 'manufacturing_desc'],
                ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'professional_services', 'desc' => 'professional_desc'],
            ];
            $delay = 0;
            foreach ($industries as $ind):
                ?>
                <div class="card-dark p-8 text-center group" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <div class="icon-box-dark mx-auto mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $ind['icon'] ?>">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white"><?= lang('App.' . $ind['title']) ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.' . $ind['desc']) ?></p>
                </div>
                <?php $delay += 100; endforeach; ?>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="600">
            <a href="<?= base_url('contact') ?>" class="btn-glass px-8 py-4">
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

<?= $this->endSection() ?>