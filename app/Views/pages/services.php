<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Services Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?= lang('App.services_title') ?></h1>
            <p class="text-xl md:text-2xl">Solusi Terbaik untuk Bisnis Anda</p>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-digital-tachograph"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_1_title') ?></h3>
                <p class="text-gray-600 mb-4"><?= lang('App.service_1_desc') ?></p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Website Development</li>
                    <li>• Mobile Applications</li>
                    <li>• Custom Software Solutions</li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_2_title') ?></h3>
                <p class="text-gray-600 mb-4"><?= lang('App.service_2_desc') ?></p>
                <ul class="text-gray-600 space-y-2">
                    <li>• UI/UX Design</li>
                    <li>• Brand Identity</li>
                    <li>• Marketing Materials</li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-xl font-bold mb-4"><?= lang('App.service_3_title') ?></h3>
                <p class="text-gray-600 mb-4"><?= lang('App.service_3_desc') ?></p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Technical Consulting</li>
                    <li>• System Architecture</li>
                    <li>• Technology Strategy</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Our Process</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                <h3 class="text-xl font-bold mb-2">Discovery</h3>
                <p class="text-gray-600">Understanding your needs and requirements</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                <h3 class="text-xl font-bold mb-2">Planning</h3>
                <p class="text-gray-600">Creating a strategic roadmap</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                <h3 class="text-xl font-bold mb-2">Execution</h3>
                <p class="text-gray-600">Implementing the solution</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                <h3 class="text-xl font-bold mb-2">Support</h3>
                <p class="text-gray-600">Ongoing maintenance and updates</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-8">Contact us today to discuss your project</p>
            <a href="<?= base_url('contact') ?>" class="bg-white text-blue-600 px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>