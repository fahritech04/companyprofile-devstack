<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<a href="/client/billing" class="text-sm text-gray-400 hover:text-blue-400 flex items-center gap-2 mb-6 transition-colors animate-fade-in">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Kembali ke Billing
</a>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Invoice Detail -->
    <div class="card-portal p-6 card-shine animate-fade-in animate-delay-1">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-white">
                <?= esc($invoice['invoice_number']) ?>
            </h2>
            <span class="badge-status badge-<?= $invoice['status'] ?> text-sm">
                <?= ucfirst(str_replace('_', ' ', $invoice['status'])) ?>
            </span>
        </div>

        <div class="space-y-4 mb-6">
            <div class="flex justify-between py-3 border-b border-white/5">
                <span class="text-gray-400">Project</span>
                <span class="text-white font-medium">
                    <?= esc($invoice['project_name'] ?? '-') ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/5">
                <span class="text-gray-400">Type</span>
                <span class="text-white">
                    <?= ucfirst($invoice['type']) ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/5">
                <span class="text-gray-400">Amount</span>
                <span class="text-2xl font-bold text-blue-400 glow-text">Rp
                    <?= number_format($invoice['amount'], 0, ',', '.') ?>
                </span>
            </div>
            <div class="flex justify-between py-3 border-b border-white/5">
                <span class="text-gray-400">Due Date</span>
                <span class="text-white">
                    <?= $invoice['due_date'] ? date('d M Y', strtotime($invoice['due_date'])) : '-' ?>
                </span>
            </div>
            <?php if ($invoice['paid_at']): ?>
                <div class="flex justify-between py-3 border-b border-white/5">
                    <span class="text-gray-400">Paid At</span>
                    <span class="text-green-400">
                        <?= date('d M Y H:i', strtotime($invoice['paid_at'])) ?>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Bank Transfer Info -->
        <?php if ($invoice['status'] === 'unpaid'): ?>
            <div class="bg-blue-500/5 border border-blue-500/10 rounded-xl p-4 mb-4 card-shine">
                <h4 class="text-sm font-semibold text-blue-400 mb-2">💳 Transfer ke:</h4>
                <p class="text-white font-medium">Bank BCA</p>
                <p class="text-white font-mono text-lg glow-text">1234567890</p>
                <p class="text-gray-400 text-sm">a/n DevStack Technology</p>
            </div>
        <?php endif; ?>

        <!-- Uploaded Proof -->
        <?php if ($invoice['payment_proof']): ?>
            <div class="bg-green-500/5 border border-green-500/10 rounded-xl p-4 card-shine">
                <h4 class="text-sm font-semibold text-green-400 mb-2">✅ Bukti Pembayaran</h4>
                <p class="text-sm text-gray-400">Bank:
                    <?= esc($invoice['bank_name'] ?? '-') ?>
                </p>
                <p class="text-sm text-gray-400">Atas Nama:
                    <?= esc($invoice['account_name'] ?? '-') ?>
                </p>
                <a href="<?= base_url($invoice['payment_proof']) ?>" target="_blank"
                    class="text-blue-400 text-sm hover:text-blue-300 mt-2 inline-block transition-colors">Lihat Bukti →</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Upload Payment Proof -->
    <?php if (in_array($invoice['status'], ['unpaid'])): ?>
        <div class="card-portal p-6 card-shine animate-fade-in animate-delay-2">
            <h3 class="text-lg font-semibold text-white mb-4">📤 Upload Bukti Pembayaran</h3>

            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert-error mb-4">
                    <ul class="list-disc list-inside text-sm">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li>
                                <?= esc($error) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="/client/billing/<?= $invoice['id'] ?>/upload" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="mb-4">
                    <label class="form-label">Nama Bank *</label>
                    <input type="text" name="bank_name" class="form-input" placeholder="BCA, Mandiri, BNI, dll" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Atas Nama *</label>
                    <input type="text" name="account_name" class="form-input" placeholder="Nama pemilik rekening" required>
                </div>
                <div class="mb-6">
                    <label class="form-label">Bukti Transfer *</label>
                    <input type="file" name="payment_proof" class="form-input" accept="image/*" required>
                    <p class="text-xs text-gray-600 mt-1">Format: JPG, PNG. Max 2MB</p>
                </div>
                <button type="submit" class="btn-primary w-full justify-center transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                        </path>
                    </svg>
                    Upload Bukti Bayar
                </button>
            </form>
        </div>
    <?php elseif ($invoice['status'] === 'pending_verification'): ?>
        <div class="card-portal p-6 card-shine animate-fade-in animate-delay-2">
            <div class="text-center py-8">
                <div class="w-16 h-16 rounded-full bg-yellow-500/10 flex items-center justify-center mx-auto mb-4 animate-pulse">
                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Menunggu Verifikasi</h3>
                <p class="text-sm text-gray-400">Bukti pembayaran Anda sedang diverifikasi oleh admin. Biasanya membutuhkan
                    waktu 1x24 jam.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
