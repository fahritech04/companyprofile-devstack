<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<!-- Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="stat-card animate-fade-in animate-delay-1 card-shine" style="--accent-color: #10b981;">
        <p class="text-xs text-gray-500 mb-1">Total Revenue</p>
        <p class="text-2xl font-bold text-white stat-number-animate" data-count="<?= $totalRevenue ?? 0 ?>" data-prefix="Rp " data-suffix="">
            Rp 0
        </p>
    </div>
    <div class="stat-card animate-fade-in animate-delay-2 card-shine" style="--accent-color: #f59e0b;">
        <p class="text-xs text-gray-500 mb-1">Pending Verification</p>
        <p class="text-2xl font-bold text-white stat-number-animate" data-count="<?= count(array_filter($invoices, fn($i) => $i['status'] === 'pending_verification')) ?>">
            0
        </p>
    </div>
    <div class="stat-card animate-fade-in animate-delay-3 card-shine" style="--accent-color: #3b82f6;">
        <p class="text-xs text-gray-500 mb-1">Total Invoices</p>
        <p class="text-2xl font-bold text-white stat-number-animate" data-count="<?= count($invoices) ?>">0</p>
    </div>
</div>

<div class="panel animate-fade-in animate-delay-2 card-shine">
    <div class="panel-header">
        <h2 class="text-sm font-semibold text-white">All Invoices</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Invoice #</th>
                    <th>Client</th>
                    <th>Project</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($invoices)): ?>
                    <tr>
                        <td colspan="8" class="text-center py-12 text-gray-500">No invoices yet</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($invoices as $i => $inv): ?>
                        <tr class="animate-fade-in" style="animation-delay: <?= 0.04 * $i ?>s">
                            <td class="font-mono text-xs">
                                <?= esc($inv['invoice_number']) ?>
                            </td>
                            <td>
                                <?= esc(($inv['first_name'] ?? '') . ' ' . ($inv['last_name'] ?? '')) ?>
                            </td>
                            <td class="text-sm">
                                <?= esc($inv['project_name'] ?? '-') ?>
                            </td>
                            <td class="font-medium">Rp
                                <?= number_format($inv['amount'], 0, ',', '.') ?>
                            </td>
                            <td><span class="text-xs">
                                    <?= ucfirst($inv['type'] ?? '') ?>
                                </span></td>
                            <td>
                                <?php
                                $sc = ['unpaid' => 'badge-danger', 'pending_verification' => 'badge-warning', 'paid' => 'badge-success'];
                                ?>
                                <span class="badge <?= $sc[$inv['status']] ?? 'badge-info' ?>">
                                    <?= ucfirst(str_replace('_', ' ', $inv['status'])) ?>
                                </span>
                            </td>
                            <td class="text-xs text-gray-400">
                                <?= date('d M Y', strtotime($inv['created_at'])) ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/billing/' . $inv['id']) ?>" class="btn-secondary text-xs transition-all hover:shadow-lg hover:shadow-blue-500/10">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
