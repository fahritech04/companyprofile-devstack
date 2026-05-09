<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen py-12 text-white relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">

    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-indigo-500 rounded-full opacity-5 blur-3xl"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <a href="<?= base_url('dashboard') ?>" class="text-gray-400 hover:text-blue-400 mb-4 inline-block text-sm transition-colors animate-fade-in">&larr;
            Back to Dashboard</a>
        <div class="mb-8 animate-fade-in animate-delay-1">
            <div class="badge-modern mb-4">
                <span class="dot"></span>
                ACTIVITY
            </div>
            <h1 class="text-3xl font-bold text-gradient-blue text-3d">Activity Feed</h1>
            <p class="text-gray-400 mt-2">See recent updates and notifications</p>
        </div>

        <div class="space-y-4">
            <?php if (empty($logs)): ?>
                <div class="glass-card p-12 text-center card-shine animate-fade-in animate-delay-2">
                    <svg class="w-12 h-12 text-gray-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-400">No recent activity.</p>
                </div>
            <?php else: ?>
                <?php foreach ($logs as $i => $log): ?>
                    <div class="glass-card p-4 flex items-start gap-4 card-shine animate-fade-in" style="animation-delay: <?= 0.06 * $i ?>s">
                        <div
                            class="h-10 w-10 rounded-full flex items-center justify-center flex-shrink-0" style="background: rgba(59,130,246,0.1);">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-200">
                                <?= esc($log['activity']) ?>
                            </p>
                            <span class="text-xs text-gray-500 mt-1 block">
                                <?= date('M d, Y h:i A', strtotime($log['created_at'])) ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
