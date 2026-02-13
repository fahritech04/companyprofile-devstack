<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="panel">
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th class="w-24">Status</th>
                    <th class="w-36">Date</th>
                    <th class="w-36">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($inquiries)): ?>
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
                    <?php foreach ($inquiries as $inquiry): ?>
                        <tr class="<?= !$inquiry['is_read'] ? 'bg-blue-500/[0.02]' : '' ?>">
                            <td>
                                <div class="flex items-center gap-2.5">
                                    <?php if (!$inquiry['is_read']): ?>
                                        <div class="w-2 h-2 bg-blue-400 rounded-full flex-shrink-0 animate-pulse"></div>
                                    <?php endif; ?>
                                    <div>
                                        <p class="font-medium text-white text-sm"><?= esc($inquiry['name']) ?></p>
                                        <p class="text-xs text-gray-500"><?= esc($inquiry['email']) ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-sm"><?= esc($inquiry['subject'] ?: '—') ?></td>
                            <td>
                                <?php if ($inquiry['is_read']): ?>
                                    <span class="badge badge-success">Read</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Unread</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-xs text-gray-500 whitespace-nowrap">
                                <?= date('d M Y, H:i', strtotime($inquiry['created_at'])) ?>
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="<?= base_url('admin/inquiries/' . $inquiry['id']) ?>" class="btn-secondary">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        View
                                    </a>
                                    <form action="<?= base_url('admin/inquiries/delete/' . $inquiry['id']) ?>" method="POST"
                                        data-confirm="Delete this inquiry from <?= esc($inquiry['name']) ?>?">
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