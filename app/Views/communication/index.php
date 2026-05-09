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
        <div class="mb-8 animate-fade-in">
            <div class="badge-modern mb-4">
                <span class="dot"></span>
                COMMUNICATION
            </div>
            <h1 class="text-3xl font-bold text-gradient-blue text-3d">Communication Hub</h1>
            <p class="text-gray-400 mt-2">Join project channels and collaborate with your team</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($channels as $i => $channel): ?>
                <a href="<?= base_url('channels/' . $channel['id']) ?>"
                    class="glass-card p-6 group card-shine animate-fade-in transition-all duration-300 hover:-translate-y-1 hover:border-blue-500/20"
                    style="animation-delay: <?= 0.08 * $i ?>s">
                    <div class="flex items-start justify-between mb-3">
                        <div class="icon-box-dark">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                            </svg>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-blue-400 mb-2 group-hover:text-blue-300 transition-colors">#
                        <?= esc($channel['name']) ?>
                    </h2>
                    <p class="text-gray-400 text-sm">
                        <?= esc($channel['description']) ?>
                    </p>
                    <div class="mt-4 text-xs text-gray-500 flex items-center gap-2">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Joined by many others
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <?php if (empty($channels)): ?>
            <div class="glass-card p-12 text-center card-shine animate-fade-in animate-delay-1">
                <svg class="w-16 h-16 text-gray-700 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                </svg>
                <h3 class="text-lg font-semibold text-white mb-2">No channels available yet</h3>
                <p class="text-gray-400">Channels will appear here once they are created.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
