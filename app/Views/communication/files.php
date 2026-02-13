<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen bg-gray-900 py-12 text-white">
    <div class="max-w-4xl mx-auto px-4">
        <a href="<?= base_url('dashboard') ?>" class="text-gray-400 hover:text-white mb-4 inline-block text-sm">&larr;
            Back to Dashboard</a>
        <h1 class="text-3xl font-bold mb-8">Project Files</h1>

        <div class="bg-gray-800 rounded-lg overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-700 text-gray-400 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">File Name</th>
                        <th class="px-6 py-4">Type</th>
                        <th class="px-6 py-4">Size</th>
                        <th class="px-6 py-4">Uploaded</th>
                        <th class="px-6 py-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <?php if (empty($files)): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                No files uploaded yet.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($files as $file): ?>
                            <tr class="hover:bg-gray-700/50 transition">
                                <td class="px-6 py-4 font-medium">
                                    <?= esc($file['name']) ?>
                                </td>
                                <td class="px-6 py-4 text-gray-400">
                                    <?= esc($file['type']) ?>
                                </td>
                                <td class="px-6 py-4 text-gray-400">
                                    <?= esc($file['size']) ?>
                                </td>
                                <td class="px-6 py-4 text-gray-400">
                                    <?= date('M d, Y', strtotime($file['created_at'])) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-blue-400 hover:text-blue-300 text-sm">Download</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>