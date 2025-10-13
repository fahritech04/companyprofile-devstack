<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Spectacular About Hero Section -->
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span class="text-sm text-blue-900 font-medium"><?= lang('App.meet_our_team') ?></span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-blue-900 leading-tight max-w-6xl mx-auto">
                    <?= lang('App.about_title') ?>
                </h1>
                <p class="text-xl text-blue-800/90 leading-relaxed max-w-4xl mx-auto font-medium">
                    <?= lang('App.about_description') ?>
                </p>

                <!-- Achievement Badges -->
                <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">5+</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.years_excellence') ?></span>
                    </div>
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">50+</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.projects_completed') ?></span>
                    </div>
                    <div class="flex items-center space-x-2 px-6 py-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-blue-100/50 shadow-sm">
                        <span class="text-2xl font-bold text-blue-600">100%</span>
                        <span class="text-blue-900 font-medium"><?= lang('App.client_satisfaction') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clean Section Divider -->
<div class="h-px bg-gradient-to-r from-transparent via-blue-100 to-transparent opacity-50"></div>

<!-- Company Story Section -->
<section class="py-32 bg-white bg-professional-waves relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.our_story_title') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.our_story_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.innovation_first_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.innovation_first_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.expert_team_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.expert_team_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.proven_results_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.proven_results_desc') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-32 bg-white bg-enterprise-geometric relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.vision_tomorrow_title') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.vision_tomorrow_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-8" data-aos="fade-right">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.innovation_excellence_title') ?></h3>
                        <p class="text-gray-600"><?= lang('App.innovation_excellence_desc') ?></p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.client_centric_title') ?></h3>
                        <p class="text-gray-600"><?= lang('App.client_centric_desc') ?></p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.global_impact_title') ?></h3>
                        <p class="text-gray-600"><?= lang('App.global_impact_desc') ?></p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50/50 to-indigo-50/50 p-8 rounded-3xl border border-blue-100/30" data-aos="fade-left">
                <h3 class="text-2xl font-bold text-gray-900 mb-6"><?= lang('App.why_choose_title') ?></h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700"><?= lang('App.proven_track_record') ?></span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700"><?= lang('App.expert_diverse_team') ?></span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700"><?= lang('App.customized_solutions') ?></span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700"><?= lang('App.continuous_innovation') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
