<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Contact Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?= lang('App.contact_title') ?></h1>
            <p class="text-xl md:text-2xl">Kami Siap Membantu Anda</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-right">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        <?= lang('App.send_message') ?>
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div data-aos="fade-left">
                <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
                    <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-blue-600 text-xl mt-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-1"><?= lang('App.contact_address') ?></h3>
                                <p class="text-gray-600">123 Business Street<br>City, Country 12345</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-xl mt-1">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-1"><?= lang('App.contact_phone') ?></h3>
                                <p class="text-gray-600">+1 234 567 890</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-xl mt-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-1"><?= lang('App.contact_email') ?></h3>
                                <p class="text-gray-600">info@company.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Ikuti Kami</h2>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600 text-2xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-400 text-2xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-pink-600 text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-800 text-2xl">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Google Maps Embed with Satellite View -->
            <div class="h-96 w-full">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.70649255784986!2d107.63274538807497!3d-6.974360799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae1cb7b259%3A0x9beefbbb608cd10d!2sGg.%20PGA%20No.106%2C%20Lengkong%2C%20Kec.%20Bojongsoang%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040257!5e1!3m2!1sid!2sid!4v1760206567152!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <!-- Map Actions -->
            <div class="p-4 bg-white border-t border-gray-100 flex justify-between items-center">
                <div class="text-gray-600">
                    <span class="font-semibold">Gg. PGA No.106</span>
                    <p class="text-sm">Lengkong, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40257</p>
                </div>
                <a href="https://maps.google.com/maps?q=Gg.+PGA+No.106,+Lengkong,+Kec.+Bojongsoang,+Kabupaten+Bandung" 
                   target="_blank" 
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Buka di Google Maps
                </a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>