<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- ═══════════════════════════════════════════════════════════════
     HERO SECTION — Netdata-Inspired Dark Navy
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-screen flex items-center relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f 0%, #0a1628 50%, #060e1f 100%);">
    <!-- Animated Grid -->
    <div class="grid-bg"></div>
    <div class="dot-grid-dark"></div>

    <!-- Glow Orbs -->
    <div class="glow-orb glow-orb-1"></div>
    <div class="glow-orb glow-orb-2"></div>
    <div class="glow-orb glow-orb-3"></div>

    <!-- Floating Particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>

    <!-- Hero Content -->
    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full py-32">
        <div class="text-center space-y-8 max-w-4xl mx-auto">

            <!-- Animated Badge -->
            <div data-aos="fade-down" data-aos-delay="0">
                <div class="badge-glow inline-flex items-center">
                    <span class="badge-pulse"></span>
                    <?= lang('App.badge_text') ?? 'Enterprise Digital Solutions' ?>
                </div>
            </div>

            <!-- Massive Headline -->
            <h1 class="text-gradient-blue leading-tight" data-aos="fade-up" data-aos-delay="100">
                <?= lang('App.transform_digital_future') ?>
            </h1>

            <!-- Subtext -->
            <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                <?= lang('App.hero_subtitle') ?? 'We deliver cutting-edge technology solutions that transform businesses and accelerate digital growth with precision and innovation.' ?>
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="<?= base_url('contact') ?>" class="btn-glow text-base px-8 py-4">
                    <span><?= lang('App.get_started') ?? 'Get Started' ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="<?= base_url('portfolio') ?>" class="btn-glass text-base px-8 py-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                    <span><?= lang('App.view_portfolio') ?? 'View Our Work' ?></span>
                </a>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="max-w-4xl mx-auto mt-20" data-aos="fade-up" data-aos-delay="400">
            <div class="stats-bar-dark">
                <div class="stat-item-dark">
                    <div class="stat-number-dark" data-counter="50" data-suffix="+">0</div>
                    <div class="stat-label-dark"><?= lang('App.projects_delivered') ?? 'Projects Delivered' ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark" data-counter="98" data-suffix="%">0</div>
                    <div class="stat-label-dark"><?= lang('App.client_satisfaction') ?? 'Client Satisfaction' ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark" data-counter="5" data-suffix="+">0</div>
                    <div class="stat-label-dark"><?= lang('App.years_experience') ?? 'Years Experience' ?></div>
                </div>
                <div class="stat-item-dark">
                    <div class="stat-number-dark">24/7</div>
                    <div class="stat-label-dark"><?= lang('App.support') ?? 'Support' ?></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom fade -->
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     ABOUT SECTION
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-24 relative" style="background: #040b18;">
    <div class="absolute inset-0 dot-grid-dark opacity-20"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left -->
            <div class="space-y-6" data-aos="fade-right">
                <div class="badge-glow inline-flex items-center text-xs">
                    <span class="badge-pulse"></span>
                    ABOUT US
                </div>
                <h2 class="text-gradient-blue"><?= lang('App.about_title') ?? 'Building the Future of Digital' ?></h2>
                <div class="separator"></div>
                <p class="text-gray-400 leading-relaxed">
                    <?= lang('App.about_description') ?? 'We are a team of passionate developers, designers, and strategists who build world-class digital products. Our mission is to empower businesses with technology that drives real results.' ?>
                </p>
                <p class="text-gray-400 leading-relaxed">
                    <?= lang('App.about_description_2') ?? 'From startups to enterprises, we deliver solutions that are scalable, secure, and beautiful. Every line of code we write is crafted with purpose and precision.' ?>
                </p>
                <a href="<?= base_url('about') ?>" class="btn-glass px-6 py-3 text-sm inline-flex mt-4">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Right - Feature Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" data-aos="fade-left">
                <div class="card-dark p-6 group">
                    <div class="icon-box-dark mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold mb-2"><?= lang('App.fast_delivery') ?? 'Fast Delivery' ?></h4>
                    <p class="text-gray-400 text-sm">
                        <?= lang('App.fast_delivery_desc') ?? 'Agile development with rapid iteration cycles.' ?></p>
                </div>
                <div class="card-dark p-6 group">
                    <div class="icon-box-dark mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold mb-2"><?= lang('App.secure_reliable') ?? 'Secure & Reliable' ?>
                    </h4>
                    <p class="text-gray-400 text-sm">
                        <?= lang('App.secure_reliable_desc') ?? 'Enterprise-grade security and 99.9% uptime.' ?></p>
                </div>
                <div class="card-dark p-6 group">
                    <div class="icon-box-dark mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold mb-2">
                        <?= lang('App.scalable_arch') ?? 'Scalable Architecture' ?></h4>
                    <p class="text-gray-400 text-sm">
                        <?= lang('App.scalable_arch_desc') ?? 'Built to grow with your business needs.' ?></p>
                </div>
                <div class="card-dark p-6 group">
                    <div class="icon-box-dark mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold mb-2"><?= lang('App.dedicated_support') ?? '24/7 Support' ?>
                    </h4>
                    <p class="text-gray-400 text-sm">
                        <?= lang('App.dedicated_support_desc') ?? 'Round-the-clock assistance when you need it.' ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICES / OFFERINGS — Feature Tabs (Netdata Style)
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-24 relative" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <!-- Subtle glow -->
    <div class="glow-orb"
        style="width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.08),transparent 70%);top:20%;right:-5%;filter:blur(80px);">
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="badge-glow inline-flex items-center text-xs mb-6">
                <span class="badge-pulse"></span>
                OUR SERVICES
            </div>
            <h2 class="text-gradient-blue mb-6"><?= lang('App.services_title') ?? 'What We Offer' ?></h2>
            <p class="text-gray-400">
                <?= lang('App.services_subtitle') ?? 'End-to-end digital solutions tailored for your business growth and digital transformation.' ?>
            </p>
        </div>

        <!-- Feature Tabs -->
        <div class="feature-tabs" data-aos="fade-up" data-aos-delay="100">
            <!-- Tab Nav -->
            <div class="feature-tab-nav">
                <button class="feature-tab-btn active" data-tab="tab-web">
                    <span class="text-sm font-semibold"><?= lang('App.web_development') ?? 'Web Development' ?></span>
                    <p class="text-xs text-gray-500 mt-1">
                        <?= lang('App.web_dev_short') ?? 'Modern, responsive web applications' ?></p>
                </button>
                <button class="feature-tab-btn" data-tab="tab-mobile">
                    <span class="text-sm font-semibold"><?= lang('App.mobile_apps') ?? 'Mobile Apps' ?></span>
                    <p class="text-xs text-gray-500 mt-1">
                        <?= lang('App.mobile_short') ?? 'iOS & Android native experiences' ?></p>
                </button>
                <button class="feature-tab-btn" data-tab="tab-cloud">
                    <span class="text-sm font-semibold"><?= lang('App.cloud_solutions') ?? 'Cloud Solutions' ?></span>
                    <p class="text-xs text-gray-500 mt-1">
                        <?= lang('App.cloud_short') ?? 'Scalable cloud infrastructure' ?></p>
                </button>
                <button class="feature-tab-btn" data-tab="tab-consulting">
                    <span class="text-sm font-semibold"><?= lang('App.consulting') ?? 'Tech Consulting' ?></span>
                    <p class="text-xs text-gray-500 mt-1">
                        <?= lang('App.consulting_short') ?? 'Strategic technology guidance' ?></p>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="feature-tab-content">
                <div id="tab-web" class="feature-tab-panel" style="display:block;">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <div class="icon-box-dark">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <h3 class="text-white text-xl"><?= lang('App.web_development') ?? 'Web Development' ?></h3>
                        </div>
                        <p class="text-gray-400">
                            <?= lang('App.web_dev_desc') ?? 'We build modern, performant web applications using the latest technologies. From progressive web apps to complex enterprise platforms, we deliver pixel-perfect experiences that convert.' ?>
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-6">
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>React / Next.js</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Vue / Nuxt.js</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Laravel / CodeIgniter</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>API Development</span></div>
                        </div>
                    </div>
                </div>
                <div id="tab-mobile" class="feature-tab-panel" style="display:none;">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <div class="icon-box-dark">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-white text-xl"><?= lang('App.mobile_apps') ?? 'Mobile Apps' ?></h3>
                        </div>
                        <p class="text-gray-400">
                            <?= lang('App.mobile_desc') ?? 'Native and cross-platform mobile applications that deliver exceptional user experiences. We build apps that your users will love, with smooth animations and intuitive interfaces.' ?>
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-6">
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Flutter</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>React Native</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>iOS (Swift)</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Android (Kotlin)</span></div>
                        </div>
                    </div>
                </div>
                <div id="tab-cloud" class="feature-tab-panel" style="display:none;">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <div class="icon-box-dark">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <h3 class="text-white text-xl"><?= lang('App.cloud_solutions') ?? 'Cloud Solutions' ?></h3>
                        </div>
                        <p class="text-gray-400">
                            <?= lang('App.cloud_desc') ?? 'Cloud-native architectures that scale automatically with your business. We design and deploy infrastructure that is reliable, cost-effective, and secure.' ?>
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-6">
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>AWS / GCP / Azure</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Docker / K8s</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>CI/CD Pipelines</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Serverless</span></div>
                        </div>
                    </div>
                </div>
                <div id="tab-consulting" class="feature-tab-panel" style="display:none;">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <div class="icon-box-dark">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-white text-xl"><?= lang('App.consulting') ?? 'Tech Consulting' ?></h3>
                        </div>
                        <p class="text-gray-400">
                            <?= lang('App.consulting_desc') ?? 'Strategic technology guidance to help you make the right decisions. We analyze your needs, recommend optimal solutions, and guide your digital transformation journey.' ?>
                        </p>
                        <div class="grid grid-cols-2 gap-3 mt-6">
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Tech Strategy</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Architecture Review</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Code Audit</span></div>
                            <div class="flex items-center space-x-2 text-sm text-gray-300"><svg
                                    class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg><span>Digital Roadmap</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     WHY CHOOSE US — Card Grid
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-24 relative" style="background: #040b18;">
    <div class="glow-orb"
        style="width:500px;height:500px;background:radial-gradient(circle,rgba(37,99,235,.06),transparent 70%);top:10%;left:-10%;filter:blur(100px);">
    </div>
    <div class="divider-glow mb-16"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="badge-glow inline-flex items-center text-xs mb-6">
                <span class="badge-pulse"></span>
                WHY DEVSTACK
            </div>
            <h2 class="text-gradient-blue mb-6"><?= lang('App.why_choose_us') ?? 'Why Choose Us' ?></h2>
            <p class="text-gray-400">
                <?= lang('App.why_choose_subtitle') ?? 'We combine technical excellence with creative innovation to deliver outstanding results.' ?>
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="0">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">
                    <?= lang('App.cutting_edge_tech') ?? 'Cutting-Edge Technology' ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.cutting_edge_desc') ?? 'We stay ahead of the curve, leveraging the latest frameworks and tools to build future-proof solutions.' ?>
                </p>
            </div>

            <!-- Card 2 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3"><?= lang('App.expert_team') ?? 'Expert Team' ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.expert_team_desc') ?? 'Our seasoned professionals bring years of experience across diverse industries and technologies.' ?>
                </p>
            </div>

            <!-- Card 3 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3"><?= lang('App.proven_results') ?? 'Proven Results' ?>
                </h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.proven_results_desc') ?? 'Track record of delivering successful projects on time and within budget for clients worldwide.' ?>
                </p>
            </div>

            <!-- Card 4 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3"><?= lang('App.agile_approach') ?? 'Agile Approach' ?>
                </h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.agile_desc') ?? 'Iterative development with continuous feedback ensures your product evolves with your needs.' ?>
                </p>
            </div>

            <!-- Card 5 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">
                    <?= lang('App.transparent_pricing') ?? 'Transparent Pricing' ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.transparent_desc') ?? 'No hidden fees. Clear project scoping and honest estimates so you always know what to expect.' ?>
                </p>
            </div>

            <!-- Card 6 -->
            <div class="card-dark p-8 group" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box-dark mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">
                    <?= lang('App.ongoing_support') ?? 'Ongoing Support' ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    <?= lang('App.ongoing_support_desc') ?? 'We don\'t just build and leave. Our dedicated support ensures your product stays in peak condition.' ?>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CTA SECTION
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #0a1628);">
    <!-- Glow -->
    <div class="glow-orb"
        style="width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.12),transparent 70%);top:50%;left:50%;transform:translate(-50%,-50%);filter:blur(100px);">
    </div>
    <div class="absolute inset-0 grid-bg pointer-events-none"></div>

    <div class="max-w-3xl mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
        <h2 class="text-gradient-blue mb-6"><?= lang('App.cta_title') ?? 'Ready to Transform Your Business?' ?></h2>
        <p class="text-gray-400 text-lg mb-10 max-w-xl mx-auto">
            <?= lang('App.cta_subtitle') ?? 'Let\'s discuss how we can help you achieve your digital goals. Schedule a free consultation today.' ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('contact') ?>" class="btn-glow text-base px-10 py-4 animate-glow">
                <span><?= lang('App.schedule_call') ?? 'Schedule a Call' ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
            <a href="<?= base_url('services') ?>" class="btn-glass text-base px-10 py-4">
                <span><?= lang('App.explore_services') ?? 'Explore Services' ?></span>
            </a>
        </div>
    </div>
</section>

<!-- Feature Tabs Init -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.initFeatureTabs) window.initFeatureTabs();
    });
</script>

<?= $this->endSection() ?>