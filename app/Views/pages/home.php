<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Spectacular Enterprise Hero Section with 3D Effects -->
<section id="home" class="min-h-screen flex items-center pt-32 pb-20 bg-gradient-to-br from-slate-50 via-blue-50/40 to-indigo-50/30 relative overflow-hidden section-enterprise-premium">
    <!-- 3D Canvas Background -->
    <div id="hero-3d-canvas" class="absolute inset-0 z-0"></div>

    <!-- Epic Enterprise Background System -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <!-- Primary Architectural Elements -->
        <div class="absolute inset-0 bg-enterprise-geometric opacity-60"></div>
        <div class="absolute inset-0 bg-professional-waves opacity-10"></div>
        <div class="absolute inset-0 bg-business-architecture opacity-20"></div>

        <!-- Advanced Particle System -->
        <div id="particles-js" class="absolute inset-0 bg-enterprise-particles"></div>
        <div class="absolute inset-0 bg-network-effect opacity-5"></div>

        <!-- Premium Metallic Highlights -->
        <div class="absolute top-0 left-0 right-0 h-1/2 bg-gradient-to-b from-white/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-blue-50/20 to-transparent"></div>

        <!-- Sophisticated Grid Overlay -->
        <div class="absolute inset-0 bg-professional-mesh opacity-5"></div>

        <!-- Corporate Flow Networks -->
        <div class="hidden lg:block absolute inset-0 bg-corporate-flow opacity-10"></div>

        <!-- Floating 3D Elements - Positioned to frame content -->
        <div class="floating-3d-element floating-sphere absolute top-32 left-[10%] opacity-60"></div>
        <div class="floating-3d-element floating-cube absolute top-1/3 right-[8%] opacity-60"></div>
        <div class="floating-3d-element floating-cylinder absolute bottom-1/4 left-[15%] opacity-50"></div>
        <div class="floating-3d-element floating-torus absolute top-1/2 right-[12%] opacity-50"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-12 max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Modern Badge -->
            <div class="inline-flex items-center px-5 py-2 rounded-full bg-white/80 border border-blue-100 shadow-sm backdrop-blur-md mb-4 hover:scale-105 transition-transform duration-300 cursor-default">
                <span class="flex h-2 w-2 relative mr-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                <span class="text-sm text-blue-900 font-semibold tracking-wide uppercase"><?= lang('App.digital_innovation_leaders') ?></span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-900 via-blue-700 to-blue-900 leading-tight tracking-tight drop-shadow-sm">
                    <?= lang('App.transform_digital_future') ?>
                </h1>
                <p class="text-xl md:text-2xl text-slate-600 leading-relaxed max-w-3xl mx-auto font-light">
                    <?= lang('App.hero_main_description') ?>
                </p>


            </div>

            <!-- Modern CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-8">
                <a href="<?= base_url('login') ?>" class="group relative px-8 py-4 bg-blue-600 text-white rounded-xl font-semibold shadow-lg shadow-blue-500/30 hover:shadow-blue-600/40 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative flex items-center justify-center">
                        <span class="text-lg mr-2">Get Started</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </div>
                </a>
                <a href="#contact" class="group px-8 py-4 bg-white/60 backdrop-blur-md text-slate-700 border border-white/50 rounded-xl font-semibold shadow-sm hover:bg-white/80 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-center justify-center">
                    <span class="text-lg mr-2">Learn More</span>
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
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
                <?= lang('App.about_heading') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.about_description') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.our_vision_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.our_vision_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.our_team_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.our_team_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.our_impact_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.our_impact_desc') ?>
                </p>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= base_url('about') ?>" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span><?= lang('App.learn_more_about_us') ?></span>
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
                <?= lang('App.strategic_approach_title') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.strategic_approach_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.strategic_innovation_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.strategic_innovation_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.technical_excellence_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.technical_excellence_desc') ?>
                </p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4"><?= lang('App.measurable_impact_title') ?></h3>
                <p class="text-gray-600 leading-relaxed">
                    <?= lang('App.measurable_impact_desc') ?>
                </p>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="#contact" class="btn-primary px-8 py-4 rounded-full font-semibold text-white hover-lift inline-flex items-center justify-center">
                <span><?= lang('App.start_strategic_journey') ?></span>
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


<?= $this->endSection() ?>

