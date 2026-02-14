<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<!-- Category Tabs -->
<div class="flex space-x-1 bg-white/5 rounded-xl p-1 mb-8 max-w-md">
    <?php foreach (['website' => '🌐 Website', 'mobile' => '📱 Mobile', 'consulting' => '💡 Consulting'] as $key => $label): ?>
        <button onclick="switchCategory('<?= $key ?>')" id="tab-<?= $key ?>"
            class="flex-1 py-2 px-4 rounded-lg text-sm font-medium transition-all <?= ($activeCategory === $key) ? 'bg-blue-500 text-white' : 'text-gray-400 hover:text-white' ?>">
            <?= $label ?>
        </button>
    <?php endforeach; ?>
</div>

<!-- Packages per Category -->
<?php foreach ($packages as $category => $pkgs): ?>
    <div id="category-<?= $category ?>" class="category-section <?= ($activeCategory !== $category) ? 'hidden' : '' ?>">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <?php foreach ($pkgs as $pkg): ?>
                <div class="card-portal p-6 flex flex-col hover:border-blue-500/30 transition-all relative overflow-hidden">
                    <?php if ($pkg['sort_order'] === 2): ?>
                        <div
                            class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            Popular</div>
                    <?php endif; ?>

                    <div class="mb-4">
                        <h3 class="text-lg font-bold text-white mb-1">
                            <?= esc($pkg['name']) ?>
                        </h3>
                        <p class="text-sm text-gray-400">
                            <?= esc($pkg['description']) ?>
                        </p>
                    </div>

                    <!-- Price -->
                    <div class="mb-6">
                        <?php if ($pkg['is_custom_price']): ?>
                            <p class="text-2xl font-bold text-blue-400">Custom</p>
                            <p class="text-xs text-gray-500">Harga sesuai kebutuhan</p>
                        <?php else: ?>
                            <p class="text-2xl font-bold text-white">Rp
                                <?= number_format($pkg['price'], 0, ',', '.') ?>
                            </p>
                            <p class="text-xs text-gray-500">Estimasi
                                <?= $pkg['duration_days'] ?> hari
                            </p>
                        <?php endif; ?>
                    </div>

                    <!-- Features -->
                    <ul class="space-y-2 mb-6 flex-1">
                        <?php
                        $features = json_decode($pkg['features'], true) ?? [];
                        foreach ($features as $feature): ?>
                            <li class="flex items-start gap-2 text-sm text-gray-300">
                                <svg class="w-4 h-4 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <?= esc($feature) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- Select Button -->
                    <button
                        onclick="selectPackage(<?= $pkg['id'] ?>, '<?= esc($pkg['name']) ?>', <?= $pkg['price'] ?>, <?= $pkg['is_custom_price'] ?>)"
                        class="<?= $pkg['sort_order'] === 2 ? 'btn-primary' : 'btn-outline' ?> w-full justify-center">
                        <?= $pkg['is_custom_price'] ? 'Konsultasi Dulu' : 'Pilih Paket' ?>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

<!-- Order Form (hidden until package selected) -->
<div id="orderForm" class="card-portal p-8 hidden">
    <h2 class="text-xl font-bold text-white mb-6">📝 Form Order</h2>
    <p class="text-sm text-gray-400 mb-6">Paket dipilih: <span id="selectedPackageName"
            class="text-blue-400 font-semibold"></span></p>

    <form action="/client/orders/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="package_id" id="packageIdInput">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="form-label">Nama Project *</label>
                <input type="text" name="project_name" class="form-input" placeholder="Contoh: Company Profile PT ABC"
                    required value="<?= old('project_name') ?>">
            </div>
            <div>
                <label class="form-label">Target Audience</label>
                <input type="text" name="target_audience" class="form-input" placeholder="Contoh: Anak muda, UMKM, dll"
                    value="<?= old('target_audience') ?>">
            </div>
        </div>

        <div class="mb-6">
            <label class="form-label">Brief / Deskripsi Kebutuhan *</label>
            <textarea name="brief" rows="6" class="form-input"
                placeholder="Jelaskan kebutuhan project Anda secara detail: fitur yang diinginkan, warna favorit, referensi website, dll..."
                required><?= old('brief') ?></textarea>
        </div>

        <div class="mb-6">
            <label class="form-label">URL Referensi</label>
            <textarea name="reference_urls" rows="3" class="form-input"
                placeholder="Masukkan link website referensi (satu per baris)..."><?= old('reference_urls') ?></textarea>
        </div>

        <div class="mb-8">
            <label class="form-label">Upload Assets (Logo, Gambar, Dokumen)</label>
            <div class="border-2 border-dashed border-blue-500/20 rounded-xl p-6 text-center">
                <svg class="w-10 h-10 text-gray-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
                <input type="file" name="assets[]" multiple class="hidden" id="fileInput">
                <p class="text-sm text-gray-400 mb-2">Drag & drop atau <button type="button"
                        onclick="document.getElementById('fileInput').click()"
                        class="text-blue-400 hover:text-blue-300">pilih file</button></p>
                <p class="text-xs text-gray-600">Max 5MB per file. PNG, JPG, PDF, DOC</p>
            </div>
        </div>

        <!-- Validation Errors -->
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert-error mb-6">
                <ul class="list-disc list-inside">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li>
                            <?= esc($error) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn-primary">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Submit Order
            </button>
            <button type="button" onclick="document.getElementById('orderForm').classList.add('hidden')"
                class="btn-outline">Batal</button>
        </div>
    </form>
</div>

<script>
    function switchCategory(cat) {
        document.querySelectorAll('.category-section').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('[id^=tab-]').forEach(el => {
            el.classList.remove('bg-blue-500', 'text-white');
            el.classList.add('text-gray-400');
        });
        document.getElementById('category-' + cat).classList.remove('hidden');
        document.getElementById('tab-' + cat).classList.add('bg-blue-500', 'text-white');
        document.getElementById('tab-' + cat).classList.remove('text-gray-400');
    }

    function selectPackage(id, name, price, isCustom) {
        document.getElementById('packageIdInput').value = id;
        document.getElementById('selectedPackageName').textContent = name + (isCustom ? '' : ' — Rp ' + price.toLocaleString('id-ID'));
        document.getElementById('orderForm').classList.remove('hidden');
        document.getElementById('orderForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
</script>

<?= $this->endSection() ?>