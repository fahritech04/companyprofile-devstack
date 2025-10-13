<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Portfolio Hero Section -->
<section class="py-32 bg-gradient-to-br from-slate-50 via-blue-50/40 to-indigo-50/30 relative overflow-hidden section-enterprise-premium">
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
        <div class="text-center space-y-16" data-aos="fade-up">
            <!-- Modern Badge -->
            <div class="inline-flex items-center px-6 py-2.5 rounded-full bg-blue-50/70 border border-blue-100/50 backdrop-blur-sm">
                <svg class="w-4 h-4 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-sm text-blue-900 font-medium"><?= lang('App.portfolio_showcase') ?></span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-blue-900 leading-tight max-w-6xl mx-auto">
                    <?= lang('App.portfolio_title') ?>
                </h1>
                <p class="text-xl text-blue-800/90 leading-relaxed max-w-4xl mx-auto font-medium">
                    <?= lang('App.portfolio_description') ?>
                </p>
            </div>

            <!-- Modern CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
                <a href="#portfolio-grid" class="group px-12 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.view_portfolio') ?></span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="#contact" class="group px-12 py-5 bg-white/80 backdrop-blur-sm text-blue-600 border border-blue-200 rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.discuss_project_btn') ?></span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section id="portfolio-grid" class="py-32 bg-white bg-professional-waves relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.our_portfolio') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.portfolio_grid_desc') ?>
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="100">
            <button class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl hover-lift font-semibold transition-all duration-300"><?= lang('App.all_projects') ?></button>
            <button class="px-8 py-3 bg-blue-50 text-blue-700 border border-blue-200 rounded-2xl hover:bg-blue-100 hover-lift font-semibold transition-all duration-300"><?= lang('App.web_design') ?></button>
            <button class="px-8 py-3 bg-blue-50 text-blue-700 border border-blue-200 rounded-2xl hover:bg-blue-100 hover-lift font-semibold transition-all duration-300"><?= lang('App.mobile_app') ?></button>
            <button class="px-8 py-3 bg-blue-50 text-blue-700 border border-blue-200 rounded-2xl hover:bg-blue-100 hover-lift font-semibold transition-all duration-300"><?= lang('App.branding') ?></button>
        </div>

        <!-- Portfolio Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/eCommerce_website.jpeg') ?>" alt="E-Commerce Website" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-blue-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 0a9 9 0 01-9-9m9 9a9 9 0 00-9 9m9-9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h.01M12 12h4.01M12 12h.01M12 12h.01"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.ecommerce_website') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.website_dev') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up" data-aos-delay="100">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/mobile_banking_app.jpeg') ?>" alt="Mobile Banking App" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-indigo-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.mobile_banking') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.mobile_application') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up" data-aos-delay="200">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/brand_identity_design.jpeg') ?>" alt="Brand Identity Design" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-purple-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.brand_identity') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.branding') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/educational_platform.jpeg') ?>" alt="Educational Platform" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-green-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.educational_platform') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.web_application') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up" data-aos-delay="100">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/restaurant_app.jpeg') ?>" alt="Restaurant App" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-orange-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4 0V2a2 2 0 012-2h4a2 2 0 012 2v2m-8 0h8"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.restaurant_app') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.mobile_application') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg card-enterprise hover-lift" data-aos="fade-up" data-aos-delay="200">
                <div class="h-64 relative overflow-hidden">
                    <img src="<?= base_url('images/corporate_branding.jpeg') ?>" alt="Corporate Branding" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-enterprise-particles opacity-10"></div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute bottom-0 p-8 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="w-12 h-12 bg-teal-600/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-white transition-colors"><?= lang('App.corporate_branding') ?></h3>
                        <p class="mb-4 text-white font-medium"><?= lang('App.branding') ?></p>
                        <a href="#" class="inline-flex items-center text-gray-900 hover:text-white font-semibold">
                            <span><?= lang('App.view_project') ?></span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-32 gradient-secondary relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-enterprise-geometric opacity-10"></div>
    <div class="absolute inset-0 bg-professional-waves opacity-5"></div>

    <div class="max-w-7xl mx-auto px-4 container-responsive relative z-10">
        <div class="text-center" data-aos="fade-up">
            <!-- Section Header -->
            <div class="mb-16">
                <h2 class="text-blue-900 mb-8 text-4xl lg:text-5xl font-bold leading-tight">
                    <?= lang('App.ready_to_start') ?>
                </h2>
                <div class="separator mx-auto mb-8"></div>
                <p class="text-gray-700 text-xl leading-relaxed max-w-3xl mx-auto mb-12">
                    <?= lang('App.discuss_vision') ?>
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 mb-16">
                <a href="<?= base_url('contact') ?>" class="group px-12 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300 text-lg">
                    <span class="mr-3"><?= lang('App.start_consultation') ?></span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
                <a href="#portfolio-grid" class="group px-12 py-5 bg-white/80 backdrop-blur-sm text-blue-600 border border-blue-200 rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300 text-lg">
                    <span class="mr-3"><?= lang('App.view_more_portfolio') ?></span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?= lang('App.phone') ?></h3>
                    <p class="text-gray-600">+62 812-3456-7890</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?= lang('App.email') ?></h3>
                    <p class="text-gray-600">info@company.com</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?= lang('App.location') ?></h3>
                    <p class="text-gray-600">Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
