<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Contact Hero Section -->
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

    <!-- Canvas Particle Network -->
    <canvas id="particle-network-contact" class="absolute inset-0 w-full h-full opacity-30"></canvas>

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
                <?= lang('App.lets_connect') ?>
            </div>
            <h1 class="text-gradient-blue leading-tight hero-text-reveal"><?= lang('App.contact_title') ?></h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.contact_description') ?>
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <a href="#contact-form" class="btn-glow px-8 py-4 magnetic-btn">
                    <span><?= lang('App.send_message') ?></span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </a>
                <a href="tel:+6281214240287" class="btn-glass px-8 py-4 magnetic-btn">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    <span><?= lang('App.contact_direct') ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>

<div class="divider-glow"></div>

<!-- Contact Form Section -->
<section id="contact-form" class="py-24 relative" style="background: #040b18;">
    <div class="absolute inset-0 dot-grid-dark opacity-20"></div>
    <div class="absolute inset-0 hex-grid opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6 neon-text"><?= lang('App.contact_us') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-4xl mx-auto"><?= lang('App.contact_form_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="card-dark p-8 card-glow-hover" data-aos="fade-right">
                <div class="text-center mb-8">
                    <div class="icon-box-dark mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?= lang('App.send_message') ?></h3>
                    <p class="text-gray-400 text-sm"><?= lang('App.fill_form') ?></p>
                </div>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 text-sm">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
                        <ul class="list-disc list-inside">
                            <?php foreach (session()->getFlashdata('errors') as $err): ?>
                                <li><?= esc($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('contact/submit') ?>" method="post" class="space-y-5">
                    <?= csrf_field() ?>
                    <div>
                        <label for="name"
                            class="block text-gray-300 font-medium mb-2 text-sm"><?= lang('App.full_name') ?></label>
                        <input type="text" id="name" name="name" class="form-input-dark w-full focus-ring"
                            value="<?= old('name') ?>" required>
                    </div>
                    <div>
                        <label for="email"
                            class="block text-gray-300 font-medium mb-2 text-sm"><?= lang('App.email') ?></label>
                        <input type="email" id="email" name="email" class="form-input-dark w-full focus-ring"
                            value="<?= old('email') ?>" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-300 font-medium mb-2 text-sm">Phone (Optional)</label>
                        <input type="text" id="phone" name="phone" class="form-input-dark w-full focus-ring"
                            value="<?= old('phone') ?>">
                    </div>
                    <div>
                        <label for="subject"
                            class="block text-gray-300 font-medium mb-2 text-sm"><?= lang('App.subject') ?></label>
                        <input type="text" id="subject" name="subject" class="form-input-dark w-full focus-ring"
                            value="<?= old('subject') ?>" required>
                    </div>
                    <div>
                        <label for="message"
                            class="block text-gray-300 font-medium mb-2 text-sm"><?= lang('App.message') ?></label>
                        <textarea id="message" name="message" rows="5" class="form-input-dark w-full resize-none focus-ring"
                            required><?= old('message') ?></textarea>
                    </div>
                    <button type="submit" class="btn-glow w-full py-4 text-base magnetic-btn">
                        <span><?= lang('App.send_message') ?></span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6" data-aos="fade-left">
                <!-- Info Cards -->
                <div class="card-dark p-6 group card-glow-hover">
                    <div class="flex items-center space-x-4">
                        <div class="icon-box-dark flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1"><?= lang('App.contact_address') ?></h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                <?= lang('App.full_location_address') ?><br>
                                <?= lang('App.location_subdistrict') ?><br>
                                <?= lang('App.location_district') ?><br>
                                <?= lang('App.location_city') ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-dark p-6 group card-glow-hover">
                    <div class="flex items-center space-x-4">
                        <div class="icon-box-dark flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Phone</h3>
                            <a href="tel:+6281214240287"
                                class="text-gray-400 text-sm hover:text-blue-400 transition-colors">+62 812 1424
                                0287</a>
                        </div>
                    </div>
                </div>

                <div class="card-dark p-6 group card-glow-hover">
                    <div class="flex items-center space-x-4">
                        <div class="icon-box-dark flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Email</h3>
                            <a href="mailto:info@dev-stack.id"
                                class="text-gray-400 text-sm hover:text-blue-400 transition-colors">info@dev-stack.id</a>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card-dark p-6 card-glow-hover">
                    <h3 class="text-white font-semibold mb-4"><?= lang('App.business_hours') ?></h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-white/5">
                            <span class="text-gray-400 text-sm"><?= lang('App.monday_friday') ?></span>
                            <span class="text-white text-sm font-medium"><?= lang('App.office_hours.weekday') ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-white/5">
                            <span class="text-gray-400 text-sm"><?= lang('App.saturday') ?></span>
                            <span class="text-white text-sm font-medium"><?= lang('App.office_hours.saturday') ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-400 text-sm"><?= lang('App.sunday') ?></span>
                            <span class="text-red-400 text-sm font-medium"><?= lang('App.office_hours.sunday') ?></span>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="card-dark p-6 text-center card-glow-hover">
                    <h3 class="text-white font-semibold mb-4"><?= lang('App.follow_us') ?></h3>
                    <div class="flex justify-center space-x-3">
                        <a href="https://facebook.com/devstack" target="_blank"
                            class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-xl flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                            <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400 transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/devstack" target="_blank"
                            class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-xl flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                            <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400 transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/devstack" target="_blank"
                            class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-xl flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                            <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400 transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/devstack" target="_blank"
                            class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-xl flex items-center justify-center transition-all border border-white/5 hover:border-blue-500/30 group">
                            <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400 transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-24 relative" style="background: linear-gradient(180deg, #040b18, #060e1f);">
    <div class="glow-orb"
        style="width:400px;height:400px;background:radial-gradient(circle,rgba(37,99,235,.06),transparent 70%);top:20%;left:-8%;filter:blur(80px);">
    </div>
    <div class="absolute inset-0 hex-grid opacity-30"></div>
    <div class="divider-glow mb-12"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6 neon-text"><?= lang('App.our_location') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto"><?= lang('App.location_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Map -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="card-dark overflow-hidden card-glow-hover">
                    <div class="h-96 w-full relative">
                        <iframe
                            src="https://maps.google.com/maps?q=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung&output=embed"
                            width="100%" height="100%"
                            style="border:0;filter:brightness(0.8) contrast(1.1) saturate(0.8);" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-t-xl">
                        </iframe>
                        <div class="absolute top-4 left-4 card-dark px-4 py-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                <span class="text-xs font-medium text-gray-300"><?= lang('App.live_location') ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-white/5">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-white font-semibold mb-1">Gg. PGA No.106</h3>
                                <p class="text-gray-400 text-sm">Lengkong, Kec. Bojongsoang, Kab. Bandung, Jawa Barat
                                    40257</p>
                            </div>
                            <div class="flex gap-3">
                                <a href="https://maps.google.com/maps?q=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung"
                                    target="_blank" class="btn-glow text-sm px-5 py-2.5 magnetic-btn">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                    <span><?= lang('App.open_maps') ?></span>
                                </a>
                                <a href="https://maps.google.com/maps?q=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung"
                                    target="_blank" class="btn-glass text-sm px-5 py-2.5 magnetic-btn">
                                    <span><?= lang('App.get_directions') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location Details -->
            <div class="space-y-6" data-aos="fade-left">
                <div class="card-dark p-6 card-glow-hover">
                    <h3 class="text-white font-semibold mb-4"><?= lang('App.full_location_title') ?></h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="icon-box-dark flex-shrink-0" style="width:36px;height:36px;">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1a1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white text-sm font-medium mb-1"><?= lang('App.full_address') ?></h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    <?= lang('App.full_location_address') ?><br>
                                    <?= lang('App.location_subdistrict') ?><br>
                                    <?= lang('App.location_district') ?><br>
                                    <?= lang('App.location_city') ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="icon-box-dark flex-shrink-0" style="width:36px;height:36px;">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white text-sm font-medium mb-1"><?= lang('App.accessibility_text') ?>
                                </h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    <?= lang('App.nearby_description.easy_access') ?><br>
                                    <?= lang('App.nearby_description.parking') ?><br>
                                    <?= lang('App.nearby_description.transport') ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="icon-box-dark flex-shrink-0" style="width:36px;height:36px;">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white text-sm font-medium mb-1">
                                    <?= lang('App.nearby_facilities_text') ?></h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    <?= lang('App.nearby_description.restaurants') ?><br>
                                    <?= lang('App.nearby_description.atm') ?><br>
                                    <?= lang('App.nearby_description.shops') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visit CTA -->
                <div class="card-dark p-6 text-center card-glow-hover">
                    <div class="icon-box-dark mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2"><?= lang('App.visit_us') ?></h3>
                    <p class="text-gray-400 text-sm mb-4"><?= lang('App.visit_desc') ?></p>
                    <a href="#contact-form" class="btn-glow text-sm px-6 py-2.5 inline-flex magnetic-btn">
                        <span><?= lang('App.schedule_visit') ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
