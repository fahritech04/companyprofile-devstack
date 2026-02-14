<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Portfolio Hero Section -->
<section class="min-h-[60vh] flex items-center pt-28 pb-20 relative overflow-hidden hero-section"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">
    <!-- Netdata-style Hero Background Grid -->
    <div class="landing-hero-bg-grid"></div>

    <!-- Netdata-style Floating Squares -->
    <div class="landing-hero-bg-squares">
        <div class="landing-hero-bg-square" style="top: 10%; left: 5%; animation-delay: 0s;"></div>
        <div class="landing-hero-bg-square" style="top: 20%; left: 15%; animation-delay: 0.5s;"></div>
        <div class="landing-hero-bg-square" style="top: 30%; left: 25%; animation-delay: 1s;"></div>
        <div class="landing-hero-bg-square" style="top: 40%; left: 35%; animation-delay: 1.5s;"></div>
        <div class="landing-hero-bg-square" style="top: 50%; left: 45%; animation-delay: 2s;"></div>
        <div class="landing-hero-bg-square" style="top: 60%; left: 55%; animation-delay: 2.5s;"></div>
        <div class="landing-hero-bg-square" style="top: 70%; left: 65%; animation-delay: 3s;"></div>
        <div class="landing-hero-bg-square" style="top: 80%; left: 75%; animation-delay: 3.5s;"></div>
        <div class="landing-hero-bg-square" style="top: 15%; left: 85%; animation-delay: 0.3s;"></div>
        <div class="landing-hero-bg-square" style="top: 25%; left: 95%; animation-delay: 0.8s;"></div>
    </div>

    <div class="grid-bg"></div>
    <div class="dot-grid-dark"></div>
    <div class="hex-grid"></div>
    <div class="glow-orb glow-orb-1"></div>
    <div class="glow-orb glow-orb-2"></div>
    <div class="glow-orb glow-orb-3"></div>

    <!-- Floating Dots -->
    <div class="floating-dot" style="top: 15%; left: 10%; animation-delay: 0s;"></div>
    <div class="floating-dot" style="top: 25%; left: 30%; animation-delay: 0.5s;"></div>
    <div class="floating-dot" style="top: 35%; left: 50%; animation-delay: 1s;"></div>
    <div class="floating-dot" style="top: 45%; left: 70%; animation-delay: 1.5s;"></div>
    <div class="floating-dot" style="top: 55%; left: 90%; animation-delay: 2s;"></div>
    <div class="floating-dot" style="top: 65%; left: 20%; animation-delay: 2.5s;"></div>
    <div class="floating-dot" style="top: 75%; left: 40%; animation-delay: 3s;"></div>
    <div class="floating-dot" style="top: 85%; left: 60%; animation-delay: 3.5s;"></div>

    <!-- Particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>

    <!-- Canvas Particle Network -->
    <canvas id="particle-network-portfolio" class="absolute inset-0 w-full h-full opacity-30"></canvas>

    <!-- Data Stream Lines -->
    <div class="data-stream" style="left: 10%; animation-delay: 0s;"></div>
    <div class="data-stream" style="left: 30%; animation-delay: 1s;"></div>
    <div class="data-stream" style="left: 50%; animation-delay: 2s;"></div>
    <div class="data-stream" style="left: 70%; animation-delay: 0.5s;"></div>
    <div class="data-stream" style="left: 90%; animation-delay: 1.5s;"></div>

    <!-- Scan Line Effect -->
    <div class="scan-line" style="animation-delay: 0s;"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-8 max-w-4xl mx-auto" data-aos="fade-up">
            <div class="badge-glow inline-flex items-center text-xs animate-glow">
                <span class="badge-pulse"></span>
                <?= lang('App.portfolio_showcase') ?>
            </div>
            <h1 class="text-gradient-blue leading-tight hero-text-reveal">
                <?= lang('App.portfolio_title') ?>
            </h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.portfolio_description') ?>
            </p>

            <!-- CTA -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <a href="#portfolio-grid" class="btn-glow px-8 py-4 magnetic-btn">
                    <span>
                        <?= lang('App.view_portfolio') ?>
                    </span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="<?= base_url('contact') ?>" class="btn-glass px-8 py-4 magnetic-btn">
                    <span>
                        <?= lang('App.discuss_project_btn') ?>
                    </span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </</svg>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>

<div class="divider-glow"></div>

