<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500"><?= count($portfolios ?? []) ?> total projects</p>
    <a href="<?= base_url('admin/portfolio/create') ?>" class="btn-primary">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span>Add Project</span>
    </a>
</div>

<div class="panel">
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th class="w-12">#</th>
                    <th>Project</th>
                    <th>Category</th>
                    <th>Client</th>
                    <th class="w-20">Featured</th>
                    <th class="w-36">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($portfolios)): ?>
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                <p class="text-sm text-gray-500">No projects yet</p>
                                <a href="<?= base_url('admin/portfolio/create') ?>"
                                    class="text-blue-400 hover:text-blue-300 text-xs font-medium mt-1 inline-block">+ Add
                                    your first project</a>
                            </div>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($portfolios as $i => $p): ?>
                        <tr>
                            <td class="text-gray-600 text-sm"><?= $i + 1 ?></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <?php if ($p['image']): ?>
                                        <img src="<?= base_url('uploads/portfolio/' . $p['image']) ?>" alt=""
                                            class="w-10 h-10 rounded-lg object-cover border border-white/[0.06] flex-shrink-0">
                                    <?php else: ?>
                                        <div
                                            class="w-10 h-10 rounded-lg bg-white/[0.03] border border-white/[0.06] flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                    <div class="min-w-0">
                                        <p class="font-medium text-white text-sm truncate"><?= esc($p['title']) ?></p>
                                        <p class="text-xs text-gray-500 truncate mt-0.5">
                                            <?= esc(mb_substr($p['description'] ?? '', 0, 50)) ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php if ($p['category']): ?>
                                    <span class="badge badge-info"><?= esc($p['category']) ?></span>
                                <?php else: ?>
                                    <span class="text-gray-600 text-sm">—</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-gray-400 text-sm"><?= esc($p['client_name'] ?: '—') ?></td>
                            <td>
                                <?php if ($p['is_featured']): ?>
                                    <span class="text-amber-400 text-lg" title="Featured">★</span>
                                <?php else: ?>
                                    <span class="text-gray-700 text-lg">☆</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="<?= base_url('admin/portfolio/edit/' . $p['id']) ?>" class="btn-secondary">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="<?= base_url('admin/portfolio/delete/' . $p['id']) ?>" method="POST"
                                        data-confirm="Delete &quot;<?= esc($p['title']) ?>&quot;?">
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