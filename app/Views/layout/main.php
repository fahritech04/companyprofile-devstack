<!DOCTYPE html>
<html lang="<?= session()->get('locale') ?? 'en' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('App.hero_title') ?></title>
    
    <!-- Modern UI Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex items-center py-4">
                    <span class="font-semibold text-gray-500 text-lg">Devstack Logo</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?= base_url() ?>" class="py-4 px-2 text-gray-500 hover:text-gray-900 transition duration-300"><?= lang('App.home') ?></a>
                    <a href="<?= base_url('about') ?>" class="py-4 px-2 text-gray-500 hover:text-gray-900 transition duration-300"><?= lang('App.about') ?></a>
                    <a href="<?= base_url('services') ?>" class="py-4 px-2 text-gray-500 hover:text-gray-900 transition duration-300"><?= lang('App.services') ?></a>
                    <a href="<?= base_url('portfolio') ?>" class="py-4 px-2 text-gray-500 hover:text-gray-900 transition duration-300"><?= lang('App.portfolio') ?></a>
                    <a href="<?= base_url('contact') ?>" class="py-4 px-2 text-gray-500 hover:text-gray-900 transition duration-300"><?= lang('App.contact') ?></a>
                    
                    <!-- Language Switcher Desktop -->
                    <div class="flex items-center space-x-3 border-l pl-4 ml-4">
                        <a href="<?= base_url('language/switch/en') ?>" class="text-sm <?= session()->get('locale') == 'en' ? 'font-bold text-blue-600' : 'text-gray-500' ?>">EN</a>
                        <a href="<?= base_url('language/switch/id') ?>" class="text-sm <?= session()->get('locale') == 'id' ? 'font-bold text-blue-600' : 'text-gray-500' ?>">ID</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button outline-none" aria-label="Menu">
                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden">
                <a href="<?= base_url() ?>" class="block py-3 px-4 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition duration-300"><?= lang('App.home') ?></a>
                <a href="<?= base_url('about') ?>" class="block py-3 px-4 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition duration-300"><?= lang('App.about') ?></a>
                <a href="<?= base_url('services') ?>" class="block py-3 px-4 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition duration-300"><?= lang('App.services') ?></a>
                <a href="<?= base_url('portfolio') ?>" class="block py-3 px-4 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition duration-300"><?= lang('App.portfolio') ?></a>
                <a href="<?= base_url('contact') ?>" class="block py-3 px-4 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition duration-300"><?= lang('App.contact') ?></a>
                
                <!-- Language Switcher Mobile -->
                <div class="flex items-center space-x-3 py-3 px-4 border-t">
                    <span class="text-gray-500 text-sm"><?= lang('App.language_label') ?></span>
                    <a href="<?= base_url('language/switch/en') ?>" class="text-sm <?= session()->get('locale') == 'en' ? 'font-bold text-blue-600' : 'text-gray-500' ?>">EN</a>
                    <a href="<?= base_url('language/switch/id') ?>" class="text-sm <?= session()->get('locale') == 'id' ? 'font-bold text-blue-600' : 'text-gray-500' ?>">ID</a>
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
    <footer class="relative bg-gradient-to-b from-gray-900 to-black text-white py-16">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/10 rounded-full filter blur-2xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Company Name</h3>
                    <p class="text-gray-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in interdum ipsum, sit amet.</p>
                    <div class="pt-2">
                        <a href="<?= base_url('contact') ?>" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors">
                            <?= lang('App.learn_more') ?>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="<?= base_url() ?>" class="text-gray-400 hover:text-white transition-colors"><?= lang('App.home') ?></a></li>
                        <li><a href="<?= base_url('about') ?>" class="text-gray-400 hover:text-white transition-colors"><?= lang('App.about') ?></a></li>
                        <li><a href="<?= base_url('services') ?>" class="text-gray-400 hover:text-white transition-colors"><?= lang('App.services') ?></a></li>
                        <li><a href="<?= base_url('portfolio') ?>" class="text-gray-400 hover:text-white transition-colors"><?= lang('App.portfolio') ?></a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold"><?= lang('App.contact') ?></h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-400">123 Street Name, City, Country</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-400">info@company.com</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-400">+1 234 567 890</span>
                        </li>
                    </ul>
                </div>

                <!-- Social Media & Newsletter -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Stay Connected</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                        </a>
                    </div>

                    <!-- Newsletter -->
                    <div class="mt-6">
                        <h4 class="text-sm font-semibold mb-3">Subscribe to our newsletter</h4>
                        <form class="flex">
                            <input type="email" placeholder="Enter your email" class="flex-1 bg-gray-800 text-gray-200 px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 mt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">© 2025 Company Name. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>