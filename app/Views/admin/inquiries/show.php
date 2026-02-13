<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="max-w-3xl">
    <div class="panel p-6 lg:p-8">

        <!-- Header -->
        <div class="flex items-start justify-between mb-6 pb-6 border-b border-white/[0.06]">
            <div class="flex items-start gap-4">
                <div
                    class="w-10 h-10 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-full flex items-center justify-center ring-1 ring-blue-500/20 flex-shrink-0 mt-0.5">
                    <span class="text-sm font-bold text-blue-300">
                        <?= strtoupper(substr($inquiry['name'], 0, 1)) ?>
                    </span>
                </div>
                <div>
                    <h2 class="text-base font-bold text-white">
                        <?= esc($inquiry['name']) ?>
                    </h2>
                    <p class="text-sm text-blue-400 mt-0.5">
                        <?= esc($inquiry['email']) ?>
                    </p>
                    <?php if ($inquiry['phone']): ?>
                        <p class="text-sm text-gray-500 mt-0.5 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <?= esc($inquiry['phone']) ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-right flex-shrink-0">
                <p class="text-xs text-gray-600">
                    <?= date('d M Y, H:i', strtotime($inquiry['created_at'])) ?>
                </p>
                <span class="badge badge-success mt-2 inline-flex">Read</span>
            </div>
        </div>

        <!-- Subject -->
        <?php if ($inquiry['subject']): ?>
            <div class="mb-5">
                <p class="text-[11px] text-gray-600 uppercase tracking-wider font-medium mb-1.5">Subject</p>
                <p class="text-white font-medium text-sm"><?= esc($inquiry['subject']) ?></p>
            </div>
        <?php endif; ?>

        <!-- Message -->
        <div class="mb-8">
            <p class="text-[11px] text-gray-600 uppercase tracking-wider font-medium mb-2">Message</p>
            <div class="bg-white/[0.02] border border-white/[0.05] rounded-xl p-5">
                <p class="text-gray-300 text-sm leading-relaxed whitespace-pre-wrap"><?= esc($inquiry['message']) ?></p>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-3 pt-6 border-t border-white/[0.06]">
            <a href="mailto:<?= esc($inquiry['email']) ?>?subject=Re: <?= esc($inquiry['subject'] ?? 'Your Inquiry') ?>"
                class="btn-primary">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10l9 6 9-6M3 10v8a2 2 0 002 2h14a2 2 0 002-2v-8"></path>
                </svg>
                <span>Reply via Email</span>
            </a>
            <?php if ($inquiry['phone']): ?>
                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $inquiry['phone']) ?>" target="_blank"
                    class="btn-secondary">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                    </svg>
                    <span>WhatsApp</span>
                </a>
            <?php endif; ?>
            <a href="<?= base_url('admin/inquiries') ?>" class="btn-secondary ml-auto">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to List
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>