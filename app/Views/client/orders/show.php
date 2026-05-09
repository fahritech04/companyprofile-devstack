<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<div class="mb-4 animate-fade-in">
    <a href="/client/orders" class="text-sm text-gray-400 hover:text-blue-400 flex items-center gap-2 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali ke Orders
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Info -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Order Info Card -->
        <div class="card-portal p-6 card-shine animate-fade-in animate-delay-1">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-xl font-bold text-white">
                        <?= esc($order['project_name']) ?>
                    </h2>
                    <p class="text-sm text-gray-500">
                        <?= esc($order['order_number']) ?> ·
                        <?= esc($order['package_name'] ?? 'Custom') ?> (
                        <?= ucfirst($order['category'] ?? '') ?>)
                    </p>
                </div>
                <span class="badge-status badge-<?= $order['status'] ?> text-sm">
                    <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                </span>
            </div>

            <!-- Progress -->
            <div class="mb-6">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-400">Progress</span>
                    <span class="text-sm font-semibold text-blue-400 glow-text">
                        <?= $progress ?>%
                    </span>
                </div>
                <div class="progress-bar" style="height: 10px;">
                    <div class="progress-bar-fill transition-all duration-1000 ease-out" style="width: <?= $progress ?>%"></div>
                </div>
            </div>

            <!-- Details Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="card-shine p-3 rounded-lg bg-white/[0.02]">
                    <p class="text-xs text-gray-500 mb-1">Harga</p>
                    <p class="text-sm font-semibold text-white">Rp
                        <?= number_format($order['agreed_price'], 0, ',', '.') ?>
                    </p>
                </div>
                <div class="card-shine p-3 rounded-lg bg-white/[0.02]">
                    <p class="text-xs text-gray-500 mb-1">Deadline</p>
                    <p class="text-sm font-semibold text-white">
                        <?= $order['deadline'] ? date('d M Y', strtotime($order['deadline'])) : '-' ?>
                    </p>
                </div>
                <div class="card-shine p-3 rounded-lg bg-white/[0.02]">
                    <p class="text-xs text-gray-500 mb-1">Mulai</p>
                    <p class="text-sm font-semibold text-white">
                        <?= $order['started_at'] ? date('d M Y', strtotime($order['started_at'])) : 'Belum dimulai' ?>
                    </p>
                </div>
                <div class="card-shine p-3 rounded-lg bg-white/[0.02]">
                    <p class="text-xs text-gray-500 mb-1">Max Revisi</p>
                    <p class="text-sm font-semibold text-white">
                        <?= $order['max_revisions'] ?? '3' ?>x
                    </p>
                </div>
            </div>
        </div>

        <!-- Brief -->
        <div class="card-portal p-6 card-shine animate-fade-in animate-delay-2">
            <h3 class="text-lg font-semibold text-white mb-3">📝 Project Brief</h3>
            <p class="text-gray-300 text-sm whitespace-pre-line">
                <?= esc($order['brief'] ?? '-') ?>
            </p>
            <?php if (!empty($order['reference_urls'])): ?>
                <div class="mt-4 pt-4 border-t border-white/5">
                    <p class="text-xs text-gray-500 mb-2">Referensi:</p>
                    <p class="text-sm text-blue-400 whitespace-pre-line">
                        <?= esc($order['reference_urls']) ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Milestones / Timeline -->
        <div class="card-portal p-6 card-shine animate-fade-in animate-delay-2">
            <h3 class="text-lg font-semibold text-white mb-4">🎯 Milestones</h3>
            <div class="space-y-4">
                <?php foreach ($milestones as $i => $ms): ?>
                    <div class="flex items-start gap-4 animate-fade-in" style="animation-delay: <?= 0.1 * $i ?>s">
                        <div class="flex-shrink-0 mt-0.5">
                            <?php if ($ms['status'] === 'completed'): ?>
                                <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            <?php elseif ($ms['status'] === 'in_progress'): ?>
                                <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center animate-pulse">
                                    <div class="w-3 h-3 rounded-full bg-blue-400"></div>
                                </div>
                            <?php else: ?>
                                <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center">
                                    <div class="w-3 h-3 rounded-full bg-gray-600"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-semibold <?= $ms['status'] === 'completed' ? 'text-green-400' : ($ms['status'] === 'in_progress' ? 'text-blue-400' : 'text-gray-400') ?>">
                                <?= esc($ms['title']) ?>
                            </h4>
                            <p class="text-xs text-gray-500">
                                <?= esc($ms['description'] ?? '') ?>
                            </p>
                            <?php if ($ms['completed_at']): ?>
                                <p class="text-xs text-gray-600 mt-1">✓
                                    <?= date('d M Y', strtotime($ms['completed_at'])) ?>
                                </p>
                            <?php elseif ($ms['due_date']): ?>
                                <p class="text-xs text-gray-600 mt-1">Target:
                                    <?= date('d M Y', strtotime($ms['due_date'])) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Preview URL -->
        <?php if (!empty($order['staging_url'])): ?>
            <div class="card-portal p-6 card-shine animate-fade-in animate-delay-3">
                <h3 class="text-lg font-semibold text-white mb-3">🔗 Preview</h3>
                <a href="<?= esc($order['staging_url']) ?>" target="_blank"
                    class="btn-outline inline-flex items-center gap-2 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Lihat Preview
                </a>
            </div>
        <?php endif; ?>

        <!-- Request Revision (only in review/in_progress status) -->
        <?php if (in_array($order['status'], ['review', 'in_progress'])): ?>
            <div class="card-portal p-6 card-shine animate-fade-in animate-delay-3">
                <h3 class="text-lg font-semibold text-white mb-4">🔄 Request Revisi</h3>
                <form action="/client/revisions/<?= $order['id'] ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="mb-4">
                        <label class="form-label">Halaman yang perlu direvisi</label>
                        <input type="text" name="page" class="form-input" placeholder="Contoh: Halaman Home, About Us">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Deskripsi Revisi *</label>
                        <textarea name="description" rows="4" class="form-input"
                            placeholder="Jelaskan perubahan yang diinginkan..." required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Lampiran (opsional)</label>
                        <input type="file" name="attachment" class="form-input">
                    </div>
                    <button type="submit" class="btn-primary transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">Kirim Revisi</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Invoices -->
        <div class="card-portal p-5 card-shine animate-fade-in animate-delay-2">
            <h3 class="text-base font-semibold text-white mb-3">💳 Invoices</h3>
            <?php if (empty($invoices)): ?>
                <p class="text-sm text-gray-400">Belum ada invoice</p>
            <?php else: ?>
                <?php foreach ($invoices as $inv): ?>
                    <a href="/client/billing/<?= $inv['id'] ?>"
                        class="flex items-center justify-between py-3 border-b border-white/5 last:border-0 hover:text-blue-400 transition-colors group">
                        <div>
                            <p class="text-sm font-medium text-white group-hover:text-blue-400 transition-colors">
                                <?= esc($inv['invoice_number']) ?>
                            </p>
                            <p class="text-xs text-gray-500">
                                <?= ucfirst($inv['type']) ?>
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-white">Rp
                                <?= number_format($inv['amount'], 0, ',', '.') ?>
                            </p>
                            <span class="badge-status badge-<?= $inv['status'] ?> text-xs">
                                <?= ucfirst(str_replace('_', ' ', $inv['status'])) ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Assets -->
        <div class="card-portal p-5 card-shine animate-fade-in animate-delay-3">
            <h3 class="text-base font-semibold text-white mb-3">📁 Assets</h3>
            <?php if (empty($assets)): ?>
                <p class="text-sm text-gray-400">Belum ada file</p>
            <?php else: ?>
                <?php foreach ($assets as $asset): ?>
                    <div class="flex items-center gap-3 py-2 border-b border-white/5 last:border-0 group">
                        <svg class="w-4 h-4 text-gray-500 flex-shrink-0 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                        <a href="<?= base_url($asset['file_path']) ?>" target="_blank"
                            class="text-sm text-gray-300 hover:text-blue-400 truncate transition-colors">
                            <?= esc($asset['file_name']) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
