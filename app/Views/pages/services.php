<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Spectacular Services Hero Section -->
<section class="pt-32 pb-32 bg-gradient-to-br from-slate-50 via-blue-50/40 to-indigo-50/30 relative overflow-hidden section-enterprise-premium">
    <!-- Epic Enterprise Background System -->
    <div class="absolute inset-0 z-0">
        <!-- Primary Architectural Elements -->
        <div class="absolute inset-0 bg-enterprise-geometric"></div>
        <div class="absolute inset-0 bg-professional-waves opacity-20"></div>
        <div class="absolute inset-0 bg-business-architecture opacity-30"></div>

        <!-- Advanced Particle System -->
        <div class="absolute inset-0 bg-enterprise-particles"></div>
        <div class="absolute inset-0 bg-network-effect opacity-10"></div>

        <!-- Premium Metallic Highlights -->
        <div class="absolute top-0 left-0 right-0 h-1/2 bg-gradient-to-b from-white/5 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-blue-100/10 to-transparent"></div>

        <!-- Sophisticated Grid Overlay -->
        <div class="absolute inset-0 bg-professional-mesh opacity-5"></div>

        <!-- Corporate Flow Networks -->
        <div class="hidden lg:block absolute inset-0 bg-corporate-flow opacity-15"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center space-y-12" data-aos="fade-up">
            <!-- Professional Badge -->
            <div class="inline-flex items-center px-6 py-2.5 rounded-full bg-blue-50/70 border border-blue-100/50 backdrop-blur-sm">
                <svg class="w-4 h-4 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243 4.242 3 3 0 004.243-4.243m4.242 4.242L3 3"></path>
                </svg>
                <span class="text-sm text-blue-900 font-medium"><?= lang('App.expertise_areas') ?></span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-blue-900 leading-tight max-w-6xl mx-auto">
                    <?= lang('App.services_main_title') ?>
                </h1>
                <p class="text-xl text-blue-800/90 leading-relaxed max-w-4xl mx-auto font-medium">
                    <?= lang('App.services_main_description') ?>
                </p>

                <!-- Service Stats Badges -->
                <div class="flex flex-wrap justify-center gap-6 max-w-5xl mx-auto">
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">50+</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.projects_delivered') ?></span>
                    </div>
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">25+</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.happy_clients') ?></span>
                    </div>
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">99.9%</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.success_rate') ?></span>
                    </div>
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">24/7</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.expert_support') ?></span>
                    </div>
                </div>
            </div>

            <!-- Service CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
                <a href="<?= base_url('contact') ?>" class="group px-12 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.discuss_project') ?></span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="#services-list" class="group px-12 py-5 bg-white/80 backdrop-blur-sm text-blue-600 border border-blue-200 rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.explore_services') ?></span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Clean Section Divider -->
<div class="h-px bg-gradient-to-r from-transparent via-blue-100 to-transparent opacity-50"></div>

<!-- Core Services Section -->
<section id="services-list" class="py-32 bg-white bg-professional-waves relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.core_services') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.core_services_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="card-enterprise p-10 hover-lift group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2zm3 4h8M7 12h10M7 16h6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors text-center">
                    <?= lang('App.service_1_title') ?>
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg mb-8 text-center max-w-sm mx-auto">
                    <?= lang('App.service_1_desc') ?>
                </p>

                <!-- Service Features List - Match home.php pattern -->
                <div class="mt-8 space-y-3">
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.modern_web_apps') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.mobile_app_dev') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.custom_software') ?></span>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="card-enterprise p-10 hover-lift group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors text-center">
                    <?= lang('App.service_2_title') ?>
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg mb-8 text-center max-w-sm mx-auto">
                    <?= lang('App.service_2_desc') ?>
                </p>

                <!-- Service Features List -->
                <div class="mt-8 space-y-3">
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.intuitive_ux') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.brand_identity') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.marketing_assets') ?></span>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="card-enterprise p-10 hover-lift group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors text-center">
                    <?= lang('App.service_3_title') ?>
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg mb-8 text-center max-w-sm mx-auto">
                    <?= lang('App.service_3_desc') ?>
                </p>

                <!-- Service Features List -->
                <div class="mt-8 space-y-3">
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.system_architecture') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.technology_strategy') ?></span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm">
                        <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600"><?= lang('App.performance_opt') ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= base_url('contact') ?>" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span><?= lang('App.get_started_today') ?></span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>



<!-- Industries We Serve Section -->
<section id="industries" class="py-32 gradient-secondary relative">
    <!-- Subtle background effects -->
    <div class="absolute inset-0 bg-enterprise-particles opacity-5"></div>

    <div class="max-w-7xl mx-auto px-4 container-responsive relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.industries_serve') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.industries_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.fintech_banking') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.fintech_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="150">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.healthcare_medical') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.healthcare_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14M5 9a2 2 0 012-2h10a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.ecommerce_retail') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.ecommerce_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="250">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.education_edtech') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.education_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.manufacturing') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.manufacturing_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift text-center group" data-aos="fade-up" data-aos-delay="350">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.professional_services') ?></h3>
                <p class="text-gray-600 leading-relaxed"><?= lang('App.professional_desc') ?></p>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= base_url('contact') ?>" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span><?= lang('App.explore_solutions') ?></span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
