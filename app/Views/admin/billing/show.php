<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/billing') ?>"
    class="text-sm text-gray-400 hover:text-blue-400 inline-flex items-center gap-2 mb-6">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back to Billing
</a>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Invoice Details -->
    <div class="panel p-6">
        <h2 class="text-lg font-bold text-white mb-6">
            <?= esc($invoice['invoice_number']) ?>
        </h2>
        <div class="space-y-3">
            <div class="flex justify-between py-3 border-b border-white/[0.04]">
                <span class="text-gray-400 text-sm">Client</span>
                <span class="text-white text-sm">
                    <?= esc(($invoice['first_name'] ?? '') . ' ' . ($invoice['last_name'] ?? '')) ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/[0.04]">
                <span class="text-gray-400 text-sm">Email</span>
                <span class="text-white text-sm">
                    <?= esc($invoice['user_email'] ?? '') ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/[0.04]">
                <span class="text-gray-400 text-sm">Project</span>
                <span class="text-white text-sm">
                    <?= esc($invoice['project_name'] ?? '-') ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/[0.04]">
                <span class="text-gray-400 text-sm">Amount</span>
                <span class="text-xl font-bold text-blue-400">Rp
                    <?= number_format($invoice['amount'], 0, ',', '.') ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/[0.04]">
                <span class="text-gray-400 text-sm">Status</span>
                <?php
                $sc = ['unpaid' => 'badge-danger', 'pending_verification' => 'badge-warning', 'paid' => 'badge-success'];
                ?>
                <span class="badge <?= $sc[$invoice['status']] ?? 'badge-info' ?>">
                    <?= ucfirst(str_replace('_', ' ', $invoice['status'])) ?>
                </span>
            </div>
            <?php if ($invoice['bank_name']): ?>
                <div class="flex justify-between py-3 border-b border-white/[0.04]">
                    <span class="text-gray-400 text-sm">Bank</span>
                    <span class="text-white text-sm">
                        <?= esc($invoice['bank_name']) ?>
                    </span>
                </div>
            <?php endif; ?>
            <?php if ($invoice['account_name']): ?>
                <div class="flex justify-between py-3 border-b border-white/[0.04]">
                    <span class="text-gray-400 text-sm">Account Name</span>
                    <span class="text-white text-sm">
                        <?= esc($invoice['account_name']) ?>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($invoice['payment_proof']): ?>
            <div class="mt-6 p-4 bg-white/[0.02] rounded-xl">
                <h4 class="text-sm font-semibold text-white mb-3">Payment Proof</h4>
                <a href="<?= base_url($invoice['payment_proof']) ?>" target="_blank">
                    <img src="<?= base_url($invoice['payment_proof']) ?>" alt="Payment Proof"
                        class="rounded-lg max-h-64 w-auto">
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Verify Actions -->
    <?php if ($invoice['status'] === 'pending_verification'): ?>
        <div class="space-y-4">
            <div class="panel p-6">
                <h3 class="text-base font-semibold text-white mb-4">⚡ Verify Payment</h3>
                <form action="<?= base_url('admin/billing/' . $invoice['id'] . '/verify') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="action" value="approve">
                    <button type="submit" class="btn-primary w-full justify-center mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Approve Payment
                    </button>
                </form>
                <form action="<?= base_url('admin/billing/' . $invoice['id'] . '/verify') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="action" value="reject">
                    <div class="mb-3">
                        <label class="form-label">Reject Reason</label>
                        <textarea name="reject_reason" rows="3" class="form-input"
                            placeholder="Alasan penolakan..."></textarea>
                    </div>
                    <button type="submit" class="btn-danger w-full justify-center">
                        Reject
                    </button>
                </form>
            </div>
        </div>
    <?php elseif ($invoice['status'] === 'paid'): ?>
        <div class="panel p-6 text-center">
            <div class="w-16 h-16 rounded-full bg-green-500/10 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-white mb-2">Payment Verified</h3>
            <p class="text-sm text-gray-400">Paid at:
                <?= date('d M Y H:i', strtotime($invoice['paid_at'])) ?>
            </p>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>