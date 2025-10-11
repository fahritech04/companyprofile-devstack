<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background dengan overlay gradient -->
    <div class="absolute inset-0 z-0">
        <!-- Primary gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-white via-blue-100 to-blue-200"></div>
        
        <!-- Secondary decorative gradients -->
        <div class="absolute top-0 right-0 w-1/2 h-1/2 bg-gradient-to-b from-blue-100 to-transparent opacity-60"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-gradient-to-t from-blue-50 to-transparent opacity-60"></div>
        
        <!-- Pattern Background with adjusted color -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%230066ff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\');"></div>
    </div>

    <!-- Animated shapes with adjusted colors -->
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="absolute -left-10 top-10 w-40 h-40 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
        <div class="absolute -right-10 bottom-10 w-40 h-40 bg-sky-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute left-1/2 bottom-10 w-40 h-40 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 py-32 text-center" data-aos="fade-up">
        <div class="space-y-8">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-600/90 backdrop-blur-lg border border-blue-400 mb-4">
                <span class="text-sm text-blue-900 font-medium">✨ <?= lang('App.hero_subtitle') ?></span>
            </div>
            
            <!-- Heading -->
            <h1 class="text-5xl md:text-7xl font-bold text-blue-900 leading-tight tracking-tight">
                <?= lang('App.hero_title') ?>
            </h1>
            
            <!-- Description -->
            <p class="max-w-2xl mx-auto text-xl md:text-2xl text-blue-800">
                Kami membantu bisnis Anda berkembang dengan solusi digital yang inovatif
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="#about" class="px-8 py-3 bg-blue-600 text-white rounded-full font-medium hover:bg-blue-700 transform hover:-translate-y-0.5 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <?= lang('App.learn_more') ?>
                </a>
                <a href="<?= base_url('contact') ?>" class="px-8 py-3 bg-white border-2 border-blue-600 text-blue-600 rounded-full font-medium hover:bg-blue-50 transform hover:-translate-y-0.5 transition-all duration-300">
                    Hubungi Kami
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Add animation keyframes to style.css -->
<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="bg-gray-200 h-96 rounded-lg"></div> <!-- Placeholder for image -->
            </div>
            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold mb-6"><?= lang('App.about_title') ?></h2>
                <p class="text-gray-600 mb-6"><?= lang('App.about_description') ?></p>
                <a href="<?= base_url('about') ?>" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">
                    <?= lang('App.learn_more') ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12"><?= lang('App.services_title') ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-digital-tachograph"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_1_title') ?></h3>
                <p class="text-gray-600"><?= lang('App.service_1_desc') ?></p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_2_title') ?></h3>
                <p class="text-gray-600"><?= lang('App.service_2_desc') ?></p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_3_title') ?></h3>
                <p class="text-gray-600"><?= lang('App.service_3_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12"><?= lang('App.contact_title') ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div data-aos="fade-right">
                <form class="space-y-6">
                    <div>
                        <input type="text" placeholder="Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <textarea placeholder="Message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition duration-300">
                        <?= lang('App.send_message') ?>
                    </button>
                </form>
            </div>
            <div data-aos="fade-left">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2"><?= lang('App.contact_address') ?></h3>
                        <p class="text-gray-600">123 Business Street, City, Country</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2"><?= lang('App.contact_email') ?></h3>
                        <p class="text-gray-600">info@company.com</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2"><?= lang('App.contact_phone') ?></h3>
                        <p class="text-gray-600">+1 234 567 890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>