<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/tickets') ?>"
    class="text-sm text-gray-400 hover:text-blue-400 inline-flex items-center gap-2 mb-6 transition-colors animate-fade-in">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back to Tickets
</a>

<!-- Ticket Header -->
<div class="panel p-6 mb-6 card-shine animate-fade-in animate-delay-1">
    <div class="flex items-center justify-between mb-2">
        <h2 class="text-lg font-bold text-white">
            <?= esc($ticket['subject']) ?>
        </h2>
        <div class="flex items-center gap-2">
            <?php $pc = ['low' => 'badge-info', 'medium' => 'badge-warning', 'high' => 'badge-danger']; ?>
            <span class="badge <?= $pc[$ticket['priority']] ?? 'badge-info' ?>">
                <?= ucfirst($ticket['priority']) ?>
            </span>
            <?php $sc = ['open' => 'badge-warning', 'replied' => 'badge-info', 'closed' => 'badge-success']; ?>
            <span class="badge <?= $sc[$ticket['status']] ?? 'badge-info' ?>">
                <?= ucfirst($ticket['status']) ?>
            </span>
        </div>
    </div>
    <p class="text-sm text-gray-500">
        <?= esc($ticket['ticket_number']) ?> ·
        <?= date('d M Y H:i', strtotime($ticket['created_at'])) ?>
    </p>
</div>

<!-- Conversation -->
<div class="space-y-4 mb-6">
    <?php foreach ($replies as $i => $reply): ?>
        <div class="panel p-5 <?= ($reply['role'] ?? 'user') === 'admin' ? 'border-blue-500/20 ml-8' : 'mr-8' ?> card-shine animate-fade-in"
             style="animation-delay: <?= 0.08 * $i ?>s">
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
        </div>
    <?php endforeach; ?>
</div>

<!-- Admin Actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 animate-fade-in animate-delay-2">
    <!-- Reply Form -->
    <div class="lg:col-span-2 panel p-6 card-shine">
        <h3 class="text-base font-semibold text-white mb-4">Reply</h3>
        <form action="<?= base_url('admin/tickets/' . $ticket['id'] . '/reply') ?>" method="post"
            enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-4">
                <textarea name="message" rows="4" class="form-input" placeholder="Write your reply..."
                    required></textarea>
            </div>
            <div class="flex items-center gap-4">
                <button type="submit" class="btn-primary transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">Send Reply</button>
                <label class="text-sm text-gray-400 cursor-pointer hover:text-blue-400 transition-colors">
                    <input type="file" name="attachment" class="hidden">
                    📎 Attach file
                </label>
            </div>
        </form>
    </div>

    <!-- Close Ticket -->
    <?php if ($ticket['status'] !== 'closed'): ?>
        <div class="panel p-6 card-shine">
            <h3 class="text-base font-semibold text-white mb-4">Actions</h3>
            <form action="<?= base_url('admin/tickets/' . $ticket['id'] . '/close') ?>" method="post">
                <?= csrf_field() ?>
                <button type="submit" class="btn-danger w-full justify-center transition-all duration-300 hover:shadow-lg hover:shadow-red-500/25 hover:-translate-y-0.5"
                    onclick="return confirm('Close this ticket?')">
                    Close Ticket
                </button>
            </form>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
