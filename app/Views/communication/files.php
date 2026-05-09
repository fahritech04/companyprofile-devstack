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
                FILES
            </div>
            <h1 class="text-3xl font-bold text-gradient-blue text-3d">Project Files</h1>
            <p class="text-gray-400 mt-2">Access shared documents and resources</p>
        </div>

        <div class="glass-card overflow-hidden card-shine animate-fade-in animate-delay-2"
            style="background: rgba(255,255,255,0.02); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.06);">
            <table class="w-full text-left">
                <thead style="background: rgba(255,255,255,0.03);">
                    <tr>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">File Name</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Size</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Uploaded</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php if (empty($files)): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                <svg class="w-12 h-12 text-gray-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p>No files uploaded yet.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($files as $i => $file): ?>
                            <tr class="animate-fade-in hover:bg-white/[0.02] transition-colors" style="animation-delay: <?= 0.05 * $i ?>s">
                                <td class="px-6 py-4 font-medium text-white">
                                    <div class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                        <?= esc($file['name']) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-400 text-sm">
                                    <?= esc($file['type']) ?>
                                </td>
                                <td class="px-6 py-4 text-gray-400 text-sm">
                                    <?= esc($file['size']) ?>
                                </td>
                                <td class="px-6 py-4 text-gray-400 text-sm">
                                    <?= date('M d, Y', strtotime($file['created_at'])) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-blue-400 hover:text-blue-300 text-sm transition-colors">Download</a>
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
