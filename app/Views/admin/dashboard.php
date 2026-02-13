<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<!-- Stats Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5 mb-8">
    <!-- Total Services -->
    <div class="stat-card" style="--accent-color: #3b82f6">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Services</p>
                <h3 class="text-2xl lg:text-3xl font-bold text-white tracking-tight">
                    <?= $totalServices ?>
                </h3>
            </div>
            <div class="w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Total Portfolio -->
    <div class="stat-card" style="--accent-color: #8b5cf6">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Portfolio</p>
                <h3 class="text-2xl lg:text-3xl font-bold text-white tracking-tight">
                    <?= $totalPortfolios ?>
                </h3>
            </div>
            <div class="w-10 h-10 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Total Inquiries -->
    <div class="stat-card" style="--accent-color: #10b981">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Inquiries</p>
                <h3 class="text-2xl lg:text-3xl font-bold text-white tracking-tight">
                    <?= $totalInquiries ?>
                </h3>
            </div>
            <div class="w-10 h-10 bg-emerald-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Unread Inquiries -->
    <div class="stat-card" style="--accent-color: #f59e0b">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-2">Unread</p>
                <h3 class="text-2xl lg:text-3xl font-bold text-white tracking-tight">
                    <?= $unreadInquiries ?>
                </h3>
            </div>
            <div class="w-10 h-10 bg-amber-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-5 mb-8">
    <a href="<?= base_url('admin/services/create') ?>"
        class="panel p-5 group hover:border-blue-500/20 transition-all duration-300 flex items-center gap-4">
        <div
            class="w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Add Service</p>
            <p class="text-xs text-gray-500">Create a new service</p>
        </div>
    </a>
    <a href="<?= base_url('admin/portfolio/create') ?>"
        class="panel p-5 group hover:border-purple-500/20 transition-all duration-300 flex items-center gap-4">
        <div
            class="w-10 h-10 bg-purple-500/10 rounded-xl flex items-center justify-center group-hover:bg-purple-500/20 transition-colors">
            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">Add Project</p>
            <p class="text-xs text-gray-500">Add a portfolio item</p>
        </div>
    </a>
    <a href="<?= base_url('admin/inquiries') ?>"
        class="panel p-5 group hover:border-emerald-500/20 transition-all duration-300 flex items-center gap-4">
        <div
            class="w-10 h-10 bg-emerald-500/10 rounded-xl flex items-center justify-center group-hover:bg-emerald-500/20 transition-colors">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-semibold text-white">View Messages</p>
            <p class="text-xs text-gray-500">Check customer inquiries</p>
        </div>
    </a>
</div>

<!-- Recent Inquiries -->
<div class="panel">
    <div class="panel-header">
        <h2 class="text-sm font-semibold text-white">Recent Inquiries</h2>
        <a href="<?= base_url('admin/inquiries') ?>"
            class="text-xs text-blue-400 hover:text-blue-300 transition-colors font-medium">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($recentInquiries)): ?>
                    <tr>
                        <td colspan="5">
                            <div class="empty-state">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class="text-sm text-gray-500">No inquiries yet</p>
                                <p class="text-xs text-gray-600 mt-1">Messages from the contact form will appear here</p>
                            </div>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($recentInquiries as $inquiry): ?>
                        <tr class="<?= !$inquiry['is_read'] ? 'bg-blue-500/[0.02]' : '' ?>">
                            <td class="font-medium text-white"><?= esc($inquiry['name']) ?></td>
                            <td class="text-gray-400"><?= esc($inquiry['email']) ?></td>
                            <td><?= esc($inquiry['subject'] ?? '-') ?></td>
                            <td>
                                <?php if ($inquiry['is_read']): ?>
                                    <span class="badge badge-success">Read</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Unread</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-xs text-gray-500 whitespace-nowrap">
                                <?= date('d M Y', strtotime($inquiry['created_at'])) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>