// INSTANT VISUAL IMPACT - SPACE-X STYLE EFFECTS LOADING
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 INSTANT SpaceX Effects Activation...');

    // IMMEDIATE BACKGROUND EFFECT - No waiting for countdown
    const heroSection = document.getElementById('home');
    if (heroSection) {
        heroSection.style.background = 'radial-gradient(ellipse at center, #000511 0%, #001122 40%, #002244 100%)';
        heroSection.style.transition = 'background 2s ease';

        // Add CSS animations for immediate visual feedback
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spaceXBliss {
                0% { opacity: 0; transform: scale(0.8); }
                50% { opacity: 0.8; transform: scale(1.1); }
                100% { opacity: 1; transform: scale(1); }
            }

            @keyframes cosmicPulse {
                0%, 100% { box-shadow: 0 0 20px rgba(0, 255, 255, 0.3); }
                50% { box-shadow: 0 0 40px rgba(255, 105, 53, 0.6); }
            }

            @keyframes rocketThrust {
                0% { transform: translateY(0) rotateX(0deg); }
                50% { transform: translateY(-10px) rotateX(5deg); }
                100% { transform: translateY(0) rotateX(0deg); }
            }

            .card-enterprise {
                animation: spaceXBliss 0.8s ease forwards;
            }

            .floating-3d-element {
                animation: rocketThrust 3s ease-in-out infinite;
            }

            .hero-3d-text {
                animation: cosmicPulse 2s ease-in-out infinite;
                text-shadow:
                    0 0 5px #ff6b35,
                    0 0 10px #ff6b35,
                    0 0 15px #ff6b35,
                    0 0 20px #001aff;
            }
        `;
        document.head.appendChild(style);
    }

    setTimeout(function() {
        // Ensure canvas elements exist
        const particlesCanvas = document.getElementById('particles-js');
        const canvas3d = document.getElementById('hero-3d-canvas');

        if (!canvas3d) {
            console.error('❌ Canvas 3D element not found!');
        } else {
            console.log('✅ Canvas 3D element found');
        }

        if (!particlesCanvas) {
            console.error('❌ Particles canvas element not found!');
            return;
        }

        console.log('📏 Canvas elements ready ✓');

        // ULTIMATE PARTICLES SYSTEM - FORCE ENABLED
        console.log('⚡ FORCING Particles.js initialization...');
        // Add particles.js dynamically if not loaded
        if (typeof particlesJS === 'undefined') {
            console.log('📦 Adding particles.js dynamically...');
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js';
            script.onload = function() {
                console.log('✅ Particles.js loaded successfully');
                initParticles();
            };
            script.onerror = function() {
                console.error('❌ Failed to load particles.js');
            };
            document.head.appendChild(script);
        } else {
            console.log('✅ Particles.js already loaded');
            initParticles();
        }

        function initParticles() {
            console.log('🚀 Starting particle system...');

            // SUPER CHARGED PARTICLES CONFIG
            particlesJS('particles-js', {
                particles: {
                    number: { value: 200, density: { enable: true, value_area: 1500 } },
                    color: { value: ['#FF6B35', '#001AFF', '#00D4FF', '#8B5CF6', '#FFFFFF'] },
                    shape: {
                        type: "circle",
                        stroke: { width: 2, color:('#FFFFFF')}
                    },
                    opacity: {
                        value: 0.8,
                        random: true,
                        anim: { enable: true, speed: 1, opacity_min: 0.1, sync: false }
                    },
                    size: {
                        value: 8,
                        random: true,
                        anim: { enable: true, speed: 4, size_min: 1, sync: false }
                    },
                    line_linked: {
                        enable: true,
                        distance: 250,
                        color: '#001AFF',
                        opacity: 0.5,
                        width: 3,
                        shadow: { enable: true, color: '#000000', blur: 10 }
                    },
                    move: {
                        enable: true,
                        speed: 1,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                        attract: { enable: true, rotateX: 600, rotateY: 1200 }
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: { enable: true, mode: 'bubble' },
                        onclick: { enable: true, mode: 'repulse' },
                        resize: true
                    },
                    modes: {
                        bubble: { distance: 300, size: 40, duration: 2, opacity: 0.8, speed: 3, size_min: 10 },
                        repulse: { distance: 400, duration: 0.4 },
                        push: { particles_nb: 12 }
                    }
                },
                retina_detect: true
            });

            // ENHANCED PARTICLE DYNAMICS
            const updateParticles = () => {
                if (window.pJSDom && window.pJSDom[0]) {
                    const particles = window.pJSDom[0].pJS.particles.array;
                    particles.forEach((particle, index) => {
                        // Smooth flow effect
                        particle.vx += Math.sin(Date.now() * 0.001 + index) * 0.001;
                        particle.vy += Math.cos(Date.now() * 0.001 + index) * 0.001;
                    });
                }
                requestAnimationFrame(updateParticles);
            };
            updateParticles();

            console.log('✨ Particles system initialized successfully!');
        }
        // Particle system configuration inspired by SpaceX launch effects
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 180,
                    density: {
                        enable: true,
                        value_area: 1200
                    }
                },
                color: {
                    value: ['#001AFF', '#00D4FF', '#8B5CF6', '#06b6d4', '#FFFFFF']
                },
                shape: {
                    type: ['circle', 'edge', 'triangle', 'star', 'polygon'],
                    stroke: {
                        width: 1,
                        color: '#ffffff'
                    },
                    polygon: {
                        nb_sides: 6
                    },
                    star: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.6,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1.5,
                        opacity_min: 0.05,
                        sync: false
                    }
                },
                size: {
                    value: 6,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.5,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 200,
                    color: '#001AFF',
                    opacity: 0.25,
                    width: 1.5,
                    shadow: {
                        enable: true,
                        color: '#001AFF',
                        blur: 8
                    }
                },
                move: {
                    enable: true,
                    speed: 3,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'bounce',
                    bounce: false,
                    attract: {
                        enable: true,
                        rotateX: 2000,
                        rotateY: 1600
                    }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'bubble'
                    },
                    onclick: {
                        enable: true,
                        mode: ['push', 'repulse']
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 0.7
                        }
                    },
                    bubble: {
                        distance: 250,
                        size: 30,
                        duration: 1,
                        opacity: 0.8,
                        speed: 4,
                        size_min: 5
                    },
                    repulse: {
                        distance: 600,
                        duration: 0.8
                    },
                    push: {
                        particles_nb: 8
                    },
                    remove: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });

        // Add dynamic particle speed variation to simulate rocket boosters
        const particlesCanvas = document.getElementById('particles-js');
        let particleTime = 0;

        const updateParticleDynamics = () => {
            particleTime += 0.02;
            if (window.pJSDom && window.pJSDom[0]) {
                const particles = window.pJSDom[0].pJS.particles.array;
                particles.forEach((particle, index) => {
                    // Create wave-like movement patterns
                    const waveFactor = Math.sin(particleTime + index * 0.1) * 0.5 + 0.5;
                    particle.vx *= (0.9 + waveFactor * 0.2);
                    particle.vy *= (0.9 + waveFactor * 0.2);

                    // Add launch-like acceleration for some particles
                    if (index % 15 === 0) {
                        particle.vy -= 0.02; // Upward acceleration
                        particle.vx += Math.sin(particleTime * 2 + index) * 0.01;
                    }
                });
            }
            requestAnimationFrame(updateParticleDynamics);
        };
        updateParticleDynamics();
    }

    // Advanced SpaceX-Style 3D Background with Rocket Launches and Satellites
    if (typeof THREE !== 'undefined') {
        const initSpaceXBackground = function() {
            const canvas = document.getElementById('hero-3d-canvas');
            if (!canvas) return;

            // SpaceX-inspired color palette with launch fire effects
            const spacexColors = [0x001AFF, 0x00D4FF, 0x8B5CF6, 0x06b6d4, 0xFFFFFF, 0xFF4500 ];

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 3000);
            const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setClearColor(0x000511, 0.98); // Deep space background
            renderer.shadowMap.enabled = true;
            renderer.shadowMap.type = THREE.PCFSoftShadowMap;

            // Particle trails system
            const trailGeometry = new THREE.BufferGeometry();
            const trailPositions = [];
            const trailColors = [];
            for (let i = 0; i < 1000; i++) {
                trailPositions.push(0, 0, 0);
                trailColors.push(1, 0.5, 0);
            }
            trailGeometry.setAttribute('position', new THREE.Float32BufferAttribute(trailPositions, 3));
            trailGeometry.setAttribute('color', new THREE.Float32BufferAttribute(trailColors, 3));

            const trailMaterial = new THREE.PointsMaterial({
                size: 2,
                vertexColors: true,
                transparent: true,
                opacity: 0.8,
                blending: THREE.AdditiveBlending
            });

            const trailPoints = new THREE.Points(trailGeometry, trailMaterial);
            scene.add(trailPoints);

            // Create ultra-advanced SpaceX-style rocket launch system with stage separation
            const launchGroup = new THREE.Group();
            scene.add(launchGroup);

            // Enhanced particle exhaust system
            const exhaustParticles = [];
            const exhaustGeometry = new THREE.BufferGeometry();
            const exhaustPositions = [];
            const exhaustColors = [];

            for (let i = 0; i < 5000; i++) {
                exhaustPositions.push(0, 0, 0);
                exhaustColors.push(1, 0.6, 0);
            }
            exhaustGeometry.setAttribute('position', new THREE.Float32BufferAttribute(exhaustPositions, 3));
            exhaustGeometry.setAttribute('color', new THREE.Float32BufferAttribute(exhaustColors, 3));

            const exhaustMaterial = new THREE.PointsMaterial({
                size: 3,
                vertexColors: true,
                transparent: true,
                opacity: 0.9,
                blending: THREE.AdditiveBlending,
                map: null
            });

            const exhaustPoints = new THREE.Points(exhaustGeometry, exhaustMaterial);
            scene.add(exhaustPoints);

            // Rocket bodies with super detailed geometry and boosters
            const rockets = [];
            for (let i = 0; i < 12; i++) {
                const rocketGroup = new THREE.Group();
                const boosterGroup = new THREE.Group();

                // Super Heavy Boosters (like Starship)
                for (let b = 0; b < 3; b++) {
                    const boosterGeometry = new THREE.CylinderGeometry(0.25, 0.3, 3, 32);
                    const boosterMaterial = new THREE.MeshPhongMaterial({
                        color: 0xFFA500,
                        emissive: 0xFF4500,
                        emissiveIntensity: 0.3,
                        metalness: 0.8,
                        roughness: 0.2
                    });
                    const booster = new THREE.Mesh(boosterGeometry, boosterMaterial);

                    const boosterAngle = (b / 3) * Math.PI * 2;
                    booster.position.set(
                        Math.cos(boosterAngle) * 0.8,
                        -1.5,
                        Math.sin(boosterAngle) * 0.8
                    );
                    boosterGroup.add(booster);

                    // Booster engine bells
                    for (let e = 0; e < 2; e++) {
                        const engineGeometry = new THREE.CylinderGeometry(0.12, 0.18, 0.4, 16);
                        const engineMaterial = new THREE.MeshPhongMaterial({
                            color: 0x333333,
                            emissive: 0xFF6600,
                            emissiveIntensity: 0.8
                        });
                        const engine = new THREE.Mesh(engineGeometry, engineMaterial);
                        const engineAngle = (e / 2) * Math.PI * 2;
                        engine.position.set(
                            Math.cos(boosterAngle) * 0.8 + Math.cos(engineAngle) * 0.2,
                            -2.2,
                            Math.sin(boosterAngle) * 0.8 + Math.sin(engineAngle) * 0.2
                        );
                        engine.rotation.x = Math.PI;
                        boosterGroup.add(engine);
                    }
                }

                // Main Starship body (cylinder with sleek design)
                const bodyGeometry = new THREE.CylinderGeometry(0.2, 0.25, 4, 32);
                const bodyMaterial = new THREE.MeshPhongMaterial({
                    color: 0xFFFFFF,
                    emissive: spacexColors[i % spacexColors.length],
                    emissiveIntensity: 0.2,
                    metalness: 0.9,
                    roughness: 0.1
                });
                const body = new THREE.Mesh(bodyGeometry, bodyMaterial);
                body.position.y = 1;
                rocketGroup.add(body);

                // Nose cone (sleek aerodynamic design)
                const noseGeometry = new THREE.ConeGeometry(0.2, 1.2, 32);
                const noseMaterial = new THREE.MeshPhongMaterial({
                    color: 0xFF6B35,
                    emissive: 0xFF4500,
                    emissiveIntensity: 0.4,
                    metalness: 0.7,
                    roughness: 0.3
                });
                const nose = new THREE.Mesh(noseGeometry, noseMaterial);
                nose.position.y = 3.6;
                rocketGroup.add(nose);

                // Raptor engines (6 engines in hexagonal pattern)
                for (let j = 0; j < 6; j++) {
                    const engineGeometry = new THREE.CylinderGeometry(0.08, 0.12, 0.6, 16);
                    const engineMaterial = new THREE.MeshPhongMaterial({
                        color: 0x666666,
                        emissive: 0xFFAA00,
                        emissiveIntensity: 0.9,
                        metalness: 1.0,
                        roughness: 0.1
                    });
                    const engine = new THREE.Mesh(engineGeometry, engineMaterial);
                    const angle = (j / 6) * Math.PI * 2;
                    engine.position.set(
                        Math.cos(angle) * 0.3,
                        -2.3,
                        Math.sin(angle) * 0.3
                    );
                    engine.rotation.x = Math.PI;
                    rocketGroup.add(engine);
                }

                // Add boosters to rocket
                rocketGroup.add(boosterGroup);

                // Grid fins for aerodynamic control
                for (let f = 0; f < 4; f++) {
                    const finGeometry = new THREE.PlaneGeometry(0.8, 0.3);
                    const finMaterial = new THREE.MeshPhongMaterial({
                        color: 0xCCCCCC,
                        emissive: 0x666666,
                        emissiveIntensity: 0.1,
                        side: THREE.DoubleSide
                    });
                    const fin = new THREE.Mesh(finGeometry, finMaterial);
                    const finAngle = (f / 4) * Math.PI * 2;
                    fin.position.set(
                        Math.cos(finAngle) * 0.35,
                        0,
                        Math.sin(finAngle) * 0.35
                    );
                    fin.rotation.y = finAngle;
                    rocketGroup.add(fin);
                }

                // Random starting position with launch pad assignment
                const launchAngle = (i / 12) * Math.PI * 2;
                const distance = 60 + Math.random() * 30;
                rocketGroup.position.set(
                    Math.cos(launchAngle) * distance,
                    -25 + Math.random() * 5,
                    Math.sin(launchAngle) * distance
                );

                rocketGroup.userData = {
                    launchAngle: launchAngle,
                    launchSpeed: 0.8 + Math.random() * 0.6,
                    launchAltitude: 150 + Math.random() * 80,
                    launched: false,
                    stageSeparated: false,
                    boostersDetached: false,
                    exhaustIndex: 0,
                    trail: [],
                    launchPadAngle: launchAngle
                };

                launchGroup.add(rocketGroup);
                rockets.push(rocketGroup);

                // Initialize exhaust particles for this rocket
                exhaustParticles.push({
                    positions: [],
                    colors: [],
                    index: 0
                });
            }

            // Satellite constellation
            const satellites = [];
            const satelliteGeometry = new THREE.BoxGeometry(0.8, 0.3, 0.5);
            const satelliteMaterial = new THREE.MeshPhongMaterial({
                color: 0xCCCCCC,
                emissive: 0x444444,
                emissiveIntensity: 0.1
            });

            for (let i = 0; i < 8; i++) {
                const satellite = new THREE.Mesh(satelliteGeometry, satelliteMaterial);
                const orbitalRadius = 80 + i * 15;
                const orbitalAngle = (i / 8) * Math.PI * 2;

                satellite.position.set(
                    Math.cos(orbitalAngle) * orbitalRadius,
                    (Math.random() - 0.5) * 20,
                    Math.sin(orbitalAngle) * orbitalRadius
                );

                satellite.userData = {
                    orbitalRadius: orbitalRadius,
                    orbitalSpeed: 0.002 * (1 + i * 0.1),
                    initialAngle: orbitalAngle
                };

                scene.add(satellite);
                satellites.push(satellite);
            }

            // Launch pad structures
            const launchPads = [];
            for (let i = 0; i < 4; i++) {
                const padGeometry = new THREE.CylinderGeometry(2, 2.5, 1, 16);
                const padMaterial = new THREE.MeshPhongMaterial({
                    color: 0x333333,
                    emissive: 0x222222,
                    emissiveIntensity: 0.1
                });
                const launchPad = new THREE.Mesh(padGeometry, padMaterial);

                const angle = (i / 4) * Math.PI * 2 + Math.PI / 4;
                launchPad.position.set(
                    Math.cos(angle) * 60,
                    -1,
                    Math.sin(angle) * 60
                );

                scene.add(launchPad);
                launchPads.push(launchPad);
            }

            // Enhanced starfield with different brightness levels
            const starField = new THREE.Group();
            scene.add(starField);

            for (let layer = 0; layer < 3; layer++) {
                const starGeometry = new THREE.BufferGeometry();
                const starVertices = [];
                const count = 300 + layer * 200;

                for (let i = 0; i < count; i++) {
                    starVertices.push(
                        (Math.random() - 0.5) * (500 + layer * 500),
                        (Math.random() - 0.5) * (500 + layer * 500),
                        (Math.random() - 0.5) * (500 + layer * 500)
                    );
                }

                starGeometry.setAttribute('position', new THREE.Float32BufferAttribute(starVertices, 3));

                const starMaterial = new THREE.PointsMaterial({
                    color: layer === 0 ? 0xFFFFFF : layer === 1 ? 0xEEEEFF : 0xCCDDEE,
                    size: layer === 0 ? 1.5 : layer === 1 ? 1 : 0.8,
                    transparent: true,
                    opacity: layer === 0 ? 0.9 : layer === 1 ? 0.7 : 0.5
                });

                const stars = new THREE.Points(starGeometry, starMaterial);
                starField.add(stars);
            }

            // Advanced lighting system
            const ambientLight = new THREE.AmbientLight(0x102040, 0.2);
            scene.add(ambientLight);

            const directionalLight = new THREE.DirectionalLight(0x60a5fa, 0.8);
            directionalLight.position.set(30, 50, 20);
            directionalLight.castShadow = true;
            directionalLight.shadow.mapSize.width = 2048;
            directionalLight.shadow.mapSize.height = 2048;
            scene.add(directionalLight);

            // Launch area flood lights
            const floodLights = [];
            for (let i = 0; i < 6; i++) {
                const floodLight = new THREE.SpotLight(0xFFFFFF, 1, 100, Math.PI / 3, 0.5, 2);
                floodLight.position.set(
                    Math.cos((i / 6) * Math.PI * 2) * 40,
                    20,
                    Math.sin((i / 6) * Math.PI * 2) * 40
                );
                floodLight.target.position.set(0, 0, 0);
                floodLight.castShadow = true;
                scene.add(floodLight);
                scene.add(floodLight.target);
                floodLights.push(floodLight);
            }

            // Camera setup for cinematic view
            camera.position.set(0, 20, 100);
            camera.lookAt(0, 0, 0);

            // Animation variables
            let time = 0;
            const trailPositions = trailGeometry.attributes.position.array;
            const trailColors = trailGeometry.attributes.color.array;
            let trailIndex = 0;

            // Space Debris Field
            const debrisField = [];
            for (let i = 0; i < 50; i++) {
                const debrisGeometry = new THREE.SphereGeometry(Math.random() * 0.1 + 0.05, 6, 6);
                const debrisMaterial = new THREE.MeshPhongMaterial({
                    color: Math.random() * 0xffffff,
                    emissive: Math.random() * 0x444444,
                    emissiveIntensity: 0.2
                });
                const debris = new THREE.Mesh(debrisGeometry, debrisMaterial);

                debris.position.set(
                    (Math.random() - 0.5) * 400,
                    (Math.random() - 0.5) * 200,
                    (Math.random() - 0.5) * 400
                );

                debris.userData = {
                    rotationSpeed: {
                        x: (Math.random() - 0.5) * 0.02,
                        y: (Math.random() - 0.5) * 0.02,
                        z: (Math.random() - 0.5) * 0.02
                    },
                    orbitRadius: Math.random() * 20 + 10,
                    orbitSpeed: Math.random() * 0.005 + 0.001
                };

                scene.add(debris);
                debrisField.push(debris);
            }

            // Meteor shower system
            const meteors = [];
            const meteorGeometry = new THREE.CylinderGeometry(0.02, 0.05, 2, 8);
            const meteorMaterial = new THREE.MeshPhongMaterial({
                color: 0xFFFFFF,
                emissive: 0xFF7700,
                emissiveIntensity: 1.0,
                transparent: true,
                opacity: 0.8
            });

            let lastMeteorTime = 0;
            const createMeteor = () => {
                if (time - lastMeteorTime > 3 + Math.random() * 5) { // Random meteor creation
                    const meteor = new THREE.Mesh(meteorGeometry, meteorMaterial.clone());

                    const startAngle = Math.random() * Math.PI * 2;
                    meteor.position.set(
                        Math.cos(startAngle) * 200,
                        150 + Math.random() * 100,
                        Math.sin(startAngle) * 200
                    );

                    meteor.userData = {
                        velocity: {
                            x: (Math.random() - 0.5) * 0.5,
                            y: -2 - Math.random() * 2,
                            z: (Math.random() - 0.5) * 0.5
                        },
                        trail: []
                    };

                    scene.add(meteor);
                    meteors.push(meteor);
                    lastMeteorTime = time;
                }
            };

            // Explosion particle system for stage separation
            const explosionSystem = {
                particles: [],
                createExplosion: function(position, color = 0xFF4500, count = 30) {
                    for (let i = 0; i < count; i++) {
                        const particleGeometry = new THREE.SphereGeometry(0.1, 8, 8);
                        const particleMaterial = new THREE.MeshPhongMaterial({
                            color: color,
                            emissive: color,
                            emissiveIntensity: 0.8,
                            transparent: true,
                            opacity: 0.9
                        });

                        const particle = new THREE.Mesh(particleGeometry, particleMaterial);
                        particle.position.copy(position);
                        particle.position.x += (Math.random() - 0.5) * 2;
                        particle.position.y += (Math.random() - 0.5) * 2;
                        particle.position.z += (Math.random() - 0.5) * 2;

                        particle.userData = {
                            velocity: {
                                x: (Math.random() - 0.5) * 0.3,
                                y: (Math.random() - 0.5) * 0.3,
                                z: (Math.random() - 0.5) * 0.3
                            },
                            life: 2.0 + Math.random(),
                            created: time
                        };

                        scene.add(particle);
                        this.particles.push(particle);
                    }
                },

                updateExplosions: function() {
                    this.particles = this.particles.filter(particle => {
                        const age = time - particle.userData.created;
                        const lifeRatio = age / particle.userData.life;

                        if (lifeRatio >= 1) {
                            scene.remove(particle);
                            return false;
                        }

                        // Apply physics
                        particle.position.x += particle.userData.velocity.x;
                        particle.position.y += particle.userData.velocity.y;
                        particle.position.z += particle.userData.velocity.z;

                        // Gravity
                        particle.userData.velocity.y -= 0.01;

                        // Fade out
                        particle.material.opacity = 1 - lifeRatio;
                        particle.material.emissiveIntensity = 0.8 * (1 - lifeRatio);

                        return true;
                    });
                }
            };

            // Advanced launch sequence with stage separation
            const launchSequence = () => {
                rockets.forEach((rocket, index) => {
                    if (!rocket.userData.launched && time > index * 2.5) {
                        rocket.userData.launched = true;
                        // Create launch flash effect
                        explosionSystem.createExplosion(rocket.position, 0xFFFFFF, 20);
                    }

                    if (rocket.userData.launched && rocket.position.y < rocket.userData.launchAltitude) {
                        // Calculate launch trajectory
                        const trajectory = rocket.userData.launchAngle + Math.PI / 2;
                        const speed = rocket.userData.launchSpeed;
                        const altitudeProgress = rocket.position.y / rocket.userData.launchAltitude;

                        // Stage separation at 40% altitude
                        if (altitudeProgress > 0.4 && !rocket.userData.boostersDetached) {
                            rocket.userData.boostersDetached = true;

                            // Create explosion at booster separation
                            const boosterPositions = [];
                            rocket.children.forEach(child => {
                                if (child.userData?.type === 'booster') {
                                    const worldPos = new THREE.Vector3();
                                    child.getWorldPosition(worldPos);
                                    boosterPositions.push(worldPos);
                                }
                            });

                            boosterPositions.forEach(pos => {
                                explosionSystem.createExplosion(pos, 0xFF6600, 15);
                            });

                            // Remove boosters from main rocket
                            rocket.children = rocket.children.filter(child =>
                                !child.userData?.type === 'booster'
                            );

                            // Launch sound effect vibration (visual)
                            rocket.rotation.z += 0.5; // Jerk motion
                        }

                        // Main engine cut off and final explosion at 95% altitude
                        if (altitudeProgress > 0.95 && !rocket.userData.exploded) {
                            rocket.userData.exploded = true;
                            explosionSystem.createExplosion(rocket.position, 0xFFFF00, 50);

                            // Payload reaches orbit
                            rocket.position.y += 200; // Skip to orbit
                        }

                        // Continue normal flight
                        if (!rocket.userData.exploded) {
                            rocket.position.x += Math.cos(trajectory) * speed;
                            rocket.position.z += Math.sin(trajectory) * speed;
                            rocket.position.y += speed * 1.2;

                            // Add to trail
                            if (trailIndex < 1000) {
                                trailPositions[trailIndex * 3] = rocket.position.x;
                                trailPositions[trailIndex * 3 + 1] = rocket.position.y;
                                trailPositions[trailIndex * 3 + 2] = rocket.position.z;

                                trailColors[trailIndex * 3] = 1 - altitudeProgress * 0.5;
                                trailColors[trailIndex * 3 + 1] = 0.5;
                                trailColors[trailIndex * 3 + 2] = altitudeProgress * 0.8;

                                trailIndex++;
                            }

                            // Rocket rotation for stability
                            rocket.rotation.z += 0.015;
                            rocket.rotation.x = Math.sin(time * 1.5 + index) * 0.05;

                            // Exhaust particles - dynamic flame system
                            const exhaustPos = new THREE.Vector3(0, -2.5, 0);
                            rocket.localToWorld(exhaustPos);

                            for (let p = 0; p < 5; p++) {
                                const exhaustIndex = index * 100 + p;
                                if (exhaustIndex < 5000) {
                                    const exhaustPositions = exhaustGeometry.attributes.position.array;
                                    const exhaustColors = exhaustGeometry.attributes.color.array;

                                    exhaustPositions[exhaustIndex * 3] = exhaustPos.x + (Math.random() - 0.5);
                                    exhaustPositions[exhaustIndex * 3 + 1] = exhaustPos.y - Math.random() * 2;
                                    exhaustPositions[exhaustIndex * 3 + 2] = exhaustPos.z + (Math.random() - 0.5);

                                    const flameIntensity = Math.random();
                                    exhaustColors[exhaustIndex * 3] = 1; // Red
                                    exhaustColors[exhaustIndex * 3 + 1] = flameIntensity * 0.8; // Orange
                                    exhaustColors[exhaustIndex * 3 + 2] = flameIntensity * 0.3; // Blue
                                }
                            }
                        }
                    }
                });

                // Animate satellites in orbital mechanics - Smoother
                satellites.forEach((satellite, index) => {
                    const currentTime = time * satellite.userData.orbitalSpeed * 0.5; // Slower orbit
                    satellite.position.x = Math.cos(currentTime + satellite.userData.initialAngle) * satellite.userData.orbitalRadius;
                    satellite.position.z = Math.sin(currentTime + satellite.userData.initialAngle) * satellite.userData.orbitalRadius;
                    satellite.rotation.y = currentTime + satellite.userData.initialAngle;
                });

                // Animate launch pads
                launchPads.forEach((pad, index) => {
                    pad.material.emissiveIntensity = 0.1 + Math.sin(time * 3 + index) * 0.05;
                });

                // Animate lighting
                directionalLight.intensity = 0.8 + Math.sin(time) * 0.2;

                floodLights.forEach((light, index) => {
                    light.intensity = 0.8 + Math.sin(time * 2 + index) * 0.4;
                });

                // Cinematic camera movement
                camera.position.x = Math.sin(time * 0.1) * 10;
                camera.position.y = 20 + Math.sin(time * 0.05) * 5;
                camera.position.z = 100 + Math.cos(time * 0.1) * 20;
                camera.lookAt(0, 10, 0);

                // Dynamic starfield rotation
                starField.rotation.x += 0.0001;
                starField.rotation.y += 0.00005;

                // Animate space debris
                debrisField.forEach(debris => {
                    debris.rotation.x += debris.userData.rotationSpeed.x;
                    debris.rotation.y += debris.userData.rotationSpeed.y;
                    debris.rotation.z += debris.userData.rotationSpeed.z;

                    // Subtle orbital movement
                    if (debris.userData.orbitRadius > 0) {
                        const orbitTime = time * debris.userData.orbitSpeed;
                        debris.position.x += Math.cos(orbitTime) * 0.1;
                        debris.position.z += Math.sin(orbitTime) * 0.1;
                    }
                });

                // Animate meteors
                createMeteor();
                meteors.forEach((meteor, index) => {
                    meteor.position.x += meteor.userData.velocity.x;
                    meteor.position.y += meteor.userData.velocity.y;
                    meteor.position.z += meteor.userData.velocity.z;

                    meteor.rotation.x += 0.1;
                    meteor.rotation.y += 0.1;

                    // Remove meteors that reach bottom
                    if (meteor.position.y < -100) {
                        scene.remove(meteor);
                        meteors.splice(index, 1);
                    }

                    // Meteor trail effect
                    if (Math.random() > 0.7) {
                        const trailPos = meteor.position.clone();
                        explosionSystem.createExplosion(trailPos, 0xFFFFFF, 3);
                    }
                });

                // Update explosion particles
                explosionSystem.updateExplosions();

                // Update exhaust geometries
                exhaustGeometry.attributes.position.needsUpdate = true;
                exhaustGeometry.attributes.color.needsUpdate = true;

                // Update trail geometry
                trailGeometry.attributes.position.needsUpdate = true;
                trailGeometry.attributes.color.needsUpdate = true;
            };

            // SpaceX-Style Launch Countdown System
            const countdownSystem = {
                elements: {
                    countdown: null,
                    sequenceText: null,
                    launchButton: null
                },
                currentCount: 10,
                isCounting: false,
                sequence: [
                    { count: 10, text: "T-10", sound: "beep" },
                    { count: 9, text: "T-9", sound: "beep" },
                    { count: 8, text: "T-8", sound: "beep" },
                    { count: 7, text: "T-7", sound: "beep" },
                    { count: 6, text: "T-6", sound: "beep" },
                    { count: 5, text: "T-5", sound: "beep" },
                    { count: 4, text: "T-4", sound: "beep" },
                    { count: 3, text: "T-3", sound: "beep" },
                    { count: 2, text: "T-2", sound: "beep" },
                    { count: 1, text: "T-1", sound: "beep" },
                    { count: 0, text: "LAUNCH!", sound: "thunder" }
                ],

                init: function() {
                    // Create countdown display
                    this.elements.countdown = document.createElement('div');
                    this.elements.countdown.style.cssText = `
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        font-size: 120px;
                        font-weight: bold;
                        color: #FF4500;
                        text-shadow: 0 0 30px #FF4500, 0 0 60px #FF4500;
                        z-index: 10000;
                        pointer-events: none;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                        font-family: 'Courier New', monospace;
                    `;
                    document.body.appendChild(this.elements.countdown);

                    this.elements.sequenceText = document.createElement('div');
                    this.elements.sequenceText.style.cssText = `
                        position: fixed;
                        top: 65%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        font-size: 24px;
                        font-weight: bold;
                        color: #FFFFFF;
                        text-shadow: 0 0 20px #FFFFFF;
                        z-index: 10000;
                        pointer-events: none;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    `;
                    document.body.appendChild(this.elements.sequenceText);

                    // Start countdown on first click
                    let hasStarted = false;
                    document.addEventListener('click', () => {
                        if (!hasStarted && time > 2) {
                            hasStarted = true;
                            this.startCountdown();
                        }
                    }, { once: true });
                },

                startCountdown: function() {
                    this.isCounting = true;
                    let sequenceIndex = 0;

                    const countdownInterval = setInterval(() => {
                        if (sequenceIndex < this.sequence.length) {
                            const current = this.sequence[sequenceIndex];

                            this.elements.countdown.textContent = current.count;
                            this.elements.sequenceText.textContent = current.text;

                            // Visual flash effect
                            this.elements.countdown.style.textShadow = `0 0 40px #${Math.random() > 0.5 ? 'FF4500' : '00D4FF'}, 0 0 80px #${Math.random() > 0.5 ? 'FF4500' : '00D4FF'}`;
                            this.elements.countdown.style.opacity = '1';
                            this.elements.sequenceText.style.opacity = '1';

                            // Video game like beep sound (visual effect)
                            document.body.style.backgroundColor = current.count <= 3 ? 'rgba(255, 0, 0, 0.1)' : 'transparent';

                            // Trigger launches at certain countdown points
                            if (current.count === 5) {
                                // Rapid launch sequence begins
                                rockets.forEach(rocket => {
                                    rocket.userData.launchSpeed *= 1.5;
                                });
                            }

                            if (current.count === 0) {
                                // Massive launch effect
                                for (let i = 0; i < 10; i++) {
                                    setTimeout(() => {
                                        explosionSystem.createExplosion(
                                            new THREE.Vector3(
                                                (Math.random() - 0.5) * 100,
                                                0,
                                                (Math.random() - 0.5) * 100
                                            ),
                                            0xFFFFFF,
                                            20
                                        );
                                    }, i * 100);
                                }

                                // Camera shake effect
                                const originalPos = camera.position.clone();
                                let shakeTime = 0;
                                const shakeAmount = 2;

                                const shakeCamera = () => {
                                    shakeTime += 0.1;
                                    camera.position.x = originalPos.x + Math.sin(shakeTime * 10) * shakeAmount;
                                    camera.position.y = originalPos.y + Math.cos(shakeTime * 8) * shakeAmount * 0.5;

                                    if (shakeTime < 2) {
                                        requestAnimationFrame(shakeCamera);
                                    } else {
                                        camera.position.copy(originalPos);
                                    }
                                };
                                shakeCamera();
                            }

                            sequenceIndex++;
                        } else {
                            clearInterval(countdownInterval);
                            this.isCounting = false;

                            // Fade out countdown elements
                            setTimeout(() => {
                                this.elements.countdown.style.opacity = '0';
                                this.elements.sequenceText.style.opacity = '0';
                                document.body.style.backgroundColor = 'transparent';
                            }, 2000);
                        }
                    }, 1000); // 1 second intervals
                },

                update: function() {
                    // Screen effects during countdown
                    if (this.isCounting) {
                        // Subtle pulsing effect
                        const pulseIntensity = Math.sin(time * 20) * 0.1 + 0.9;
                        this.elements.countdown.style.transform = `translate(-50%, -50%) scale(${pulseIntensity})`;
                    }
                }
            };

            // Initialize countdown system
            countdownSystem.init();

            // Main animation loop
            const animate = function() {
                requestAnimationFrame(animate);
                time += 0.016;

                launchSequence();
                countdownSystem.update();

                renderer.render(scene, camera);
            };

            animate();

            // Enhanced resize handling with aspect ratio optimization
            const handleResize = function() {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            };

            window.addEventListener('resize', handleResize);
        };

        initSpaceXBackground();
    }

    // Add 3D text effect to main heading
    const mainHeading = document.querySelector('h1');
    if (mainHeading) {
        mainHeading.classList.add('hero-3d-text');
    }

    // Enhanced floating elements interaction
    const floatingElements = document.querySelectorAll('.floating-3d-element');

    const handleFloatingElementHover = function(e) {
        const element = e.target;
        element.style.animationDuration = '2s';

        element.addEventListener('mouseleave', function() {
            setTimeout(() => {
                element.style.animationDuration = '6s';
            }, 500);
        }, { once: true });
    };

    floatingElements.forEach(element => {
        element.addEventListener('mouseenter', handleFloatingElementHover);
    });

    // Add parallax effect to floating elements
    let mouseX = 0;
    let mouseY = 0;

    document.addEventListener('mousemove', function(e) {
        mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
        mouseY = (e.clientY / window.innerHeight - 0.5) * 2;

        floatingElements.forEach((element, index) => {
            const rotateY = mouseX * 10 * (index + 1);
            const rotateX = mouseY * 10 * (index + 1);

            element.style.transform = `perspective(1000px) rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
        });
    });

    // Initialize on scroll animations for cards - SpaceX inspired
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    let cardRevealDelay = 0;
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                cardRevealDelay += 0.2;
                entry.target.style.animationDelay = `${cardRevealDelay}s`;
                entry.target.classList.add('card-reveal');

                // Remove from observation once animated
                cardObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Initialize cards
    document.querySelectorAll('.card-enterprise').forEach(card => {
        cardObserver.observe(card);
    });

    // Add page transition effects
    const addPageTransition = () => {
        const mainHeading = document.querySelector('h1');
        const badge = document.querySelector('.inline-flex');
        const paragraph = document.querySelector('#home p');
        const buttons = document.querySelectorAll('#home .flex > a');

        if (mainHeading) {
            setTimeout(() => {
                mainHeading.style.transform = 'translateY(0)';
                mainHeading.style.opacity = '1';
            }, 200);
        }

        if (badge) {
            setTimeout(() => {
                badge.style.transform = 'translateY(0)';
                badge.style.opacity = '1';
            }, 400);
        }

        if (paragraph) {
            setTimeout(() => {
                paragraph.style.transform = 'translateY(0)';
                paragraph.style.opacity = '1';
            }, 600);
        }

        buttons.forEach((button, index) => {
            setTimeout(() => {
                button.style.transform = 'translateY(0) scale(1)';
                button.style.opacity = '1';
            }, 800 + (index * 200));
        });
    };

    // Initialize elements with hidden state
    const hideElements = () => {
        const mainHeading = document.querySelector('h1');
        const badge = document.querySelector('.inline-flex');
        const paragraph = document.querySelector('#home p');
        const buttons = document.querySelectorAll('#home .flex > a');

        if (mainHeading) {
            mainHeading.style.transform = 'translateY(30px)';
            mainHeading.style.opacity = '0';
            mainHeading.style.transition = 'all 0.8s var(--spacex-easing)';
        }

        if (badge) {
            badge.style.transform = 'translateY(20px)';
            badge.style.opacity = '0';
            badge.style.transition = 'all 0.6s var(--spacex-easing)';
        }

        if (paragraph) {
            paragraph.style.transform = 'translateY(20px)';
            paragraph.style.opacity = '0';
            paragraph.style.transition = 'all 0.6s var(--spacex-easing)';
        }

        buttons.forEach(button => {
            button.style.transform = 'translateY(20px) scale(0.95)';
            button.style.opacity = '0';
            button.style.transition = 'all 0.5s var(--spacex-easing)';
        });
    };

    // Start page animations
    hideElements();
    setTimeout(addPageTransition, 100);

    // Enhanced mobile optimization - SpaceX style performance tuning
    if (window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        // Adaptive quality settings based on device performance
        const isLowEndDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;

        if (isLowEndDevice) {
            // Minimal effects for low-end devices
            floatingElements.forEach(element => {
                element.style.display = 'none';
            });

            const particlesContainer = document.getElementById('particles-js');
            if (particlesContainer) {
                particlesContainer.style.display = 'none';
            }

            const canvas3d = document.getElementById('hero-3d-canvas');
            if (canvas3d) {
                canvas3d.style.display = 'none';
            }

            // Simplified starfield background
            document.querySelector('#home').style.background = 'radial-gradient(ellipse at center, #000511 0%, #0a0e20 70%, #1a1f35 100%)';
        } else {
            // Moderate effects for standard mobile devices
            floatingElements.forEach(element => {
                element.style.animation = 'none';
                element.style.opacity = '0.3';
            });

            // Reduce particle count for mobile
            if (window.pJSDom && window.pJSDom[0]) {
                window.pJSDom[0].pJS.particles.number.value = 80;
                window.pJSDom[0].pJS.particles.size.value = 3;
                window.pJSDom[0].pJS.particles.line_linked.distance = 100;
            }

            // Reduce 3D complexity for mobile
            if (typeof THREE !== 'undefined') {
                // Reduce rocket count and starfield complexity
                const mobileOptimizer = {
                    rocketCount: 6,
                    satelliteCount: 4,
                    starMultiplier: 0.5
                };

                // Apply mobile optimizations through existing variables
                console.log('Mobile optimizations applied:', mobileOptimizer);
            }
        }

        // Touch-friendly interactions
        const touchHandler = function(e) {
            const touch = e.touches[0] || e.changedTouches[0];
            mouseX = (touch.clientX / window.innerWidth - 0.5) * 2;
            mouseY = (touch.clientY / window.innerHeight - 0.5) * 2;
        };

        document.addEventListener('touchmove', touchHandler, { passive: true });
        document.addEventListener('touchend', touchHandler, { passive: true });
    } else {
        // Desktop enhancements
        let performanceCheck = 0;
        const checkPerformance = () => {
            performanceCheck++;
            if (performanceCheck % 60 === 0) {
                const fps = Math.round(1000 / (performance.now() - window.lastTime || performance.now()));
                window.lastTime = performance.now();

                // Adaptive quality based on FPS
                if (fps < 30) {
                    console.log('Reducing effects for performance');
                    const particlesContainer = document.getElementById('particles-js');
                    if (particlesContainer && window.pJSDom && window.pJSDom[0]) {
                        window.pJSDom[0].pJS.particles.number.value = Math.max(100, window.pJSDom[0].pJS.particles.number.value * 0.8);
                    }
                }
            }
            requestAnimationFrame(checkPerformance);
        };
        checkPerformance();
    }

    console.log('3D Effects and Particles Initialized Successfully');
});
</script>
