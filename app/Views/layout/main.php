<!DOCTYPE html>
<html lang="<?= session()->get('locale') ?? 'en' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('App.hero_title') ?></title>

    <!-- SEO & Performance Optimization -->
    <meta name="description"
        content="Leading enterprise solutions for digital transformation, web development, mobile apps, and strategic technology implementation.">
    <meta name="keywords"
        content="enterprise solutions, web development, mobile apps, digital transformation, technology consulting">
    <meta name="author" content="DevStack">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="canonical" href="<?= current_url() ?>">

    <!-- Performance Preloads -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

    <!-- Enterprise Fonts with preload -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;">

    <!-- Modern UI Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/netdata-animations.css') ?>">

    <!-- Performance & PWA -->
    <link rel="manifest" href="<?= base_url('manifest.json') ?>">
    <meta name="theme-color" content="#060e1f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="DevStack">

    <!-- Mobile Performance Optimizations -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('images/devstack_icon.svg') ?>" type="image/svg+xml" sizes="any">
    <link rel="mask-icon" href="<?= base_url('images/devstack_icon.svg') ?>" color="#3b82f6">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= lang('App.hero_title') ?>">
    <meta property="og:description" content="Leading enterprise solutions for digital transformation">
    <meta property="og:image" content="<?= base_url('images/devstack_icon.svg') ?>">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "DevStack",
      "url": "<?= base_url() ?>",
      "logo": "<?= base_url('images/devstack_icon.svg') ?>",
      "foundingDate": "2020",
      "description": "Leading enterprise solutions for digital transformation, web development, mobile apps, and strategic technology implementation.",
      "sameAs": [
        "https://facebook.com/devstack",
        "https://twitter.com/devstack",
        "https://linkedin.com/company/devstack",
        "https://instagram.com/devstack"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-812-1424-0287",
        "email": "info@dev-stack.id",
        "contactType": "customer service",
        "availableLanguage": ["English", "Indonesian"]
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Gg. PGA No.106",
        "addressLocality": "Lengkong",
        "addressRegion": "Jawa Barat",
        "postalCode": "40257",
        "addressCountry": "ID"
      }
    }
    </script>
</head>

