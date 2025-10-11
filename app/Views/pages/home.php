<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Spectacular Enterprise Hero Section -->
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
                <span class="text-sm text-blue-900 font-medium">Digital Innovation Leaders</span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-blue-900 leading-tight max-w-6xl mx-auto">
                    Transform Your Digital Future
                </h1>
                <p class="text-xl text-blue-800/90 leading-relaxed max-w-4xl mx-auto font-medium">
                    We combine cutting-edge technology with strategic insights to deliver exceptional digital solutions that drive measurable business growth and innovation.
                </p>

                <!-- Modern Metric Badges -->
                <div class="flex flex-wrap justify-center gap-6 max-w-3xl mx-auto">
                    <div class="flex items-center space-x-2 px-4 py-2 bg-white/40 backdrop-blur-sm rounded-full border border-blue-100/50">
                        <span class="text-2xl font-bold text-blue-600">250+</span>
                        <span class="text-blue-900 font-medium">Projects Completed</span>
                    </div>
                    <div class="flex items-center space-x-2 px-4 py-2 bg-white/40 backdrop-blur-sm rounded-full border border-blue-100/50">
                        <span class="text-2xl font-bold text-blue-600">99.9%</span>
                        <span class="text-blue-900 font-medium">Client Satisfaction</span>
                    </div>
                    <div class="flex items-center space-x-2 px-4 py-2 bg-white/40 backdrop-blur-sm rounded-full border border-blue-100/50">
                        <span class="text-2xl font-bold text-blue-600">5+</span>
                        <span class="text-blue-900 font-medium">Years Experience</span>
                    </div>
                </div>
            </div>

            <!-- Modern CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
                <a href="#contact" class="group px-12 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2">Start Your Digital Journey</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="#about" class="group px-12 py-5 bg-white/80 backdrop-blur-sm text-blue-600 border border-blue-200 rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2">Explore Our Work</span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Clean Section Divider -->
<div class="h-px bg-gradient-to-r from-transparent via-blue-100 to-transparent opacity-50"></div>

<!-- About Section -->
<section id="about" class="py-32 bg-white bg-professional-waves relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                About Us
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                We're a team of passionate innovators dedicated to transforming businesses through cutting-edge technology solutions. Our mission is to deliver exceptional digital experiences that drive measurable growth and sustainable success.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be the leading innovation partner that empowers businesses to thrive in the digital age through transformative technology solutions.
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Team</h3>
                <p class="text-gray-600 leading-relaxed">
                    A diverse team of experts with years of experience in technology, design, and business strategy working collaboratively.
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Impact</h3>
                <p class="text-gray-600 leading-relaxed">
                    Delivering measurable results through innovative solutions that help businesses grow and succeed in competitive markets.
                </p>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= base_url('about') ?>" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span>Learn More About Us</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
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

<!-- Strategic Approach Section -->
<section id="strategies" class="py-32 bg-white bg-enterprise-geometric relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                Strategic Approach
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                Our proven methodology combines strategic insight, innovative technology, and data-driven decisions to deliver exceptional business results and sustainable growth.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Strategic Innovation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Forward-thinking strategies that align your vision with market opportunities and cutting-edge technology solutions.
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Technical Excellence</h3>
                <p class="text-gray-600 leading-relaxed">
                    Robust, scalable solutions built with cloud-first architecture, AI capabilities, and enterprise-grade security.
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Measurable Impact</h3>
                <p class="text-gray-600 leading-relaxed">
                    Data-driven results that optimize performance, reduce costs, and accelerate your path to market success.
                </p>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="#contact" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span>Start Your Strategic Journey</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
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
