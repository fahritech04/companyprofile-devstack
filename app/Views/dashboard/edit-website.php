<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- ═══════════════════════════════════════════════════════════════
     EDIT WEBSITE — Dark Glassmorphism Builder
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-screen pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628, #060e1f);">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(59,130,246,0.3) 1px, transparent 0); background-size: 40px 40px;">
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8 reveal">
            <div>
                <div class="badge-modern mb-2">
                    <span class="dot"></span>
                    <?= ucfirst($website['template']) ?> Template
                </div>
                <h1 class="text-2xl md:text-3xl font-bold text-white text-gradient-blue text-3d">
                    <?= esc($website['site_name']) ?>
                </h1>
                <p class="text-gray-400 text-sm mt-1"><?= esc($website['slug']) ?></p>
            </div>
            <div class="flex gap-2">
                <?php if ($website['status'] !== 'live'): ?>
                    <a href="<?= base_url('api/website-builder/publish/' . $website['id']) ?>"
                        class="btn-glow-modern inline-flex items-center gap-2"
                        onclick="return confirm('Publish this website?');">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Publish
                    </a>
                <?php else: ?>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold text-emerald-300 bg-emerald-500/10 border border-emerald-500/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Live
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <!-- Editor Card -->
        <div class="glass-card shine-card rounded-2xl p-8 border border-white/10">
            <form action="<?= base_url('api/website-builder/update/' . $website['id']) ?>" method="post" class="space-y-6">
                <?= csrf_field() ?>

                <!-- Site Name -->
                <div>
                    <label for="site_name" class="block text-sm font-medium text-gray-300 mb-2">Website Name</label>
                    <input id="site_name" name="site_name" type="text"
                        class="block w-full px-4 py-3 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        style="background: rgba(255,255,255,0.04);"
                        value="<?= esc($website['site_name']) ?>">
                </div>

                <!-- Meta -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="meta_title" class="block text-sm font-medium text-gray-300 mb-2">Meta Title</label>
                        <input id="meta_title" name="meta_title" type="text"
                            class="block w-full px-4 py-3 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            style="background: rgba(255,255,255,0.04);"
                            value="<?= esc($website['meta_title'] ?? '') ?>"
                            placeholder="Site title for SEO">
                    </div>
                    <div>
                        <label for="custom_domain" class="block text-sm font-medium text-gray-300 mb-2">Custom Domain</label>
                        <input id="custom_domain" name="custom_domain" type="text"
                            class="block w-full px-4 py-3 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            style="background: rgba(255,255,255,0.04);"
                            value="<?= esc($website['custom_domain'] ?? '') ?>"
                            placeholder="www.example.com">
                    </div>
                </div>

                <!-- Meta Description -->
                <div>
                    <label for="meta_description" class="block text-sm font-medium text-gray-300 mb-2">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3"
                        class="block w-full px-4 py-3 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        style="background: rgba(255,255,255,0.04);"
                        placeholder="Brief description for SEO"><?= esc($website['meta_description'] ?? '') ?></textarea>
                </div>

                <!-- Config Preview -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Theme Colors</label>
                    <div class="glass-card p-4 rounded-xl border border-white/10">
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                            <?php foreach (($website['config']['colors'] ?? []) as $colorName => $colorValue): ?>
                                <div class="text-center">
                                    <div class="w-10 h-10 mx-auto rounded-lg border border-white/10 mb-1" style="background: <?= $colorValue ?>"></div>
                                    <span class="text-xs text-gray-500 capitalize"><?= $colorName ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Pages List -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Pages</label>
                    <div class="space-y-2">
                        <?php foreach (($website['pages'] ?? []) as $page): ?>
                            <div class="glass-card p-3 rounded-lg border border-white/10 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="w-6 h-6 rounded bg-white/5 flex items-center justify-center text-xs text-gray-500 border border-white/10">
                                        <?= $page['order'] ?>
                                    </span>
                                    <span class="text-sm text-white"><?= esc($page['name']) ?></span>
                                    <span class="text-xs text-gray-500">/<?= esc($page['slug']) ?></span>
                                </div>
                                <?php if ($page['visible']): ?>
                                    <span class="text-xs text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">Visible</span>
                                <?php else: ?>
                                    <span class="text-xs text-gray-500 bg-white/5 px-2 py-0.5 rounded border border-white/10">Hidden</span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-3 pt-4">
                    <button type="submit"
                        class="btn-glow-modern inline-flex items-center justify-center gap-2 flex-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Save Changes
                    </button>
                    <a href="<?= base_url('dashboard/websites') ?>"
                        class="btn-glass-modern inline-flex items-center justify-center gap-2 flex-1">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
