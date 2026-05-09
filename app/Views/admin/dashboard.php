<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<!-- SaaS Stats Row -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5 mb-8">
    <!-- Total Revenue -->
    <div class="stat-card animate-fade-in animate-delay-1 card-shine" style="--accent-color: #10b981">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Revenue</p>
                <p class="text-xl font-bold text-white leading-none stat-number-animate" data-count="<?= $totalRevenue ?? 0 ?>" data-prefix="Rp " data-suffix="">
                    Rp 0
                </p>
            </div>
            <svg class="w-8 h-8 text-emerald-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Active Orders -->
    <div class="stat-card animate-fade-in animate-delay-2 card-shine" style="--accent-color: #3b82f6">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Active Orders</p>
                <p class="text-2xl font-bold text-white leading-none stat-number-animate" data-count="<?= $activeOrders ?? 0 ?>">0</p>
                <p class="text-[10px] text-gray-600 mt-1"><?= $totalOrders ?? 0 ?> total</p>
            </div>
            <svg class="w-8 h-8 text-blue-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
        </div>
    </div>

    <!-- Pending Invoices -->
    <div class="stat-card animate-fade-in animate-delay-3 card-shine" style="--accent-color: #f59e0b">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Pending Payment</p>
                <p class="text-2xl font-bold text-white leading-none stat-number-animate" data-count="<?= $pendingInvoices ?? 0 ?>">0</p>
                <p class="text-[10px] text-gray-600 mt-1">Need verification</p>
            </div>
            <svg class="w-8 h-8 text-amber-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
            </svg>
        </div>
    </div>

    <!-- Open Tickets -->
    <div class="stat-card animate-fade-in animate-delay-4 card-shine" style="--accent-color: #ef4444">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Open Tickets</p>
                <p class="text-2xl font-bold text-white leading-none stat-number-animate" data-count="<?= $pendingTickets ?? 0 ?>">0</p>
                <p class="text-[10px] text-gray-600 mt-1">Awaiting reply</p>
            </div>
            <svg class="w-8 h-8 text-red-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                </path>
            </svg>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 lg:gap-5 mb-8">
    <a href="<?= base_url('admin/orders') ?>"
        class="panel p-5 group hover:border-blue-500/20 transition-all duration-300 flex items-center gap-4 card-shine animate-fade-in animate-delay-1">
        <div
            class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Manage Orders</p>
            <p class="text-xs text-gray-500"><?= $totalOrders ?> total orders</p>
        </div>
    </a>

    <a href="<?= base_url('admin/billing') ?>"
        class="panel p-5 group hover:border-emerald-500/20 transition-all duration-300 flex items-center gap-4 card-shine animate-fade-in animate-delay-2">
        <div
            class="w-10 h-10 rounded-xl bg-emerald-500/10 flex items-center justify-center group-hover:bg-emerald-500/20 transition-colors">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                </path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Billing</p>
            <p class="text-xs text-gray-500"><?= $pendingInvoices ?> pending verification</p>
        </div>
    </a>

    <a href="<?= base_url('admin/tickets') ?>"
        class="panel p-5 group hover:border-red-500/20 transition-all duration-300 flex items-center gap-4 card-shine animate-fade-in animate-delay-3">
        <div
            class="w-10 h-10 rounded-xl bg-red-500/10 flex items-center justify-center group-hover:bg-red-500/20 transition-colors">
            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                </path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Support Tickets</p>
            <p class="text-xs text-gray-500"><?= $pendingTickets ?> open tickets</p>
        </div>
    </a>

    <a href="<?= base_url('admin/portfolio') ?>"
        class="panel p-5 group hover:border-purple-500/20 transition-all duration-300 flex items-center gap-4 card-shine animate-fade-in animate-delay-4">
        <div
            class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center group-hover:bg-purple-500/20 transition-colors">
            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Portfolio</p>
            <p class="text-xs text-gray-500"><?= $totalPortfolios ?> projects</p>
        </div>
    </a>
</div>

<!-- Recent Orders -->
<div class="panel animate-fade-in animate-delay-2">
    <div class="panel-header">
        <h2 class="text-sm font-semibold text-white">Recent Orders</h2>
        <a href="<?= base_url('admin/orders') ?>"
            class="text-xs text-blue-400 hover:text-blue-300 transition-colors font-medium">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Project</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($recentOrders)): ?>
                    <tr>
                        <td colspan="5">
                            <div class="empty-state">
                                <p class="text-sm text-gray-500">No orders yet</p>
                                <p class="text-xs text-gray-600 mt-1">Orders from clients will appear here</p>
                            </div>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($recentOrders as $order): ?>
                        <tr>
                            <td class="text-sm"><?= esc(($order['first_name'] ?? '') . ' ' . ($order['last_name'] ?? '')) ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/orders/' . $order['id']) ?>"
                                    class="text-white hover:text-blue-400 text-sm font-medium"><?= esc($order['project_name']) ?></a>
                            </td>
                            <td>
                                <?php
                                $sc = ['pending' => 'badge-warning', 'paid' => 'badge-info', 'in_progress' => 'badge-info', 'review' => 'badge-warning', 'completed' => 'badge-success', 'cancelled' => 'badge-danger'];
                                ?>
                                <span
                                    class="badge <?= $sc[$order['status']] ?? 'badge-info' ?>"><?= ucfirst(str_replace('_', ' ', $order['status'])) ?></span>
                            </td>
                            <td>
                                <div class="w-16">
                                    <div class="h-1.5 bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-blue-500 rounded-full transition-all duration-1000 ease-out" style="width: <?= $order['progress'] ?>%; box-shadow: 0 0 8px rgba(59,130,246,0.4);">
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-gray-500 text-center mt-0.5"><?= $order['progress'] ?>%</p>
                                </div>
                            </td>
                            <td class="text-xs text-gray-500"><?= date('d M Y', strtotime($order['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>