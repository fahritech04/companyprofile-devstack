<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="panel animate-fade-in card-shine">
    <div class="panel-header">
        <h2 class="text-sm font-semibold text-white">All Orders</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Client</th>
                    <th>Project</th>
                    <th>Package</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($orders)): ?>
                    <tr>
                        <td colspan="8" class="text-center py-12 text-gray-500">No orders yet</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($orders as $i => $order): ?>
                        <tr class="animate-fade-in" style="animation-delay: <?= 0.04 * $i ?>s">
                            <td class="font-mono text-xs">
                                <?= esc($order['order_number']) ?>
                            </td>
                            <td>
                                <?= esc(($order['first_name'] ?? '') . ' ' . ($order['last_name'] ?? '')) ?>
                            </td>
                            <td class="font-medium text-white">
                                <?= esc($order['project_name']) ?>
                            </td>
                            <td class="text-xs">
                                <?= esc($order['package_name'] ?? 'Custom') ?>
                            </td>
                            <td class="font-medium">Rp
                                <?= number_format($order['agreed_price'] ?? 0, 0, ',', '.') ?>
                            </td>
                            <td>
                                <?php
                                $statusColors = [
                                    'pending' => 'badge-warning',
                                    'paid' => 'badge-info',
                                    'in_progress' => 'badge-info',
                                    'review' => 'badge-warning',
                                    'completed' => 'badge-success',
                                    'cancelled' => 'badge-danger',
                                ];
                                $badgeClass = $statusColors[$order['status']] ?? 'badge-info';
                                ?>
                                <span class="badge <?= $badgeClass ?>">
                                    <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                </span>
                            </td>
                            <td>
                                <div class="w-16">
                                    <div class="h-1.5 bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-blue-500 rounded-full transition-all duration-1000 ease-out" style="width: <?= $order['progress'] ?>%; box-shadow: 0 0 8px rgba(59,130,246,0.4);">
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-gray-500 text-center mt-0.5">
                                        <?= $order['progress'] ?>%
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/orders/' . $order['id']) ?>" class="btn-secondary text-xs transition-all hover:shadow-lg hover:shadow-blue-500/10">
                                    View
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
