<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- About Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?= lang('App.about_title') ?></h1>
            <p class="text-xl md:text-2xl"><?= lang('App.about_description') ?></p>
        </div>
    </div>
</section>

<!-- Company History -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold mb-6">Sejarah Perusahaan</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div data-aos="fade-left">
                <div class="bg-gray-200 h-96 rounded-lg"></div> <!-- Placeholder untuk gambar -->
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Tim Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4"></div> <!-- Placeholder untuk foto -->
                <h3 class="text-xl font-bold mb-2">John Doe</h3>
                <p class="text-gray-600">CEO & Founder</p>
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4"></div>
                <h3 class="text-xl font-bold mb-2">Jane Smith</h3>
                <p class="text-gray-600">Creative Director</p>
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4"></div>
                <h3 class="text-xl font-bold mb-2">Mike Johnson</h3>
                <p class="text-gray-600">Technical Lead</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>