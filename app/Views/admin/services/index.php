<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500"><?= count($services ?? []) ?> total services</p>
    <a href="<?= base_url('admin/services/create') ?>" class="btn-primary">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span>Add Service</span>
    </a>
</div>

<div class="panel">
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th class="w-12">#</th>
                    <th>Service</th>
                    <th>Price</th>
                    <th class="w-20">Order</th>
                    <th class="w-24">Status</th>
                    <th class="w-36">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($services)): ?>
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <p class="text-sm text-gray-500">No services yet</p>
                                <a href="<?= base_url('admin/services/create') ?>"
                                    class="text-blue-400 hover:text-blue-300 text-xs font-medium mt-1 inline-block">+ Create
                                    your first service</a>
                            </div>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($services as $i => $service): ?>
                        <tr>
                            <td class="text-gray-600 text-sm"><?= $i + 1 ?></td>
                            <td>
                                <div>
                                    <p class="font-medium text-white text-sm"><?= esc($service['title']) ?></p>
                                    <p class="text-xs text-gray-500 mt-0.5 line-clamp-1">
                                        <?= esc(mb_substr($service['description'] ?? '', 0, 60)) ?>...
                                    </p>
                                </div>
                            </td>
                            <td class="text-sm"><?= esc($service['price'] ?: '—') ?></td>
                            <td class="text-gray-500 text-sm"><?= $service['sort_order'] ?></td>
                            <td>
                                <?php if ($service['is_active']): ?>
                                    <span class="badge badge-success">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        Active
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-danger">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                                        Inactive
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="<?= base_url('admin/services/edit/' . $service['id']) ?>" class="btn-secondary">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="<?= base_url('admin/services/delete/' . $service['id']) ?>" method="POST"
                                        data-confirm="Delete &quot;<?= esc($service['title']) ?>&quot;? This cannot be undone.">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn-danger">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>