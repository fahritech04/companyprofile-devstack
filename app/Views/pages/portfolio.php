<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Portfolio Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?= lang('App.portfolio') ?></h1>
            <p class="text-xl md:text-2xl">Karya-karya Terbaik Kami</p>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">All</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300">Web Design</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300">Mobile App</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300">Branding</button>
        </div>

        <!-- Portfolio Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up">
                <div class="bg-gray-200 h-64"></div> <!-- Placeholder for project image -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">E-Commerce Website</h3>
                        <p class="mb-4">Website Development</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gray-200 h-64"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Mobile Banking App</h3>
                        <p class="mb-4">Mobile Application</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gray-200 h-64"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Brand Identity Design</h3>
                        <p class="mb-4">Branding</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up">
                <div class="bg-gray-200 h-64"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Educational Platform</h3>
                        <p class="mb-4">Web Application</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gray-200 h-64"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Restaurant App</h3>
                        <p class="mb-4">Mobile Application</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gray-200 h-64"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Corporate Branding</h3>
                        <p class="mb-4">Branding</p>
                        <a href="#" class="text-blue-400 hover:text-blue-300">View Project →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Punya Project yang Ingin Didiskusikan?</h2>
            <p class="text-xl mb-8">Mari bicara tentang ide Anda</p>
            <a href="<?= base_url('contact') ?>" class="bg-white text-blue-600 px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>