<body class="font-sans bg-gray-950" style="background:#040b18;">

    <!-- Viewport Glow Frame -->
    <div class="viewport-glow"></div>

    <!-- ═══ Dark Glass Navigation ═══ -->
    <nav class="fixed w-full z-50 transition-all duration-500 nav-dark" id="main-navbar">
        <!-- Accent line -->
        <div
            class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20 transition-all duration-300" id="navbar-container">
                <!-- Brand / Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3 group">
                        <img src="<?= base_url('images/devstack_icon.svg') ?>" alt="DevStack"
                            class="h-8 md:h-10 transition-transform duration-300 group-hover:scale-105"
                            style="filter: brightness(0) invert(1);" loading="eager">
                        <span class="text-white font-bold text-xl md:text-2xl tracking-tight"
                            style="font-family: 'Inter', sans-serif;">
                            Dev<span class="text-blue-400">Stack</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="nav-link-dark">Home</a>
                    <a href="/about" class="nav-link-dark">About</a>
                    <a href="/services" class="nav-link-dark">Services</a>
                    <a href="/portfolio" class="nav-link-dark">Portfolio</a>
                    <a href="/contact" class="nav-link-dark">Contact</a>

                    <!-- Language Switcher -->
                    <div class="flex items-center space-x-2 ml-6 pl-6 border-l border-white/10">
                        <a href="<?= base_url('language/switch/en') ?>"
                            class="<?= (session()->get('locale') === 'en' || !session()->get('locale')) ? 'bg-blue-500/15 text-blue-300' : 'text-gray-500' ?> px-2 py-1.5 rounded-lg hover:bg-blue-500/10 transition-all duration-300 flex items-center space-x-1.5 text-sm"
                            title="<?= lang('App.lang_en') ?>">
                            <img src="<?= base_url('images/flags/english.svg') ?>" alt="English" class="w-4 h-4">
                            <span>EN</span>
                        </a>
                        <a href="<?= base_url('language/switch/id') ?>"
                            class="<?= session()->get('locale') === 'id' ? 'bg-blue-500/15 text-blue-300' : 'text-gray-500' ?> px-2 py-1.5 rounded-lg hover:bg-blue-500/10 transition-all duration-300 flex items-center space-x-1.5 text-sm"
                            title="<?= lang('App.lang_id') ?>">
                            <img src="<?= base_url('images/flags/indonesia.svg') ?>" alt="Indonesia" class="w-4 h-4">
                            <span>ID</span>
                        </a>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="<?= base_url('contact') ?>" class="btn-glow text-sm px-5 py-2.5">
                        <span>Get Started</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button
                        class="mobile-menu-button w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center border border-blue-500/15 transition-colors hover:bg-blue-500/20">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden mobile-menu-dark rounded-b-2xl">
                <div class="px-4 py-6 space-y-1">
                    <a href="/"
                        class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-blue-500/10 rounded-xl transition-all duration-300 font-medium">Home</a>
                    <a href="/about"
                        class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-blue-500/10 rounded-xl transition-all duration-300 font-medium">About</a>
                    <a href="/services"
                        class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-blue-500/10 rounded-xl transition-all duration-300 font-medium">Services</a>
                    <a href="/portfolio"
                        class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-blue-500/10 rounded-xl transition-all duration-300 font-medium">Portfolio</a>
                    <a href="/contact"
                        class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-blue-500/10 rounded-xl transition-all duration-300 font-medium">Contact</a>

                    <div class="pt-4 border-t border-white/5 mt-4 px-4">
                        <a href="<?= base_url('contact') ?>"
                            class="mobile-cta bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center rounded-xl">
                            Get Started
                        </a>
                    </div>

                    <div class="flex items-center justify-center mt-4 space-x-2">
                        <a href="<?= base_url('language/switch/en') ?>"
                            class="<?= (session()->get('locale') === 'en' || !session()->get('locale')) ? 'bg-blue-500/15 text-blue-300' : 'text-gray-500' ?> px-3 py-2 rounded-lg hover:bg-blue-500/10 transition-all duration-300 flex items-center space-x-2">
                            <img src="<?= base_url('images/flags/english.svg') ?>" alt="English" class="w-5 h-5">
                            <span><?= lang('App.lang_en') ?></span>
                        </a>
                        <a href="<?= base_url('language/switch/id') ?>"
                            class="<?= session()->get('locale') === 'id' ? 'bg-blue-500/15 text-blue-300' : 'text-gray-500' ?> px-3 py-2 rounded-lg hover:bg-blue-500/10 transition-all duration-300 flex items-center space-x-2">
                            <img src="<?= base_url('images/flags/indonesia.svg') ?>" alt="Indonesia" class="w-5 h-5">
                            <span><?= lang('App.lang_id') ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="main-content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- ═══ Dark Navy Footer ═══ -->
    <footer class="relative overflow-hidden" style="background: linear-gradient(180deg, #060e1f, #040b18);">
        <!-- Subtle grid -->
        <div class="absolute inset-0 dot-grid-dark opacity-30"></div>
        <!-- Top glow line -->
        <div
            class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 pt-16">
            <!-- Newsletter -->
            <div class="py-12 border-b border-white/5">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-3 text-white"><?= lang('App.stay_updated') ?></h3>
                    <p class="text-gray-400 mb-8"><?= lang('App.get_insights') ?></p>
                    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="<?= lang('App.enter_email') ?>" class="form-input-dark flex-1">
                        <button type="submit" class="btn-glow px-6 py-3 text-sm">
                            <?= lang('App.subscribe') ?>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Footer Grid -->
            <div class="py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                    <!-- Company -->
                    <div class="space-y-5">
                        <div class="flex items-center space-x-3">
                            <img src="<?= base_url('images/devstack_icon.svg') ?>" alt="DevStack" class="h-8"
                                style="filter: brightness(0) invert(1);">
                            <h3 class="text-xl font-bold text-white" style="font-family: 'Inter', sans-serif;">
                                Dev<span class="text-blue-400">Stack</span>
                            </h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            <?= lang('App.company_description') ?>
                        </p>
                        <div class="flex space-x-3">
                            <a href="https://facebook.com/devstack" target="_blank"
                                class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-lg flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-blue-400 transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com/devstack" target="_blank"
                                class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-lg flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-blue-400 transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="https://linkedin.com/company/devstack" target="_blank"
                                class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-lg flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-blue-400 transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="https://instagram.com/devstack" target="_blank"
                                class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-lg flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-blue-400 transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-semibold text-white uppercase tracking-wider">
                            <?= lang('App.services_footer_title') ?></h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('services') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm"><?= lang('App.web_development') ?></a>
                            </li>
                            <li><a href="<?= base_url('services') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm"><?= lang('App.mobile_apps') ?></a>
                            </li>
                            <li><a href="<?= base_url('services') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm"><?= lang('App.cloud_solutions') ?></a>
                            </li>
                            <li><a href="<?= base_url('services') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm"><?= lang('App.consulting') ?></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Company -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-semibold text-white uppercase tracking-wider">Company</h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('about') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">About Us</a>
                            </li>
                            <li><a href="<?= base_url('portfolio') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Our Work</a>
                            </li>
                            <li><a href="#careers"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Careers</a></li>
                            <li><a href="<?= base_url('contact') ?>"
                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-semibold text-white uppercase tracking-wider"><?= lang('App.contact') ?>
                        </h4>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-4 h-4 text-blue-400 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                <div class="text-sm text-gray-400">
                                    <p>Gg. PGA No.106</p>
                                    <p>Lengkong, Kec. Bojongsoang</p>
                                    <p>Kab. Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-400 text-sm">info@dev-stack.id</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-gray-400 text-sm">+62 812 1424 0287</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/5 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-500 text-xs"><?= lang('App.copyright') ?></p>
                    <div class="flex space-x-6 text-xs">
                        <a href="#privacy" class="text-gray-500 hover:text-blue-400 transition-colors">Privacy
                            Policy</a>
                        <a href="#terms" class="text-gray-500 hover:text-blue-400 transition-colors">Terms of
                            Service</a>
                        <a href="#cookies" class="text-gray-500 hover:text-blue-400 transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Performance Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?= base_url('js/netdata-animations.js') ?>"></script>
    <script>
        // ── Dark Navbar Scroll ──
        const navbar = document.getElementById('main-navbar');
        const navContainer = document.getElementById('navbar-container');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                navbar.classList.add('nav-dark-scrolled');
                navContainer.classList.remove('h-20');
                navContainer.classList.add('h-16');
            } else {
                navbar.classList.remove('nav-dark-scrolled');
                navContainer.classList.add('h-20');
                navContainer.classList.remove('h-16');
            }
        });

        // ── AOS Init ──
        if (window.innerWidth <= 480) {
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('[data-aos]').forEach(function (el) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            });
        } else {
            AOS.init({
                once: true,
                offset: 50,
                duration: window.innerWidth <= 768 ? 400 : 700,
                easing: 'ease-out-cubic',
                disable: false,
                throttleDelay: 50
            });
        }

        // ── DOMContentLoaded ──
        document.addEventListener('DOMContentLoaded', function () {
            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
            });

            // Intersection Observer for cards
            if (window.innerWidth > 768) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) entry.target.classList.add('animate-in');
                    });
                }, { threshold: 0.1, rootMargin: '50px' });

                document.querySelectorAll('.card-dark, .card-enterprise, .card-modern, .hover-lift').forEach(card => {
                    observer.observe(card);
                });
            }

            // Counter animation
            const counters = document.querySelectorAll('[data-counter]');
            if (counters.length > 0) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const target = parseInt(entry.target.getAttribute('data-counter'));
                            const suffix = entry.target.getAttribute('data-suffix') || '';
                            const prefix = entry.target.getAttribute('data-prefix') || '';
                            let current = 0;
                            const increment = target / 40;
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    current = target;
                                    clearInterval(timer);
                                }
                                entry.target.textContent = prefix + Math.floor(current) + suffix;
                            }, 30);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                counters.forEach(c => counterObserver.observe(c));
            }

            // Mobile menu
            const mobileMenuBtn = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            const menuIcon = document.querySelector('.menu-icon');
            const closeIcon = document.querySelector('.close-icon');

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }

            document.addEventListener('click', function (e) {
                if (mobileMenuBtn && !mobileMenuBtn.contains(e.target) && mobileMenu && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 768 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Newsletter form
            const newsletterForm = document.querySelector('footer form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const email = this.querySelector('input[type="email"]').value;
                    if (email) {
                        const button = this.querySelector('button');
                        const originalHTML = button.innerHTML;
                        button.innerHTML = '✓ Subscribed!';
                        button.disabled = true;
                        setTimeout(() => { button.innerHTML = originalHTML; button.disabled = false; }, 3000);
                    }
                });
            }

            // ── Netdata-style Effects Initialization ──
            // Add pulse dots to cards
            document.querySelectorAll('.card-dark').forEach(card => {
                if (!card.querySelector('.pulse-dot')) {
                    const pulseDot = document.createElement('div');
                    pulseDot.className = 'pulse-dot absolute top-2 right-2 w-2 h-2 bg-blue-400 rounded-full';
                    card.style.position = 'relative';
                    card.appendChild(pulseDot);
                }
            });

            // Add floating label animation to input fields
            document.querySelectorAll('input, textarea').forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('input-focused');
                });
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('input-focused');
                });
            });

            // Portfolio filter functionality
            const filterButtons = document.querySelectorAll('.portfolio-filter');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active state
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.dataset.filter;

                    portfolioItems.forEach(item => {
                        if (filter === 'all' || item.dataset.category === filter) {
                            item.style.display = 'block';
                            item.classList.add('fade-in-up');
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('fade-in-up');
                        }
                    });
                });
            });
        });

        // ── Feature Tabs ──
        window.initFeatureTabs = function () {
            const btns = document.querySelectorAll('.feature-tab-btn');
            const panels = document.querySelectorAll('.feature-tab-panel');
            btns.forEach(btn => {
                btn.addEventListener('click', function () {
                    btns.forEach(b => b.classList.remove('active'));
                    panels.forEach(p => { p.style.display = 'none'; p.classList.remove('fade-in-up'); });
                    this.classList.add('active');
                    const target = document.getElementById(this.dataset.tab);
                    if (target) { target.style.display = 'block'; target.classList.add('fade-in-up'); }
                });
            });
        };
    </script>

    <script async src="//platform.twitter.com/widgets.js"></script>
</body>

</html>