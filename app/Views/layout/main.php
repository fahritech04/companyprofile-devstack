<!DOCTYPE html>
<html lang="<?= session()->get('locale') ?? 'en' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('App.hero_title') ?></title>
    
    <!-- SEO & Performance Optimization -->
    <meta name="description" content="Leading enterprise solutions for digital transformation, web development, mobile apps, and strategic technology implementation.">
    <meta name="keywords" content="enterprise solutions, web development, mobile apps, digital transformation, technology consulting">
    <meta name="author" content="Company Name">
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

    <!-- Performance & PWA -->
    <link rel="manifest" href="<?= base_url('manifest.json') ?>">
    <meta name="theme-color" content="#2563eb">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Company Name">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= lang('App.hero_title') ?>">
    <meta property="og:description" content="Leading enterprise solutions for digital transformation">
    <meta property="og:image" content="<?= base_url('favicon.ico') ?>">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Company Name",
      "url": "<?= base_url() ?>",
      "logo": "<?= base_url('favicon.ico') ?>",
      "sameAs": [
        "#",
        "#",
        "#",
        "#"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-234-567-890",
        "contactType": "customer service",
        "availableLanguage": ["English", "Indonesian"]
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
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-bold bg-gradient-to-r from-blue-900 to-blue-700 bg-clip-text text-transparent">Company</span>
                        </div>
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
                    <div class="flex items-center ml-6 pl-6 border-l border-blue-200/30">
                        <div class="flex items-center bg-blue-50/50 rounded-xl p-1 border border-blue-200/30">
                            <a href="<?= base_url('language/switch/en') ?>" class="px-3 py-1 text-sm rounded-lg transition-all duration-300 <?= session()->get('locale') == 'en' ? 'bg-blue-600 text-white shadow-md' : 'text-gray-700 hover:bg-white/80' ?> font-medium">
                                EN
                            </a>
                            <a href="<?= base_url('language/switch/id') ?>" class="px-3 py-1 text-sm rounded-lg transition-all duration-300 <?= session()->get('locale') == 'id' ? 'bg-blue-600 text-white shadow-md' : 'text-gray-700 hover:bg-white/80' ?> font-medium">
                                ID
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Premium CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="#contact" class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
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
                    <div class="pt-4 border-t border-blue-200/30 mt-6">
                        <a href="#contact" class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl text-center hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg">
                            Get Started
                        </a>
                    </div>

                    <!-- Language Switcher Mobile -->
                    <div class="flex items-center justify-center mt-4 space-x-1">
                        <a href="<?= base_url('language/switch/en') ?>" class="px-4 py-2 text-sm rounded-lg transition-all duration-300 <?= session()->get('locale') == 'en' ? 'bg-blue-600 text-white shadow-md' : 'text-gray-700 bg-blue-50/50' ?> font-medium">
                            English
                        </a>
                        <a href="<?= base_url('language/switch/id') ?>" class="px-4 py-2 text-sm rounded-lg transition-all duration-300 <?= session()->get('locale') == 'id' ? 'bg-blue-600 text-white shadow-md' : 'text-gray-700 bg-blue-50/50' ?> font-medium">
                            Indonesia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Add JavaScript for mobile menu toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            const menuIcon = document.querySelector('.menu-icon');
            const closeIcon = document.querySelector('.close-icon');

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when window is resized to desktop view
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    </script>

    <!-- Content -->
    <?= $this->renderSection('content') ?>

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
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Stay Updated</h3>
                    <p class="text-blue-700 mb-8 text-lg">
                        Get exclusive insights delivered to your inbox
                    </p>
                    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 bg-white/70 backdrop-blur-sm border border-blue-200/50 rounded-lg text-blue-900 placeholder-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all">
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 font-semibold transition-all shadow-md">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Compact Footer Content -->
            <div class="py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-blue-900">Company Name</h3>
                        <p class="text-blue-800 text-lg leading-relaxed font-medium">
                            Leading enterprise solutions for digital transformation with innovative technology and strategic thinking.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/50 hover:bg-blue-600 rounded-xl flex items-center justify-center transition-all shadow-sm border border-blue-200/30">
                                <svg class="w-5 h-5 text-blue-900 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800">Services</h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Web Development</a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Mobile Apps</a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Cloud Solutions</a></li>
                            <li><a href="<?= base_url('services') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Consulting</a></li>
                        </ul>
                    </div>

                    <!-- Company -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800">Company</h4>
                        <ul class="space-y-3">
                            <li><a href="<?= base_url('about') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">About Us</a></li>
                            <li><a href="<?= base_url('portfolio') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Our Work</a></li>
                            <li><a href="#" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Careers</a></li>
                            <li><a href="<?= base_url('contact') ?>" class="text-blue-700 hover:text-blue-900 transition-colors text-lg">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="space-y-4">
                        <h4 class="text-xl font-semibold text-blue-800">Contact</h4>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                <div class="text-blue-800">
                                    <p class="font-medium">123 Business Street</p>
                                    <p class="text-blue-700">City, Country</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-blue-800 font-medium">info@company.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clean Bottom Bar -->
            <div class="border-t border-blue-200/30 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-blue-600 text-sm font-medium">© 2025 Company Name. All rights reserved.</p>
                    <div class="flex space-x-8 text-sm">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Privacy</a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Terms</a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors font-medium">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Performance Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS with optimized settings
        AOS.init({
            once: true,
            offset: 50,
            duration: 600,
            easing: 'ease-out-cubic'
        });

        // Performance optimizations
        document.addEventListener('DOMContentLoaded', function() {
            // Preload critical resources
            const preloadLinks = [
                '<?= base_url("favicon.ico") ?>',
                'https://fonts.gstatic.com'
            ];

            preloadLinks.forEach(url => {
                if (url) {
                    const link = document.createElement('link');
                    link.rel = 'preload';
                    link.href = url;
                    if (url.includes('.ico')) link.as = 'image';
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

            // Intersection Observer for performance
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

        // Advanced interaction effects
        document.addEventListener('mousemove', function(e) {
            const cards = document.querySelectorAll('.card-enterprise');

            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                card.style.transform = `perspective(1000px) rotateY(${x * 0.001}deg) rotateX(${y * 0.001}deg) scale(${card.matches(':hover') ? '1.02' : '1'})`;
            });
        });

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
</body>
</html>
