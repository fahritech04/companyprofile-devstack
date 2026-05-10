<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- ═══════════════════════════════════════════════════════════════
     WEBSITE BUILDER DASHBOARD — Dark Glassmorphism
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-screen pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628, #060e1f);">

    <!-- Background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(59,130,246,0.3) 1px, transparent 0); background-size: 40px 40px;">
        </div>
        <div class="absolute top-1/4 -right-32 w-96 h-96 bg-blue-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute bottom-1/4 -left-32 w-96 h-96 bg-indigo-500 rounded-full opacity-5 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16 reveal">
            <div class="badge-modern mb-4">
                <span class="dot"></span>
                Website Builder
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 text-gradient-blue text-3d">
                My Websites
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Manage, build, and publish your websites from one powerful dashboard.
            </p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-12 stagger-children">
            <div class="glass-card shine-card p-6 text-center stat-glow">
                <div class="text-3xl font-bold text-blue-400 glow-text stat-number-animate" data-count="<?= $totalWebsites ?? 0 ?>">
                    <?= $totalWebsites ?? 0 ?>
                </div>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">Total Websites</p>
            </div>
            <div class="glass-card shine-card p-6 text-center stat-glow">
                <div class="text-3xl font-bold text-emerald-400 glow-text stat-number-animate" data-count="<?= $liveWebsites ?? 0 ?>">
                    <?= $liveWebsites ?? 0 ?>
                </div>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">Live</p>
            </div>
            <div class="glass-card shine-card p-6 text-center stat-glow">
                <div class="text-3xl font-bold text-amber-400 glow-text stat-number-animate" data-count="<?= $draftWebsites ?? 0 ?>">
                    <?= $draftWebsites ?? 0 ?>
                </div>
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">Draft</p>
            </div>
        </div>

        <!-- Action Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8">
            <h2 class="text-xl font-bold text-white">Your Websites</h2>
            <a href="<?= base_url('dashboard/websites/create') ?>"
                class="btn-glow-modern inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Create New Website
            </a>
        </div>

        <!-- Websites Grid -->
        <?php if (!empty($websites)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children">
                <?php foreach ($websites as $website): ?>
                    <div class="glass-card shine-card rounded-xl overflow-hidden group hover:-translate-y-1 transition-all duration-300">
                        <!-- Preview Area -->
                        <div class="h-40 relative overflow-hidden" style="background: <?= $website['config']['colors']['bg'] ?? '#040b18' ?>;">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-12 h-12 mx-auto rounded-xl flex items-center justify-center mb-2"
                                        style="background: <?= $website['config']['colors']['primary'] ?? '#3b82f6' ?>;">
                                        <span class="text-white font-bold text-lg">
                                            <?= strtoupper(substr($website['site_name'], 0, 1)) ?>
                                        </span>
                                    </div>
                                    <span class="text-xs text-white/50"><?= $website['template'] ?></span>
                                </div>
                            </div>
                            <!-- Status Badge -->
                            <div class="absolute top-3 right-3">
                                <?php
                                $statusColors = [
                                    'draft'     => 'bg-gray-500/20 text-gray-400 border-gray-500/30',
                                    'building'  => 'bg-blue-500/20 text-blue-400 border-blue-500/30',
                                    'live'      => 'bg-emerald-500/20 text-emerald-400 border-emerald-500/30',
                                    'suspended' => 'bg-red-500/20 text-red-400 border-red-500/30',
                                    'archived'  => 'bg-gray-500/20 text-gray-400 border-gray-500/30',
                                ];
                                $statusColor = $statusColors[$website['status']] ?? $statusColors['draft'];
                                ?>
                                <span class="px-2 py-1 rounded-lg text-xs font-medium border <?= $statusColor ?>">
                                    <?= ucfirst($website['status']) ?>
                                </span>
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-white mb-1"><?= esc($website['site_name']) ?></h3>
                            <p class="text-sm text-gray-500 mb-4"><?= esc($website['slug']) ?></p>

                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">
                                    <?= date('M d, Y', strtotime($website['created_at'])) ?>
                                </span>
                                <div class="flex gap-2">
                                    <a href="<?= base_url('dashboard/websites/edit/' . $website['id']) ?>"
                                        class="w-8 h-8 rounded-lg bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30"
                                        title="Edit">
                                        <svg class="w-4 h-4 text-gray-400 hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <?php if ($website['status'] === 'draft' || $website['status'] === 'building'): ?>
                                        <a href="<?= base_url('api/website-builder/publish/' . $website['id']) ?>"
                                            class="w-8 h-8 rounded-lg bg-white/5 hover:bg-emerald-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-emerald-500/30"
                                            title="Publish"
                                            onclick="return confirm('Publish this website?');">
                                            <svg class="w-4 h-4 text-gray-400 hover:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="glass-card shine-card rounded-2xl p-12 text-center max-w-lg mx-auto">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center mb-6 border border-white/10">
                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">No Websites Yet</h3>
                <p class="text-gray-400 text-sm mb-6">Create your first website and start building your digital presence.</p>
                <a href="<?= base_url('dashboard/websites/create') ?>" class="btn-glow-modern inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Create Website
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
