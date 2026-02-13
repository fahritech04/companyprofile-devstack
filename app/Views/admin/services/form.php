<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<?php
$service = $service ?? null;
$isEdit = $service !== null;
?>

<div class="max-w-3xl">
    <div class="panel p-6 lg:p-8">

        <!-- Form Header -->
        <div class="mb-8 pb-6 border-b border-white/[0.06]">
            <h2 class="text-base font-semibold text-white"><?= $isEdit ? 'Edit Service' : 'Create New Service' ?></h2>
            <p class="text-xs text-gray-500 mt-1"><?= $isEdit ? 'Update the service details below' : 'Fill in the details for the new service' ?></p>
        </div>

        <!-- Validation Errors -->
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="mb-6 p-4 rounded-xl bg-red-500/8 border border-red-500/15">
                <ul class="list-disc list-inside text-sm text-red-300 space-y-1">
                    <?php foreach (session()->getFlashdata('errors') as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= $isEdit ? base_url('admin/services/update/' . $service['id']) : base_url('admin/services/store') ?>" method="POST">
            <?= csrf_field() ?>

            <div class="space-y-6">
                <!-- Title -->
                <div>
                    <label class="form-label">Service Title <span class="text-red-400">*</span></label>
                    <input type="text" name="title" class="form-input" placeholder="e.g. Web Development"
                        value="<?= old('title', $isEdit ? $service['title'] : '') ?>" required>
                </div>

                <!-- Description -->
                <div>
                    <label class="form-label">Description <span class="text-red-400">*</span></label>
                    <textarea name="description" class="form-input" rows="4" placeholder="Describe this service..."
                        required><?= old('description', $isEdit ? $service['description'] : '') ?></textarea>
                </div>

                <!-- Icon -->
                <div>
                    <label class="form-label">Icon (SVG path data)</label>
                    <input type="text" name="icon" class="form-input" placeholder="e.g. M13 10V3L4 14h7v7l9-11h-7z"
                        value="<?= old('icon', $isEdit ? $service['icon'] : '') ?>">
                    <p class="text-[11px] text-gray-600 mt-1.5">SVG path d attribute for the service icon. Leave empty for default bolt icon.</p>
                </div>

                <!-- Features -->
                <div>
                    <label class="form-label">Features <span class="text-gray-600">(one per line)</span></label>
                    <textarea name="features" class="form-input" rows="5" placeholder="Responsive Design&#10;SEO Optimized&#10;Fast Loading Speed"><?php
                        if ($isEdit && $service['features']) {
                            $features = json_decode($service['features'], true);
                            echo old('features', implode("\n", $features ?? []));
                        } else {
                            echo old('features', '');
                        }
                    ?></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <!-- Price -->
                    <div>
                        <label class="form-label">Price</label>
                        <input type="text" name="price" class="form-input" placeholder="e.g. Rp 5.000.000"
                            value="<?= old('price', $isEdit ? $service['price'] : '') ?>">
                    </div>

                    <!-- Sort Order -->
                    <div>
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" class="form-input" placeholder="0"
                            value="<?= old('sort_order', $isEdit ? $service['sort_order'] : '0') ?>">
                    </div>

                    <!-- Active Status -->
                    <div>
                        <label class="form-label">Status</label>
                        <label class="flex items-center gap-3 mt-2.5 cursor-pointer">
                            <input type="checkbox" name="is_active" value="1"
                                <?= old('is_active', $isEdit ? $service['is_active'] : 1) ? 'checked' : '' ?>
                                class="hidden">
                            <span class="toggle-switch"></span>
                            <span class="text-sm text-gray-300">Active</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-3 mt-8 pt-6 border-t border-white/[0.06]">
                <button type="submit" class="btn-primary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span><?= $isEdit ? 'Update Service' : 'Create Service' ?></span>
                </button>
                <a href="<?= base_url('admin/services') ?>" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
