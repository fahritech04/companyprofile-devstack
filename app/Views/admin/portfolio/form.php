<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<?php
$portfolio = $portfolio ?? null;
$isEdit = $portfolio !== null;
?>

<div class="max-w-3xl">
    <div class="panel p-6 lg:p-8">

        <!-- Form Header -->
        <div class="mb-8 pb-6 border-b border-white/[0.06]">
            <h2 class="text-base font-semibold text-white"><?= $isEdit ? 'Edit Project' : 'Add New Project' ?></h2>
            <p class="text-xs text-gray-500 mt-1"><?= $isEdit ? 'Update the project details below' : 'Fill in the details for the new project' ?></p>
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

        <form action="<?= $isEdit ? base_url('admin/portfolio/update/' . $portfolio['id']) : base_url('admin/portfolio/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="space-y-6">
                <!-- Title -->
                <div>
                    <label class="form-label">Project Title <span class="text-red-400">*</span></label>
                    <input type="text" name="title" class="form-input" placeholder="e.g. E-Commerce Platform"
                        value="<?= old('title', $isEdit ? $portfolio['title'] : '') ?>" required>
                </div>

                <!-- Description -->
                <div>
                    <label class="form-label">Description <span class="text-red-400">*</span></label>
                    <textarea name="description" class="form-input" rows="4" placeholder="Describe this project..."
                        required><?= old('description', $isEdit ? $portfolio['description'] : '') ?></textarea>
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="form-label">Project Image</label>
                    <?php if ($isEdit && $portfolio['image']): ?>
                        <div class="mb-3 inline-block">
                            <img src="<?= base_url('uploads/portfolio/' . $portfolio['image']) ?>" alt=""
                                class="w-40 h-28 rounded-xl object-cover border border-white/[0.06]">
                            <p class="text-[11px] text-gray-600 mt-1.5">Current image — upload new to replace</p>
                        </div>
                    <?php endif; ?>
                    <input type="file" name="image" class="form-input text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-500/10 file:text-blue-400 hover:file:bg-blue-500/20 file:cursor-pointer" accept="image/*">
                    <p class="text-[11px] text-gray-600 mt-1.5">JPG, PNG, or WebP. Max 2MB.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Category -->
                    <div>
                        <label class="form-label">Category</label>
                        <input type="text" name="category" class="form-input" placeholder="e.g. Web, Mobile, Design"
                            value="<?= old('category', $isEdit ? $portfolio['category'] : '') ?>">
                    </div>

                    <!-- Client Name -->
                    <div>
                        <label class="form-label">Client Name</label>
                        <input type="text" name="client_name" class="form-input" placeholder="e.g. PT ABC"
                            value="<?= old('client_name', $isEdit ? $portfolio['client_name'] : '') ?>">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <!-- Demo URL -->
                    <div>
                        <label class="form-label">Demo URL</label>
                        <input type="url" name="demo_url" class="form-input" placeholder="https://..."
                            value="<?= old('demo_url', $isEdit ? $portfolio['demo_url'] : '') ?>">
                    </div>

                    <!-- Sort Order -->
                    <div>
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" class="form-input" placeholder="0"
                            value="<?= old('sort_order', $isEdit ? $portfolio['sort_order'] : '0') ?>">
                    </div>

                    <!-- Featured -->
                    <div>
                        <label class="form-label">Featured</label>
                        <label class="flex items-center gap-3 mt-2.5 cursor-pointer">
                            <input type="checkbox" name="is_featured" value="1"
                                <?= old('is_featured', $isEdit ? $portfolio['is_featured'] : 0) ? 'checked' : '' ?>
                                class="hidden">
                            <span class="toggle-switch"></span>
                            <span class="text-sm text-gray-300">Mark as Featured</span>
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
                    <span><?= $isEdit ? 'Update Project' : 'Create Project' ?></span>
                </button>
                <a href="<?= base_url('admin/portfolio') ?>" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
