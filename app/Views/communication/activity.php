<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen bg-gray-900 py-12 text-white">
    <div class="max-w-4xl mx-auto px-4">
        <a href="<?= base_url('dashboard') ?>" class="text-gray-400 hover:text-white mb-4 inline-block text-sm">&larr;
            Back to Dashboard</a>
        <h1 class="text-3xl font-bold mb-8">Activity Feed</h1>

        <div class="space-y-4">
            <?php if (empty($logs)): ?>
                <div class="text-center py-12 bg-gray-800 rounded-lg">
                    <p class="text-gray-400">No recent activity.</p>
                </div>
            <?php else: ?>
                <?php foreach ($logs as $log): ?>
                    <div class="bg-gray-800 p-4 rounded-lg flex items-start gap-4">
                        <div
                            class="h-10 w-10 bg-blue-900/50 rounded-full flex items-center justify-center flex-shrink-0 text-blue-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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