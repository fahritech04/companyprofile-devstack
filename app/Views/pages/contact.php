<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Contact Hero Section -->
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <span class="text-sm text-blue-900 font-medium"><?= lang('App.lets_connect') ?></span>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-blue-900 leading-tight max-w-6xl mx-auto">
                    <?= lang('App.contact_title') ?>
                </h1>
                <p class="text-xl text-blue-800/90 leading-relaxed max-w-4xl mx-auto font-medium">
                    <?= lang('App.contact_description') ?>
                </p>
            </div>

            <!-- Modern CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
                <a href="#contact-form" class="group px-12 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.send_message') ?></span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </a>
                <a href="tel:+6281234567890" class="group px-12 py-5 bg-white/80 backdrop-blur-sm text-blue-600 border border-blue-200 rounded-2xl font-semibold hover-lift inline-flex items-center justify-center transition-all duration-300">
                    <span class="text-lg mr-2"><?= lang('App.contact_direct') ?></span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact-form" class="py-32 bg-white bg-professional-waves relative">
    <div class="max-w-7xl mx-auto px-4 container-responsive">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.contact_us') ?>
            </h2>
            <div class="separator mx-auto mb-10"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-4xl mx-auto">
                <?= lang('App.contact_form_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="card-enterprise p-10 hover-lift" data-aos="fade-right">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2"><?= lang('App.send_message') ?></h3>
                    <p class="text-gray-600"><?= lang('App.fill_form') ?></p>
                </div>

                <form class="space-y-6">
                    <div class="group">
                        <label for="name" class="block text-gray-700 font-medium mb-2"><?= lang('App.full_name') ?></label>
                        <div class="relative">
                            <input type="text" id="name" name="name"
                                   class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white">
                            <svg class="absolute right-3 top-4 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="group">
                        <label for="email" class="block text-gray-700 font-medium mb-2"><?= lang('App.email') ?></label>
                        <div class="relative">
                            <input type="email" id="email" name="email"
                                   class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white">
                            <svg class="absolute right-3 top-4 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="group">
                        <label for="subject" class="block text-gray-700 font-medium mb-2"><?= lang('App.subject') ?></label>
                        <div class="relative">
                            <input type="text" id="subject" name="subject"
                                   class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white">
                            <svg class="absolute right-3 top-4 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="group">
                        <label for="message" class="block text-gray-700 font-medium mb-2"><?= lang('App.message') ?></label>
                        <textarea id="message" name="message" rows="6"
                                  class="w-full px-4 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-2xl hover-lift font-semibold text-lg transition-all duration-300 group">
                        <span class="mr-2"><?= lang('App.send_message') ?></span>
                        <svg class="w-5 h-5 inline group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8" data-aos="fade-left">
                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                    <div class="card-enterprise p-8 text-center hover-lift group">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.contact_address') ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= lang('App.full_location_address') ?><br>
                            <?= lang('App.location_subdistrict') ?><br>
                            <?= lang('App.location_district') ?><br>
                            <?= lang('App.location_city') ?>
                        </p>
                    </div>

                    <div class="card-enterprise p-8 text-center hover-lift group">
                        <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.contact_phone') ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <a href="tel:<?= lang('App.phone_office') ?>" class="hover:text-green-600 transition-colors">
                                <?= lang('App.phone_office') ?>
                            </a>
                        </p>
                    </div>

                    <div class="card-enterprise p-8 text-center hover-lift group">
                        <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= lang('App.contact_email') ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <a href="mailto:<?= lang('App.email_office') ?>" class="hover:text-purple-600 transition-colors">
                                <?= lang('App.email_office') ?>
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card-enterprise p-8 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center"><?= lang('App.business_hours') ?></h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-600 font-medium"><?= lang('App.monday_friday') ?></span>
                            <span class="text-gray-900 font-semibold"><?= lang('App.office_hours.weekday') ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-600 font-medium"><?= lang('App.saturday') ?></span>
                            <span class="text-gray-900 font-semibold"><?= lang('App.office_hours.saturday') ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600 font-medium"><?= lang('App.sunday') ?></span>
                            <span class="text-red-600 font-semibold"><?= lang('App.office_hours.sunday') ?></span>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="card-enterprise p-8 text-center hover-lift">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6"><?= lang('App.follow_us') ?></h3>
                    <div class="flex justify-center space-x-6">
                        <a href="#" class="group">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-400 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-blue-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div class="w-12 h-12 bg-pink-50 rounded-xl flex items-center justify-center group-hover:bg-pink-600 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-pink-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.219-5.162 1.219-5.162s-.279-.558-.279-1.379c0-1.279.74-2.237 1.658-2.237.783 0 1.16.588 1.16 1.299 0 .787-.501 1.968-.759 3.063-.219.919.461 1.668 1.36 1.668 1.639 0 2.898-1.719 2.898-4.201 0-2.198-1.579-3.736-3.837-3.736-2.617 0-4.15 1.96-4.15 3.988 0 .787.301 1.631.679 2.088.078.099.099.179.079.279-.08.301-.24 1.04-.28 1.178-.04.179-.139.219-.321.139-1.199-.559-1.939-2.298-1.939-3.697 0-2.897 2.099-5.556 6.077-5.556 3.198 0 5.675 2.278 5.675 5.321 0 3.177-2.001 5.734-4.777 5.734-.939 0-1.818-.499-2.118-1.099 0 0-.479 1.838-.599 2.277-.219.859-.8 1.919-1.199 2.577C9.197 23.814 10.566 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-800 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-blue-800 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-32 gradient-secondary relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-enterprise-geometric opacity-10"></div>
    <div class="absolute inset-0 bg-professional-waves opacity-5"></div>

    <div class="max-w-7xl mx-auto px-4 container-responsive relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-blue-900 mb-8">
                <?= lang('App.our_location') ?>
            </h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-700 text-xl leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.location_desc') ?>
            </p>
        </div>

        <!-- Map Container -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Map -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="card-enterprise overflow-hidden hover-lift">
                    <!-- Google Maps Embed -->
                    <div class="h-96 w-full relative">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.70649255784986!2d107.63274538807497!3d-6.974360799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae1cb7b259%3A0x9beefbbb608cd10d!2sGg.%20PGA%20No.106%2C%20Lengkong%2C%20Kec.%20Bojongsoang%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040257!5e1!3m2!1sid!2sid!4v1760206567152!5m2!1sid!2sid"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-t-2xl">
                        </iframe>
                        <!-- Map Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-2 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-gray-900"><?= lang('App.live_location') ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Map Info Card -->
                    <div class="p-8 bg-gradient-to-r from-blue-50 to-indigo-50 border-t border-blue-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Gg. PGA No.106
                                </h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Lengkong, Kec. Bojongsoang<br>
                                    Kabupaten Bandung, Jawa Barat 40257<br>
                                    <span class="text-sm text-gray-500">Indonesia</span>
                                </p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="https://maps.google.com/maps?q=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung"
                                   target="_blank"
                                   class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl hover-lift font-semibold transition-all duration-300 group">
                                    <svg class="w-5 h-5 mr-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    <?= lang('App.open_maps') ?>
                                </a>
                                <a href="https://www.google.com/maps/dir/?api=1&destination=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung"
                                   target="_blank"
                                   class="inline-flex items-center justify-center px-6 py-3 bg-white text-blue-600 border border-blue-200 rounded-xl hover-lift font-semibold transition-all duration-300 group">
                                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                    </svg>
                                    <?= lang('App.get_directions') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location Details -->
            <div class="space-y-8" data-aos="fade-left">
                <!-- Quick Info -->
                <div class="card-enterprise p-8 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center"><?= lang('App.full_location_title') ?></h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1"><?= lang('App.full_address') ?></h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    <?= lang('App.full_location_address') ?><br>
                                    <?= lang('App.location_subdistrict') ?><br>
                                    <?= lang('App.location_district') ?><br>
                                    <?= lang('App.location_city') ?>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1"><?= lang('App.accessibility_text') ?></h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    <?= lang('App.nearby_description.easy_access') ?><br>
                                    <?= lang('App.nearby_description.parking') ?><br>
                                    <?= lang('App.nearby_description.transport') ?>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1"><?= lang('App.nearby_facilities_text') ?></h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    <?= lang('App.nearby_description.restaurants') ?><br>
                                    <?= lang('App.nearby_description.atm') ?><br>
                                    <?= lang('App.nearby_description.shops') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visit CTA -->
                <div class="card-enterprise p-8 text-center hover-lift bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4"><?= lang('App.visit_us') ?></h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        <?= lang('App.visit_desc') ?>
                    </p>
                    <a href="#contact-form" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl hover-lift font-semibold transition-all duration-300 group">
                        <span class="mr-2"><?= lang('App.schedule_visit') ?></span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 9l6-6m0 0v6m0-6h-6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
