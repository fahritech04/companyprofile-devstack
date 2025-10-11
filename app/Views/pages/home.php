<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden gradient-primary">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <!-- Primary gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-white via-blue-50/80 to-blue-100/60"></div>

        <!-- Subtle pattern overlay -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%230066ff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\');"></div>
    </div>

    <!-- Clean Geometric Elements -->
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="absolute -left-20 top-20 w-48 h-48 bg-blue-200/30 rounded-full blur-2xl"></div>
        <div class="absolute -right-20 bottom-20 w-56 h-56 bg-indigo-200/25 rounded-full blur-2xl"></div>
        <div class="absolute left-1/2 bottom-32 w-40 h-40 bg-sky-200/20 rounded-full blur-2xl"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center" data-aos="fade-up">
        <div class="space-y-16">
            <!-- Professional Badge -->
            <div class="inline-flex items-center px-8 py-3 rounded-full glass-effect shadow-soft">
                <span class="text-sm text-blue-900 font-semibold tracking-wide">✨ <?= lang('App.hero_subtitle') ?></span>
            </div>

            <!-- Main Heading -->
            <div class="space-y-8">
                <h1 class="text-blue-900 leading-tight max-w-6xl mx-auto">
                    <?= lang('App.hero_about') ?>
                </h1>
                <p class="text-xl md:text-2xl text-blue-800/80 leading-relaxed max-w-4xl mx-auto font-medium">
                    <?= lang('App.hero_description') ?>
                </p>
            </div>

            <!-- Call-to-Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
                <a href="#about" class="btn-primary px-12 py-5 rounded-2xl font-semibold text-white hover-lift inline-flex items-center justify-center">
                    <span class="text-lg mr-2">Explore Solutions</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="<?= base_url('contact') ?>" class="btn-secondary px-12 py-5 rounded-2xl font-semibold text-blue-600 hover-lift inline-flex items-center justify-center">
                    <span class="text-lg mr-2">Start Project</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>

            <!-- Minimal Scroll Indicator -->
            <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-blue-600/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Clean Section Divider -->
<div class="h-px bg-gradient-to-r from-transparent via-blue-100 to-transparent opacity-50"></div>

