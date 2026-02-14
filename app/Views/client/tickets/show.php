<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<a href="/client/tickets" class="text-sm text-gray-400 hover:text-blue-400 flex items-center gap-2 mb-6">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Kembali ke Tickets
</a>

<!-- Ticket Header -->
<div class="card-portal p-6 mb-6">
    <div class="flex items-center justify-between mb-2">
        <h2 class="text-xl font-bold text-white">
            <?= esc($ticket['subject']) ?>
        </h2>
        <div class="flex items-center gap-2">
            <span class="badge-status badge-<?= $ticket['priority'] ?>">
                <?= ucfirst($ticket['priority']) ?>
            </span>
            <span class="badge-status badge-<?= $ticket['status'] ?>">
                <?= ucfirst($ticket['status']) ?>
            </span>
        </div>
    </div>
    <p class="text-sm text-gray-500">
        <?= esc($ticket['ticket_number']) ?> · Created
        <?= date('d M Y H:i', strtotime($ticket['created_at'])) ?>
    </p>
</div>

<!-- Conversation -->
<div class="space-y-4 mb-8">
    <?php foreach ($replies as $reply): ?>
        <div class="card-portal p-5 <?= ($reply['role'] ?? 'user') === 'admin' ? 'border-blue-500/20 ml-4' : 'mr-4' ?>">
            <div class="flex items-center gap-3 mb-3">
                <div
                    class="w-8 h-8 rounded-full <?= ($reply['role'] ?? 'user') === 'admin' ? 'bg-blue-500/20' : 'bg-purple-500/20' ?> flex items-center justify-center">
                    <span
                        class="text-xs font-bold <?= ($reply['role'] ?? 'user') === 'admin' ? 'text-blue-400' : 'text-purple-400' ?>">
                        <?= strtoupper(substr($reply['first_name'] ?? 'U', 0, 1)) ?>
                    </span>
                </div>
                <div>
                    <p class="text-sm font-medium text-white">
                        <?= esc(($reply['first_name'] ?? '') . ' ' . ($reply['last_name'] ?? '')) ?>
                    </p>
                    <p class="text-xs text-gray-500">
                        <?= ($reply['role'] ?? 'user') === 'admin' ? '⭐ Admin' : 'Client' ?> ·
                        <?= date('d M Y H:i', strtotime($reply['created_at'])) ?>
                    </p>
                </div>
            </div>
            <p class="text-sm text-gray-300 whitespace-pre-line">
                <?= esc($reply['message']) ?>
            </p>
            <?php if (!empty($reply['attachment'])): ?>
                <a href="<?= base_url($reply['attachment']) ?>" target="_blank"
                    class="inline-flex items-center gap-2 mt-3 text-sm text-blue-400 hover:text-blue-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                        </path>
                    </svg>
                    Attachment
                </a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<!-- Reply Form -->
<?php if ($ticket['status'] !== 'closed'): ?>
    <div class="card-portal p-6">
        <h3 class="text-base font-semibold text-white mb-4">💬 Reply</h3>
        <form action="/client/tickets/<?= $ticket['id'] ?>/reply" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-4">
                <textarea name="message" rows="4" class="form-input" placeholder="Tulis balasan..." required></textarea>
            </div>
            <div class="flex items-center gap-4">
                <button type="submit" class="btn-primary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    Kirim
                </button>
                <label class="text-sm text-gray-400 cursor-pointer hover:text-blue-400">
                    <input type="file" name="attachment" class="hidden">
                    📎 Attach file
                </label>
            </div>
        </form>
    </div>
<?php else: ?>
    <div class="card-portal p-6 text-center">
        <p class="text-gray-400">Ticket ini sudah ditutup.</p>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>