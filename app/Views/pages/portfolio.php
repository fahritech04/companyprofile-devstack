<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Portfolio Hero Section -->
<section class="min-h-[60vh] flex items-center pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">
    <div class="grid-bg"></div>
    <div class="dot-grid-dark"></div>
    <div class="glow-orb glow-orb-1"></div>
    <div class="glow-orb glow-orb-2"></div>
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
                <?= lang('App.portfolio_showcase') ?>
            </div>
            <h1 class="text-gradient-blue leading-tight"><?= lang('App.portfolio_title') ?></h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.portfolio_description') ?>
            </p>

            <!-- CTA -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <a href="#portfolio-grid" class="btn-glow px-8 py-4">
                    <span><?= lang('App.view_portfolio') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="<?= base_url('contact') ?>" class="btn-glass px-8 py-4">
                    <span><?= lang('App.discuss_project_btn') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
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
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.our_portfolio') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.portfolio_grid_desc') ?></p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-glow text-sm px-6 py-2.5"><?= lang('App.all_projects') ?></button>
            <button class="btn-glass text-sm px-6 py-2.5"><?= lang('App.web_design') ?></button>
            <button class="btn-glass text-sm px-6 py-2.5"><?= lang('App.mobile_app') ?></button>
            <button class="btn-glass text-sm px-6 py-2.5"><?= lang('App.branding') ?></button>
        </div>

        <!-- Portfolio Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $portfolioItems = [
                ['img' => 'eCommerce_website.jpeg', 'alt' => 'E-Commerce Website', 'title' => 'ecommerce_website', 'cat' => 'website_dev', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 0a9 9 0 01-9-9m9 9a9 9 0 00-9 9'],
                ['img' => 'mobile_banking_app.jpeg', 'alt' => 'Mobile Banking App', 'title' => 'mobile_banking', 'cat' => 'mobile_application', 'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'],
                ['img' => 'brand_identity_design.jpeg', 'alt' => 'Brand Identity Design', 'title' => 'brand_identity', 'cat' => 'branding', 'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z'],
                ['img' => 'educational_platform.jpeg', 'alt' => 'Educational Platform', 'title' => 'educational_platform', 'cat' => 'web_application', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                ['img' => 'restaurant_app.jpeg', 'alt' => 'Restaurant App', 'title' => 'restaurant_app', 'cat' => 'mobile_application', 'icon' => 'M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4 0V2a2 2 0 012-2h4a2 2 0 012 2v2m-8 0h8'],
                ['img' => 'corporate_branding.jpeg', 'alt' => 'Corporate Branding', 'title' => 'corporate_branding', 'cat' => 'branding', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ];
            $delay = 0;
            foreach ($portfolioItems as $item):
                ?>
                <div class="group relative overflow-hidden rounded-2xl card-dark" data-aos="fade-up"
                    data-aos-delay="<?= $delay ?>">
                    <div class="h-64 relative overflow-hidden">
                        <img src="<?= base_url('images/' . $item['img']) ?>" alt="<?= $item['alt'] ?>"
                            class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                            loading="lazy">
                        <div class="absolute inset-0 bg-navy-900/60"></div>
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-navy-950/95 via-navy-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-400">
                        <div
                            class="absolute bottom-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="icon-box-dark mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="<?= $item['icon'] ?>"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-1"><?= lang('App.' . $item['title']) ?></h3>
                            <p class="text-sm text-blue-300 mb-3"><?= lang('App.' . $item['cat']) ?></p>
                            <a href="#"
                                class="inline-flex items-center text-blue-400 hover:text-blue-300 text-sm font-medium">
                                <span><?= lang('App.view_project') ?></span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php $delay += 100; endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #0a1628);">
    <div class="glow-orb"
        style="width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.10),transparent 70%);top:50%;left:50%;transform:translate(-50%,-50%);filter:blur(100px);">
    </div>
    <div class="absolute inset-0 grid-bg"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.ready_to_start') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto mb-10"><?= lang('App.discuss_vision') ?></p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
                <a href="<?= base_url('contact') ?>" class="btn-glow px-10 py-4">
                    <span><?= lang('App.start_consultation') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </a>
                <a href="#portfolio-grid" class="btn-glass px-10 py-4">
                    <span><?= lang('App.view_more_portfolio') ?></span>
                </a>
            </div>

            <!-- Contact Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="card-dark p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1"><?= lang('App.phone') ?></h3>
                    <p class="text-gray-400 text-sm">+62 812 1424 0287</p>
                </div>
                <div class="card-dark p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1"><?= lang('App.email') ?></h3>
                    <p class="text-gray-400 text-sm">info@dev-stack.id</p>
                </div>
                <div class="card-dark p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-1"><?= lang('App.location') ?></h3>
                    <p class="text-gray-400 text-sm">Bandung, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>