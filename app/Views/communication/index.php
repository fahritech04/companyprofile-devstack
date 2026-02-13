<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen bg-gray-900 py-12 text-white">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-8">Communication Hub</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($channels as $channel): ?>
                <a href="<?= base_url('channels/' . $channel['id']) ?>"
                    class="block bg-gray-800 p-6 rounded-lg hover:bg-gray-700 transition">
                    <h2 class="text-xl font-semibold text-blue-400 mb-2">#
                        <?= esc($channel['name']) ?>
                    </h2>
                    <p class="text-gray-400 text-sm">
                        <?= esc($channel['description']) ?>
                    </p>
                    <div class="mt-4 text-xs text-gray-500">
                        Joined by many others
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <?php if (empty($channels)): ?>
            <div class="text-center py-12 bg-gray-800 rounded-lg">
                <p class="text-gray-400">No channels available yet.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>