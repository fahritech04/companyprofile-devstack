<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- ═══════════════════════════════════════════════════════════════
     WEBSITE BUILDER DASHBOARD — List View
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-screen pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628, #060e1f);">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(59,130,246,0.3) 1px, transparent 0); background-size: 40px 40px;">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8 reveal">
            <div>
                <h1 class="text-2xl font-bold text-white">My Websites</h1>
                <p class="text-gray-400 text-sm">Manage all your websites in one place</p>
            </div>
            <a href="<?= base_url('dashboard/websites/create') ?>"
                class="btn-glow-modern inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Create New
            </a>
        </div>

        <?php if (!empty($websites)): ?>
            <div class="glass-card shine-card rounded-xl overflow-hidden border border-white/10">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-white/10">
                                <th class="text-left text-xs font-semibold text-gray-400 uppercase tracking-wider px-6 py-4">Website</th>
                                <th class="text-left text-xs font-semibold text-gray-400 uppercase tracking-wider px-6 py-4">Template</th>
                                <th class="text-left text-xs font-semibold text-gray-400 uppercase tracking-wider px-6 py-4">Status</th>
                                <th class="text-left text-xs font-semibold text-gray-400 uppercase tracking-wider px-6 py-4">Created</th>
                                <th class="text-right text-xs font-semibold text-gray-400 uppercase tracking-wider px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <?php foreach ($websites as $website): ?>
                                <tr class="group hover:bg-white/[0.02] transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg flex items-center justify-center text-white font-bold text-sm"
                                                style="background: <?= $website['config']['colors']['primary'] ?? '#3b82f6' ?>;">
                                                <?= strtoupper(substr($website['site_name'], 0, 1)) ?>
                                            </div>
                                            <div>
                                                <p class="text-white font-medium text-sm"><?= esc($website['site_name']) ?></p>
                                                <p class="text-gray-500 text-xs"><?= esc($website['slug']) ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-gray-400 text-sm capitalize"><?= $website['template'] ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php
                                        $statusBadges = [
                                            'draft'     => 'bg-gray-500/10 text-gray-400 border-gray-500/20',
                                            'building'  => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
                                            'live'      => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
                                            'suspended' => 'bg-red-500/10 text-red-400 border-red-500/20',
                                            'archived'  => 'bg-gray-500/10 text-gray-400 border-gray-500/20',
                                        ];
                                        $badgeClass = $statusBadges[$website['status']] ?? $statusBadges['draft'];
                                        ?>
                                        <span class="inline-flex px-2.5 py-1 rounded-lg text-xs font-medium border <?= $badgeClass ?>">
                                            <?= ucfirst($website['status']) ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-400 text-sm">
                                        <?= date('M d, Y', strtotime($website['created_at'])) ?>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="<?= base_url('dashboard/websites/editor/' . $website['id']) ?>"
                                                class="w-8 h-8 rounded-lg bg-white/5 hover:bg-emerald-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-emerald-500/30"
                                                title="Visual editor">
                                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                            </a>
                                            <?php if (!empty($website['status']) && in_array($website['status'], ['live', 'building'])): ?>
                                                <a href="<?= base_url('s/' . $website['slug']) ?>" target="_blank"
                                                    class="w-8 h-8 rounded-lg bg-white/5 hover:bg-indigo-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-indigo-500/30"
                                                    title="View live">
                                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                    </svg>
                                                </a>
                                            <?php endif; ?>
                                            <a href="<?= base_url('dashboard/websites/edit/' . $website['id']) ?>"
                                                class="w-8 h-8 rounded-lg bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30"
                                                title="Settings">
                                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else: ?>
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
