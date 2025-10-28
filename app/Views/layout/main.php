<!DOCTYPE html>
<html lang="<?= session()->get('locale') ?? 'en' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('App.hero_title') ?></title>
    
    <!-- SEO & Performance Optimization -->
    <meta name="description" content="Leading enterprise solutions for digital transformation, web development, mobile apps, and strategic technology implementation.">
    <meta name="keywords" content="enterprise solutions, web development, mobile apps, digital transformation, technology consulting">
    <meta name="author" content="DevStack">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="canonical" href="<?= current_url() ?>">

    <!-- Performance Preloads -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

    <!-- Enterprise Fonts with preload -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;">

    <!-- Modern UI Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <!-- 3D & Particle Effects Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <!-- Performance & PWA -->
    <link rel="manifest" href="<?= base_url('manifest.json') ?>">
    <meta name="theme-color" content="#2563eb">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="DevStack">

    <!-- Mobile Performance Optimizations -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('images/devstack_icon.svg') ?>" type="image/svg+xml" sizes="any">
    <link rel="mask-icon" href="<?= base_url('images/devstack_icon.svg') ?>" color="#2563eb">

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
<body class="font-sans">
    <!-- Modern Navigation -->
    <nav class="bg-white/90 backdrop-blur-md shadow-xl fixed w-full z-50 border-b border-blue-200/20">
        <!-- Subtle gradient line accent -->
        <div class="h-1 bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800"></div>

        <!-- Floating background effect -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-50/20 via-transparent to-blue-50/20 opacity-50"></div>

        <div class="max-w-7xl mx-auto px-4 relative">
            <div class="flex justify-between items-center h-16">
                <!-- Brand/Logo -->
                <div class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <img src="<?= base_url('images/devstack_logo.svg') ?>" alt="Company Logo" class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20" loading="eager" decoding="async">
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="nav-link px-4 py-2 text-gray-700 hover:text-blue-600 font-medium hover:bg-blue-50/80 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-200/50 group">
                        <span>Home</span>
                        <div class="w-0 group-hover:w-full h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full transition-all duration-300"></div>
                    </a>
                    <a href="/about" class="nav-link px-4 py-2 text-gray-700 hover:text-blue-600 font-medium hover:bg-blue-50/80 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-200/50 group">
                        <span>About</span>
                        <div class="w-0 group-hover:w-full h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full transition-all duration-300"></div>
                    </a>
                    <a href="/services" class="nav-link px-4 py-2 text-gray-700 hover:text-blue-600 font-medium hover:bg-blue-50/80 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-200/50 group">
                        <span>Services</span>
                        <div class="w-0 group-hover:w-full h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full transition-all duration-300"></div>
                    </a>
                    <a href="/portfolio" class="nav-link px-4 py-2 text-gray-700 hover:text-blue-600 font-medium hover:bg-blue-50/80 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-200/50 group">
                        <span>Portfolio</span>
                        <div class="w-0 group-hover:w-full h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full transition-all duration-300"></div>
                    </a>
                    <a href="/contact" class="nav-link px-4 py-2 text-gray-700 hover:text-blue-600 font-medium hover:bg-blue-50/80 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-200/50 group">
                        <span>Contact</span>
                        <div class="w-0 group-hover:w-full h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full transition-all duration-300"></div>
                    </a>

                    <!-- Language Switcher -->
                    <div class="flex items-center space-x-2 ml-4">
                        <a href="<?= base_url('language/switch/en') ?>" class="<?= (session()->get('locale') === 'en' || !session()->get('locale')) ? 'bg-blue-100 text-blue-600' : 'text-gray-600' ?> px-2 py-1 rounded-lg hover:bg-blue-50 transition-all duration-300 flex items-center space-x-1.5" title="<?= lang('App.lang_en') ?>">
                            <img src="<?= base_url('images/flags/english.svg') ?>" alt="English" class="w-5 h-5">
                            <span>EN</span>
                        </a>
                        <span class="text-gray-300">|</span>
                        <a href="<?= base_url('language/switch/id') ?>" class="<?= session()->get('locale') === 'id' ? 'bg-blue-100 text-blue-600' : 'text-gray-600' ?> px-2 py-1 rounded-lg hover:bg-blue-50 transition-all duration-300 flex items-center space-x-1.5" title="<?= lang('App.lang_id') ?>">
                            <img src="<?= base_url('images/flags/indonesia.svg') ?>" alt="Indonesia" class="w-5 h-5">
                            <span>ID</span>
                        </a>
                    </div>
                </div>

                <!-- Premium CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="<?= base_url('login') ?>" class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Get Started
                        <svg class="w-4 h-4 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </a>
                </div>

                <!-- Modern Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button w-10 h-10 bg-blue-50/50 rounded-xl flex items-center justify-center border border-blue-200/30 transition-colors hover:bg-blue-100/50">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modern Mobile Menu -->
            <div class="mobile-menu hidden md:hidden bg-white/95 backdrop-blur-md border-t border-blue-200/30">
                <div class="px-4 py-6 space-y-1">
                    <a href="/" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-300 font-medium">
                        Home
                    </a>
                    <a href="/about" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-300 font-medium">
                        About
                    </a>
                    <a href="/services" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-300 font-medium">
                        Services
                    </a>
                    <a href="/portfolio" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-300 font-medium">
                        Portfolio
                    </a>
                    <a href="/contact" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-300 font-medium">
                        Contact
                    </a>

                    <!-- CTA Button Mobile -->
                    <div class="pt-4 border-t border-blue-200/30 mt-6 px-4">
                        <a href="<?= base_url('login') ?>" class="mobile-cta block w-full max-w-sm mx-auto px-4 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg text-center hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 btn-responsive">
                            Get Started
                        </a>
                    </div>

                    <!-- Language Switcher Mobile -->
                    <div class="flex items-center justify-center mt-4 space-x-2">
                        <a href="<?= base_url('language/switch/en') ?>" class="<?= (session()->get('locale') === 'en' || !session()->get('locale')) ? 'bg-blue-100 text-blue-600' : 'text-gray-600' ?> px-3 py-2 rounded-lg hover:bg-blue-50 transition-all duration-300 flex items-center space-x-2">
                            <img src="<?= base_url('images/flags/english.svg') ?>" alt="English" class="w-6 h-6">
                            <span><?= lang('App.lang_en') ?></span>
                        </a>
                        <span class="text-gray-300">|</span>
                        <a href="<?= base_url('language/switch/id') ?>" class="<?= session()->get('locale') === 'id' ? 'bg-blue-100 text-blue-600' : 'text-gray-600' ?> px-3 py-2 rounded-lg hover:bg-blue-50 transition-all duration-300 flex items-center space-x-2">
                            <img src="<?= base_url('images/flags/indonesia.svg') ?>" alt="Indonesia" class="w-6 h-6">
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

    <!-- Footer -->
    <footer class="bg-white text-gray-800 section-enterprise-premium relative overflow-hidden">
        <!-- Enterprise Background System -->
        <div class="absolute inset-0 z-0">
            <div class="bg-enterprise-geometric"></div>
            <div class="bg-professional-waves opacity-15"></div>
            <div class="bg-professional-mesh opacity-3"></div>
        </div>
        <!-- Subtle Blue Accent Line -->
        <div class="h-1 bg-gradient-to-r from-blue-600 to-blue-700"></div>

        <div class="relative max-w-7xl mx-auto px-4 container-responsive">
            <!-- Minimal Newsletter -->
            <div class="py-16 border-b border-blue-200/30">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-4 text-blue-900"><?= lang('App.stay_updated') ?></h3>
                    <p class="text-blue-700 mb-8 text-lg">
                        <?= lang('App.get_insights') ?>
                    </p>
                    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="<?= lang('App.enter_email') ?>" class="flex-1 px-4 py-3 bg-white/70 backdrop-blur-sm border border-blue-200/50 rounded-lg text-blue-900 placeholder-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all">
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 font-semibold transition-all shadow-md">
                            <?= lang('App.subscribe') ?>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Compact Footer Content -->
            <div class="py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-blue-900">DevStack</h3>
                        <p class="text-blue-800 text-lg leading-relaxed font-medium">
                            <?= lang('App.company_description') ?>
                        </p>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/devstack" target="_blank" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://twitter.com/devstack" target="_blank" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="https://linkedin.com/company/devstack" target="_blank" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com/devstack" target="_blank" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800"><?= lang('App.services_footer_title') ?></h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg"><?= lang('App.web_development') ?></a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg"><?= lang('App.mobile_apps') ?></a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg"><?= lang('App.cloud_solutions') ?></a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg"><?= lang('App.consulting') ?></a></li>
                        </ul>
                    </div>

                    <!-- Company -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800">Company</h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('about') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">About Us</a></li>
                            <li><a href="<?= base_url('portfolio') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Our Work</a></li>
                            <li><a href="#careers" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Careers</a></li>
                            <li><a href="<?= base_url('contact') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Contact Us</a></li>
                            <li><a href="#blog" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Blog</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800"><?= lang('App.contact') ?></h4>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                <div class="text-blue-800">
                                    <p class="font-medium">Gg. PGA No.106</p>
                                    <p class="text-blue-700">Lengkong, Kec. Bojongsoang</p>
                                    <p class="text-blue-700">Kabupaten Bandung, Jawa Barat 40257</p>
                                    <p class="text-blue-700">Indonesia</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-blue-800 font-medium">info@dev-stack.id</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="text-blue-800 font-medium">+62 812 1424 0287</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clean Bottom Bar -->
            <div class="border-t border-blue-200/30 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-blue-600 text-sm font-medium"><?= lang('App.copyright') ?></p>
                    <div class="flex space-x-8 text-sm">
                        <a href="#privacy" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Privacy Policy</a>
                        <a href="#terms" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Terms of Service</a>
                        <a href="#cookies" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Performance Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS with mobile-optimized settings
        if (window.innerWidth <= 480) {
            // Disable AOS completely on very small screens for better performance
            console.log('AOS disabled for mobile performance');

            // Ensure content is visible even without AOS
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('[data-aos]').forEach(function(element) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                });
            });
        } else {
            AOS.init({
                once: true,
                offset: 50,
                duration: window.innerWidth <= 768 ? 400 : 600,
                easing: 'ease-out-cubic',
                disable: false,
                throttleDelay: window.innerWidth <= 768 ? 100 : 50
            });
        }

        // Performance optimizations
        document.addEventListener('DOMContentLoaded', function() {
            // Preload critical resources
            const preloadLinks = [
                '<?= base_url("images/devstack_icon.svg") ?>',
                'https://fonts.gstatic.com'
            ];

            preloadLinks.forEach(url => {
                if (url) {
                    const link = document.createElement('link');
                    link.rel = 'preload';
                    link.href = url;
                    if (/\.(ico|svg|png|jpg|jpeg|webp)$/i.test(url)) link.as = 'image';
                    else link.as = 'font';
                    document.head.appendChild(link);
                }
            });

            // Smooth scroll for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Intersection Observer for performance - disabled on mobile for better performance
            if (window.innerWidth > 768) {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '50px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-in');
                        }
                    });
                }, observerOptions);

                // Observe strategic cards for advanced animations
                document.querySelectorAll('.card-enterprise, .hover-lift').forEach(card => {
                    observer.observe(card);
                });
            }

            // Mobile menu enhancements
            const mobileMenuBtn = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            const menuIcon = document.querySelector('.menu-icon');
            const closeIcon = document.querySelector('.close-icon');

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (mobileMenuBtn && !mobileMenuBtn.contains(e.target) && mobileMenu && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Responsive menu handling
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Newsletter form enhancement
            const newsletterForm = document.querySelector('footer form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = this.querySelector('input[type="email"]').value;
                    if (email) {
                        // Simulate success
                        const button = this.querySelector('button');
                        const originalText = button.textContent;
                        button.textContent = '✓ Subscribed!';
                        button.disabled = true;
                        button.classList.add('bg-green-500', 'text-white');

                        setTimeout(() => {
                            button.textContent = originalText;
                            button.disabled = false;
                            button.classList.remove('bg-green-500', 'text-white');
                        }, 3000);
                    }
                });
            }

            // Add loading animations
            const addLoadingEffect = (element) => {
                element.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            };

            document.querySelectorAll('[data-aos]').forEach(el => addLoadingEffect(el));
        });

        // Advanced interaction effects - disabled on touch devices for performance
        if (!('ontouchstart' in window) && window.innerWidth > 768) {
            document.addEventListener('mousemove', function(e) {
                const cards = document.querySelectorAll('.card-enterprise');

                cards.forEach(card => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    card.style.transform = `perspective(1000px) rotateY(${x * 0.001}deg) rotateX(${y * 0.001}deg) scale(${card.matches(':hover') ? '1.02' : '1'})`;
                });
            });
        }

        // Performance monitoring
        window.addEventListener('load', function() {
            // Measure LCP
            if ('PerformanceObserver' in window) {
                try {
                    const observer = new PerformanceObserver((list) => {
                        const entries = list.getEntries();
                        const lastEntry = entries[entries.length - 1];

                        // Use LCP data for performance monitoring
                        if (lastEntry.startTime) {
                            console.log('LCP:', lastEntry.startTime, 'ms');
                        }
                    });

                    observer.observe({entryTypes: ['largest-contentful-paint']});
                } catch (e) {
                    console.log('LCP monitoring not supported');
                }
            }
        });
    </script>

    <!-- Defer non-critical scripts -->
    <script async src="//platform.twitter.com/widgets.js"></script>
</body>
</html>
