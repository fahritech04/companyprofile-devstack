<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/orders') ?>"
    class="text-sm text-gray-400 hover:text-blue-400 inline-flex items-center gap-2 mb-6 transition-colors animate-fade-in">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back to Orders
</a>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 space-y-6">
        <!-- Order Info -->
        <div class="panel p-6 card-shine animate-fade-in animate-delay-1">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-lg font-bold text-white">
                        <?= esc($order['project_name']) ?>
                    </h2>
                    <p class="text-sm text-gray-500">
                        <?= esc($order['order_number']) ?> ·
                        <?= esc($order['package_name'] ?? 'Custom') ?>
                    </p>
                </div>
                <?php
                $statusColors = [
                    'pending' => 'badge-warning',
                    'paid' => 'badge-info',
                    'in_progress' => 'badge-info',
                    'review' => 'badge-warning',
                    'completed' => 'badge-success',
                    'cancelled' => 'badge-danger',
                ];
                ?>
                <span class="badge <?= $statusColors[$order['status']] ?? 'badge-info' ?>">
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
                <div class="h-2.5 bg-white/5 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full transition-all duration-1000 ease-out"
                        style="width: <?= $progress ?>%; box-shadow: 0 0 12px rgba(59,130,246,0.4);"></div>
                </div>
            </div>

            <!-- Brief -->
            <div class="mb-4">
                <h4 class="text-sm font-semibold text-gray-400 mb-2">Project Brief</h4>
                <p class="text-sm text-gray-300 whitespace-pre-line">
                    <?= esc($order['brief'] ?? '-') ?>
                </p>
            </div>
        </div>

        <!-- Milestones -->
        <div class="panel p-6 card-shine animate-fade-in animate-delay-2">
            <h3 class="text-base font-semibold text-white mb-4">Milestones</h3>
            <div class="space-y-3">
                <?php foreach ($milestones as $i => $ms): ?>
                    <div class="flex items-center gap-4 p-3 rounded-lg bg-white/[0.02] animate-fade-in" style="animation-delay: <?= 0.06 * $i ?>s">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">
                                <?= esc($ms['title']) ?>
                            </p>
                            <p class="text-xs text-gray-500">
                                <?= esc($ms['description'] ?? '') ?>
                            </p>
                        </div>
                        <form action="<?= base_url('admin/orders/' . $order['id'] . '/milestone') ?>" method="post"
                            class="flex items-center gap-2">
                            <?= csrf_field() ?>
                            <input type="hidden" name="milestone_id" value="<?= $ms['id'] ?>">
                            <select name="milestone_status" class="form-input text-xs py-1.5 px-2 w-32"
                                onchange="this.form.submit()">
                                <option value="pending" <?= $ms['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                <option value="in_progress" <?= $ms['status'] === 'in_progress' ? 'selected' : '' ?>>In
                                    Progress</option>
                                <option value="completed" <?= $ms['status'] === 'completed' ? 'selected' : '' ?>>Completed
                                </option>
                            </select>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Revisions -->
        <?php if (!empty($revisions)): ?>
            <div class="panel p-6 card-shine animate-fade-in animate-delay-2">
                <h3 class="text-base font-semibold text-white mb-4">Revision Requests</h3>
                <?php foreach ($revisions as $i => $rev): ?>
                    <div class="p-3 rounded-lg bg-white/[0.02] mb-3 animate-fade-in" style="animation-delay: <?= 0.06 * $i ?>s">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge <?= $rev['status'] === 'pending' ? 'badge-warning' : 'badge-success' ?>">
                                <?= ucfirst($rev['status']) ?>
                            </span>
                            <span class="text-xs text-gray-500">
                                <?= date('d M Y H:i', strtotime($rev['created_at'])) ?>
                            </span>
                        </div>
                        <p class="text-sm text-gray-300">
                            <?= esc($rev['description']) ?>
                        </p>
                        <?php if ($rev['page']): ?>
                            <p class="text-xs text-gray-500 mt-1">Page:
                                <?= esc($rev['page']) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Sidebar: Update Status -->
    <div class="space-y-6">
        <div class="panel p-6 card-shine animate-fade-in animate-delay-1">
            <h3 class="text-base font-semibold text-white mb-4">Update Order</h3>
            <form action="<?= base_url('admin/orders/' . $order['id'] . '/status') ?>" method="post">
                <?= csrf_field() ?>
                <div class="mb-4">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-input">
                        <?php foreach (['pending', 'paid', 'in_progress', 'review', 'completed', 'cancelled'] as $s): ?>
                            <option value="<?= $s ?>" <?= $order['status'] === $s ? 'selected' : '' ?>>
                                <?= ucfirst(str_replace('_', ' ', $s)) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Staging URL</label>
                    <input type="url" name="staging_url" class="form-input"
                        value="<?= esc($order['staging_url'] ?? '') ?>" placeholder="https://staging.example.com">
                </div>
                <div class="mb-4">
                    <label class="form-label">Final URL</label>
                    <input type="url" name="final_url" class="form-input" value="<?= esc($order['final_url'] ?? '') ?>"
                        placeholder="https://example.com">
                </div>
                <div class="mb-4">
                    <label class="form-label">Admin Notes</label>
                    <textarea name="admin_notes" rows="4" class="form-input"
                        placeholder="Internal notes..."><?= esc($order['admin_notes'] ?? '') ?></textarea>
                </div>
                <button type="submit" class="btn-primary w-full justify-center transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">Save Changes</button>
            </form>
        </div>

        <!-- Assets -->
        <?php if (!empty($assets)): ?>
            <div class="panel p-6 card-shine animate-fade-in animate-delay-2">
                <h3 class="text-base font-semibold text-white mb-3">Files</h3>
                <?php foreach ($assets as $asset): ?>
                    <a href="<?= base_url($asset['file_path']) ?>" target="_blank"
                        class="flex items-center gap-2 py-2 text-sm text-gray-300 hover:text-blue-400 border-b border-white/[0.03] last:border-0 transition-colors group">
                        <svg class="w-3.5 h-3.5 flex-shrink-0 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="truncate">
                            <?= esc($asset['file_name']) ?>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>
