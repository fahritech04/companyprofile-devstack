<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<!-- Order Filters -->
<div class="flex items-center gap-3 mb-6 overflow-x-auto pb-2 animate-fade-in">
    <a href="/client/orders"
        class="badge-status <?= !isset($_GET['status']) ? 'bg-blue-500/20 text-blue-400' : 'bg-white/5 text-gray-400 hover:text-white' ?> px-4 py-2 whitespace-nowrap transition-all hover:shadow-lg hover:shadow-blue-500/10">All</a>
    <?php foreach (['pending', 'paid', 'in_progress', 'review', 'completed'] as $s): ?>
        <a href="/client/orders?status=<?= $s ?>" class="badge-status badge-<?= $s ?> px-4 py-2 whitespace-nowrap transition-all hover:shadow-lg hover:shadow-blue-500/10">
            <?= ucfirst(str_replace('_', ' ', $s)) ?>
        </a>
    <?php endforeach; ?>
</div>

<?php if (empty($orders)): ?>
    <div class="card-portal p-12 text-center card-shine animate-fade-in animate-delay-2">
        <svg class="w-16 h-16 text-gray-700 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
            </path>
        </svg>
        <h3 class="text-lg font-semibold text-white mb-2">Belum Ada Order</h3>
        <p class="text-gray-400 mb-6">Mulai perjalanan digital Anda dengan memilih layanan kami.</p>
        <a href="/client/orders/create" class="btn-primary inline-flex transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">Order Sekarang</a>
    </div>
<?php else: ?>
    <div class="space-y-4">
        <?php foreach ($orders as $i => $order): ?>
            <a href="/client/orders/<?= $order['id'] ?>"
                class="card-portal p-5 block hover:border-blue-500/30 transition-all group card-shine animate-fade-in"
                style="animation-delay: <?= 0.08 * $i ?>s">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-xs text-gray-500 font-mono">
                                <?= esc($order['order_number']) ?>
                            </span>
                            <span class="badge-status badge-<?= $order['status'] ?>">
                                <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                            </span>
                            <?php if (!empty($order['category'])): ?>
                                <span class="text-xs text-gray-600 bg-white/5 px-2 py-0.5 rounded-md">
                                    <?= ucfirst($order['category']) ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <h3 class="text-base font-semibold text-white group-hover:text-blue-400 transition-colors">
                            <?= esc($order['project_name']) ?>
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            <?= esc($order['package_name'] ?? 'Custom Package') ?>
                        </p>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="text-right">
                            <p class="text-sm font-semibold text-white">Rp
                                <?= number_format($order['agreed_price'], 0, ',', '.') ?>
                            </p>
                            <?php if ($order['deadline']): ?>
                                <p class="text-xs text-gray-500 mt-1">Deadline:
                                    <?= date('d M Y', strtotime($order['deadline'])) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="w-20">
                            <div class="progress-bar">
                                <div class="progress-bar-fill transition-all duration-1000 ease-out" style="width: <?= $order['progress'] ?>%"></div>
                            </div>
                            <p class="text-xs text-gray-500 text-center mt-1">
                                <?= $order['progress'] ?>%
                            </p>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-400 transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
