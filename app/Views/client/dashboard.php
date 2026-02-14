<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="stat-card">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                    </path>
                </svg>
            </div>
            <span class="text-xs text-gray-500">Total</span>
        </div>
        <p class="text-3xl font-bold text-white">
            <?= $totalProjects ?>
        </p>
        <p class="text-sm text-gray-400 mt-1">Total Projects</p>
    </div>
    <div class="stat-card">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-xl bg-yellow-500/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="text-xs text-gray-500">In Progress</span>
        </div>
        <p class="text-3xl font-bold text-white">
            <?= $activeProjects ?>
        </p>
        <p class="text-sm text-gray-400 mt-1">Active Projects</p>
    </div>
    <div class="stat-card">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-xl bg-green-500/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="text-xs text-gray-500">Done</span>
        </div>
        <p class="text-3xl font-bold text-white">
            <?= $completedProjects ?>
        </p>
        <p class="text-sm text-gray-400 mt-1">Completed</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Active Projects -->
    <div class="lg:col-span-2 space-y-4">
        <div class="flex items-center justify-between mb-2">
            <h2 class="text-lg font-semibold text-white">Active Projects</h2>
            <a href="/client/orders" class="text-sm text-blue-400 hover:text-blue-300">View All →</a>
        </div>

        <?php if (empty($orders)): ?>
            <div class="card-portal p-8 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                    </path>
                </svg>
                <p class="text-gray-400 mb-4">Belum ada project. Yuk order sekarang!</p>
                <a href="/client/orders/create" class="btn-primary inline-flex">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Order Sekarang
                </a>
            </div>
        <?php else: ?>
            <?php foreach (array_slice($orders, 0, 5) as $order): ?>
                <a href="/client/orders/<?= $order['id'] ?>"
                    class="card-portal p-5 block hover:border-blue-500/30 transition-all group">
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <h3 class="font-semibold text-white group-hover:text-blue-400 transition-colors">
                                <?= esc($order['project_name']) ?>
                            </h3>
                            <p class="text-xs text-gray-500">
                                <?= esc($order['order_number']) ?> ·
                                <?= esc($order['package_name'] ?? 'Custom') ?>
                            </p>
                        </div>
                        <span class="badge-status badge-<?= $order['status'] ?>">
                            <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex-1 mr-4">
                            <div class="progress-bar">
                                <div class="progress-bar-fill" style="width: <?= $order['progress'] ?>%"></div>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">
                            <?= $order['progress'] ?>%
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Sidebar: Invoices & Tickets -->
    <div class="space-y-6">
        <!-- Pending Invoices -->
        <div>
            <h2 class="text-lg font-semibold text-white mb-3">Unpaid Invoices</h2>
            <?php if (empty($unpaidInvoices)): ?>
                <div class="card-portal p-5 text-center">
                    <p class="text-sm text-gray-400">Tidak ada invoice pending</p>
                </div>
            <?php else: ?>
                <?php foreach ($unpaidInvoices as $inv): ?>
                    <a href="/client/billing/<?= $inv['id'] ?>"
                        class="card-portal p-4 block mb-3 hover:border-blue-500/30 transition-all">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-sm font-medium text-white">
                                <?= esc($inv['invoice_number']) ?>
                            </span>
                            <span class="badge-status badge-<?= $inv['status'] ?>">
                                <?= ucfirst(str_replace('_', ' ', $inv['status'])) ?>
                            </span>
                        </div>
                        <p class="text-sm text-gray-400">
                            <?= esc($inv['project_name'] ?? '') ?>
                        </p>
                        <p class="text-blue-400 font-bold mt-1">Rp
                            <?= number_format($inv['amount'], 0, ',', '.') ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Recent Tickets -->
        <div>
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-lg font-semibold text-white">Support</h2>
                <a href="/client/tickets/create" class="text-sm text-blue-400 hover:text-blue-300">+ New</a>
            </div>
            <?php if (empty($openTickets)): ?>
                <div class="card-portal p-5 text-center">
                    <p class="text-sm text-gray-400">Tidak ada ticket aktif</p>
                </div>
            <?php else: ?>
                <?php foreach (array_slice($openTickets, 0, 3) as $ticket): ?>
                    <a href="/client/tickets/<?= $ticket['id'] ?>"
                        class="card-portal p-4 block mb-3 hover:border-blue-500/30 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-white truncate">
                                <?= esc($ticket['subject']) ?>
                            </span>
                            <span class="badge-status badge-<?= $ticket['status'] ?> ml-2">
                                <?= ucfirst($ticket['status']) ?>
                            </span>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">
                            <?= esc($ticket['ticket_number']) ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>