<!-- About Section -->
<section id="about" class="py-32 gradient-secondary">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right" class="relative">
                <div class="card-enterprise h-96 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center shadow-medium hover-lift">
                    <!-- Placeholder for image with modern icon -->
                    <div class="text-center">
                        <svg class="w-20 h-20 text-blue-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H7m-1 0l-3-3m0 0H1m7 3H5m0 0h2M7 3H5m0 0h2M7 3v16M7 19l3-3m0 0h2"></path>
                        </svg>
                        <p class="text-blue-800/70 font-semibold">Company Vision</p>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-200 rounded-full opacity-20 blur-xl"></div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-indigo-200 rounded-full opacity-15 blur-xl"></div>
            </div>
            <div data-aos="fade-left" class="space-y-8">
                <div>
                    <h2 class="text-blue-900 mb-6 max-w-lg">
                        <?= lang('App.about_title') ?>
                    </h2>
                    <div class="separator mb-8"></div>
                    <p class="text-gray-700 text-lg leading-relaxed max-w-xl">
                        <?= lang('App.about_description') ?>
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?= base_url('about') ?>" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                        <?= lang('App.learn_more') ?>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Offerings Section -->
<section id="offerings" class="py-32 gradient-secondary">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <!-- Heading and description -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
            <div data-aos="fade-right">
                <h2 class="text-blue-900 leading-tight max-w-xl">
                    <?= lang('App.offer_title') ?>
                </h2>
            </div>
            <div data-aos="fade-left" class="lg:pl-8">
                <p class="text-gray-700 text-xl leading-relaxed">
                    <?= lang('App.offer_subtitle') ?>
                </p>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-enterprise p-10 hover-lift" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 mb-6 text-blue-600 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2zm3 4h8M7 12h10M7 16h6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900"><?= lang('App.offer_1_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg"><?= lang('App.offer_1_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 mb-6 text-blue-600 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12M6 12h12"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900"><?= lang('App.offer_2_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg"><?= lang('App.offer_2_desc') ?></p>
            </div>

            <div class="card-enterprise p-10 hover-lift" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 mb-6 text-blue-600 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M4 6h16v12H4z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900"><?= lang('App.offer_3_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg"><?= lang('App.offer_3_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Key Strategies Section -->
<section id="strategies" class="py-32 bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/20 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03]">
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-600 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-indigo-600 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-blue-500 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 container-responsive">
        <!-- Strategic Leadership Heading -->
        <div class="text-center mb-24" data-aos="fade-up">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl mb-8 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <h2 class="text-blue-900 leading-tight uppercase tracking-wider mb-8 text-5xl font-bold">
                Strategic Approach
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl max-w-4xl mx-auto leading-relaxed font-medium">
                Our proven methodology transforms vision into reality through strategic implementation, cutting-edge technology, and data-driven decision making that delivers measurable business growth.
            </p>
        </div>

        <!-- Strategic Framework Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Strategic Pillar 1: Vision & Innovation -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 p-10 h-full border border-blue-100/50 hover:border-blue-300/50 relative overflow-hidden">
                    <!-- Number Badge -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform group-hover:scale-110 transition-transform">
                        #01
                    </div>

                    <!-- Strategic Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-3xl flex items-center justify-center mb-8 shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>

                    <!-- Content -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-gray-900 leading-tight">Vision-Driven Innovation</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            We craft forward-thinking strategies that align your business vision with market opportunities, leveraging cutting-edge innovation to drive sustainable competitive advantage.
                        </p>

                        <!-- Strategic Metrics -->
                        <div class="border-t border-gray-100 pt-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">85%</div>
                                    <div class="text-sm font-medium text-gray-500">Success Rate</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">2.5x</div>
                                    <div class="text-sm font-medium text-gray-500">ROI Growth</div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full btn-primary py-4 rounded-2xl font-semibold text-white hover-lift inline-flex items-center justify-center group">
                            <span>Explore Strategy</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-blue-100 rounded-full opacity-60 blur-xl group-hover:opacity-80 transition-opacity"></div>
                </div>
            </div>

            <!-- Strategic Pillar 2: Technology Excellence -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 p-10 h-full border border-blue-100/50 hover:border-blue-300/50 relative overflow-hidden">
                    <!-- Number Badge -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform group-hover:scale-110 transition-transform">
                        #02
                    </div>

                    <!-- Strategic Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-3xl flex items-center justify-center mb-8 shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                        </svg>
                    </div>

                    <!-- Content -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-gray-900 leading-tight">Technology Excellence</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Leveraging cloud-first architecture, AI-powered analytics, and scalable platforms to build robust, future-ready solutions that grow with your business.
                        </p>

                        <!-- Strategic Metrics -->
                        <div class="border-t border-gray-100 pt-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">99.9%</div>
                                    <div class="text-sm font-medium text-gray-500">Uptime SLA</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">50%</div>
                                    <div class="text-sm font-medium text-gray-500">Cost Savings</div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full btn-primary py-4 rounded-2xl font-semibold text-white hover-lift inline-flex items-center justify-center group">
                            <span>Explore Technology</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-blue-100 rounded-full opacity-60 blur-xl group-hover:opacity-80 transition-opacity"></div>
                </div>
            </div>

            <!-- Strategic Pillar 3: Results & Impact -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 p-10 h-full border border-blue-100/50 hover:border-blue-300/50 relative overflow-hidden">
                    <!-- Number Badge -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform group-hover:scale-110 transition-transform">
                        #03
                    </div>

                    <!-- Strategic Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-3xl flex items-center justify-center mb-8 shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.506 3.435 3.435 0 001.445-2.49L10.04 2.85a1.5 1.5 0 00-.848.508 1.5 1.5 0 00.08.992l1.72.93a.5.5 0 01.348.57L6.65 8.75a3.5 3.5 0 00-.245 4.58l3.21 1.61a1.5 1.5 0 01.628.95l2.22 2.92a1.5 1.5 0 01-.134 1.51 3.42 3.42 0 01-1.945.724 3.422 3.422 0 01-2.39-.999L3.62 11.5a3.5 3.5 0 00.352-5.13l2.92-.51a1.5 1.5 0 01.95-.627l.11-3.21a3.42 3.42 0 014.58-.245z"></path>
                        </svg>
                    </div>

                    <!-- Content -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-gray-900 leading-tight">Measurable Results</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            We deliver quantifiable outcomes through data-driven approaches, agile execution, and continuous optimization that directly impact your bottom line and market position.
                        </p>

                        <!-- Strategic Metrics -->
                        <div class="border-t border-gray-100 pt-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">250%</div>
                                    <div class="text-sm font-medium text-gray-500">Growth Achieved</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">6mo</div>
                                    <div class="text-sm font-medium text-gray-500">Time to Market</div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full btn-primary py-4 rounded-2xl font-semibold text-white hover-lift inline-flex items-center justify-center group">
                            <span>Explore Results</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-blue-100 rounded-full opacity-60 blur-xl group-hover:opacity-80 transition-opacity"></div>
                </div>
            </div>
        </div>

        <!-- Strategic Call to Action -->
        <div class="text-center mt-20" data-aos="fade-up" data-aos-delay="400">
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-12 shadow-2xl">
                <h3 class="text-3xl font-bold text-white mb-6">
                    Ready to Execute Your Vision?
                </h3>
                <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                    Let's discuss how our strategic approach can transform your business objectives into tangible results.
                </p>
                <button class="btn-secondary px-10 py-4 rounded-2xl font-semibold text-xl shadow-lg hover-lift inline-flex items-center">
                    <span>Schedule Strategic Consultation</span>
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-32 gradient-secondary">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-6">
                <?= lang('App.services_title') ?>
            </h2>
            <div class="separator mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-enterprise p-10 text-center hover-lift group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2zm3 4h8M7 12h10M7 16h6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.service_1_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg max-w-sm mx-auto"><?= lang('App.service_1_desc') ?></p>
            </div>
            <div class="card-enterprise p-10 text-center hover-lift group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.service_2_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg max-w-sm mx-auto"><?= lang('App.service_2_desc') ?></p>
            </div>
            <div class="card-enterprise p-10 text-center hover-lift group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mb-8 mx-auto text-blue-600 bg-blue-50 rounded-3xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-6 text-gray-900 group-hover:text-blue-600 transition-colors"><?= lang('App.service_3_title') ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg max-w-sm mx-auto"><?= lang('App.service_3_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-6">
                <?= lang('App.contact_title') ?>
            </h2>
            <div class="separator mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div data-aos="fade-right" class="space-y-8">
                <div>
                    <p class="text-gray-700 text-lg leading-relaxed max-w-md">
                        Ready to start your next project? Get in touch with us and let's discuss how we can help bring your vision to life.
                    </p>
                </div>
                <form class="space-y-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <input type="text" placeholder="Your Name" class="form-input w-full px-6 py-4 text-lg">
                        </div>
                        <div>
                            <input type="email" placeholder="Your Email" class="form-input w-full px-6 py-4 text-lg">
                        </div>
                    </div>
                    <div>
                        <textarea placeholder="Your Message" rows="6" class="form-input w-full px-6 py-4 text-lg resize-none"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn-primary px-10 py-4 rounded-full font-semibold text-white text-lg hover-lift w-full sm:w-auto">
                            <?= lang('App.send_message') ?>
                            <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div data-aos="fade-left" class="space-y-12">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-blue-900 mb-8">Get in Touch</h3>

                    <div class="flex items-start space-x-6 group hover-lift p-6 rounded-2xl transition-all">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2"><?= lang('App.contact_address') ?></h4>
                            <p class="text-gray-600 leading-relaxed">123 Business Street, City, Country</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-6 group hover-lift p-6 rounded-2xl transition-all">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2"><?= lang('App.contact_email') ?></h4>
                            <p class="text-gray-600 leading-relaxed">info@company.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-6 group hover-lift p-6 rounded-2xl transition-all">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2"><?= lang('App.contact_phone') ?></h4>
                            <p class="text-gray-600 leading-relaxed">+1 234 567 890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