<!-- Portfolio Grid -->
<section id="portfolio-grid" class="py-24 relative" style="background: #040b18;">
    <div class="absolute inset-0 dot-grid-dark opacity-20"></div>
    <div class="absolute inset-0 hex-grid opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6 neon-text">
                <?= lang('App.our_portfolio') ?>
            </h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto">
                <?= lang('App.portfolio_grid_desc') ?>
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-glow text-sm px-6 py-2.5 portfolio-filter active" data-filter="all">
                <?= lang('App.all_projects') ?>
            </button>
            <?php if (!empty($portfolios)):
                $categories = array_unique(array_column($portfolios, 'category'));
                foreach ($categories as $cat): ?>
                    <button class="btn-glass text-sm px-6 py-2.5 portfolio-filter" data-filter="<?= esc($cat) ?>">
                        <?= esc(ucwords(str_replace('_', ' ', $cat))) ?>
                    </button>
                <?php endforeach; endif; ?>
        </div>

        <!-- Portfolio Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="portfolio-grid-items">
            <?php if (!empty($portfolios)): ?>
                <?php $delay = 0;
                foreach ($portfolios as $item): ?>
                    <div class="group relative overflow-hidden rounded-2xl card-dark portfolio-item card-glow-hover grid-animate-item"
                        data-category="<?= esc($item['category'] ?? '') ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="h-64 relative overflow-hidden">
                            <?php if (!empty($item['image'])): ?>
                                <img src="<?= base_url('uploads/portfolio/' . $item['image']) ?>" alt="<?= esc($item['title']) ?>"
                                    class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                    loading="lazy">
                            <?php else: ?>
                                <div
                                    class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-900/40 to-navy-900/60 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-blue-400/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2-2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-navy-900/60"></div>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-navy-950/95 via-navy-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-400">
                            <div
                                class="absolute bottom-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-lg font-bold mb-1">
                                    <?= esc($item['title']) ?>
                                </h3>
                                <p class="text-sm text-blue-300 mb-2">
                                    <?= esc(ucwords(str_replace('_', ' ', $item['category'] ?? ''))) ?>
                                </p>
                                <?php if (!empty($item['client_name'])): ?>
                                    <p class="text-xs text-gray-400 mb-3">Client:
                                        <?= esc($item['client_name']) ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($item['demo_url'])): ?>
                                    <a href="<?= esc($item['demo_url']) ?>" target="_blank"
                                        class="inline-flex items-center text-blue-400 hover:text-blue-300 text-sm font-medium">
                                        <span>
                                            <?= lang('App.view_project') ?>
                                        </span>
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002 2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; endforeach; ?>
            <?php else: ?>
                <!-- Fallback: no portfolios yet -->
                <div class="col-span-full text-center py-16">
                    <div class="icon-box-dark mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012-2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-semibold mb-2">Coming Soon</h3>
                    <p class="text-gray-400">Our portfolio is being updated. Check back soon!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #0a1628);">
    <div class="glow-orb"
        style="width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.10),transparent 70%);top:50%;left:50%;transform:translate(-50%,-50%);filter:blur(100px);">
    </div>
    <div class="absolute inset-0 grid-bg"></div>
    <div class="absolute inset-0 hex-grid opacity-30"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6 neon-text">
                <?= lang('App.ready_to_start') ?>
            </h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto mb-10">
                <?= lang('App.discuss_vision') ?>
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
                <a href="<?= base_url('contact') ?>" class="btn-glow px-10 py-4 magnetic-btn">
                    <span>
                        <?= lang('App.start_consultation') ?>
                    </span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </a>
                <a href="#portfolio-grid" class="btn-glass px-10 py-4 magnetic-btn">
                    <span>
                        <?= lang('App.view_more_portfolio') ?>
                    </span>
                </a>
            </div>

            <!-- Contact Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="card-dark p-6 text-center card-glow-hover grid-animate-item" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1">
                        <?= lang('App.phone') ?>
                    </h3>
                    <p class="text-gray-400 text-sm">+62 812 1424 0287</p>
                </div>
                <div class="card-dark p-6 text-center card-glow-hover grid-animate-item" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1">
                        <?= lang('App.email') ?>
                    </h3>
                    <p class="text-gray-400 text-sm">info@dev-stack.id</p>
                </div>
                <div class="card-dark p-6 text-center card-glow-hover grid-animate-item" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1">
                        <?= lang('App.location') ?>
                    </h3>
                    <p class="text-gray-400 text-sm">Bandung, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
