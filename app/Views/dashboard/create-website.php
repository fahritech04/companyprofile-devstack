<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- ═══════════════════════════════════════════════════════════════
     CREATE WEBSITE — Dark Glassmorphism Builder
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-screen flex items-center justify-center py-20 px-4 relative overflow-hidden"
    style="background: linear-gradient(135deg, #040b18 0%, #0a1628 40%, #060e1f 100%);">

    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(59,130,246,0.3) 1px, transparent 0); background-size: 40px 40px;">
        </div>
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-indigo-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    </div>

    <div class="max-w-3xl w-full space-y-8 relative z-10">
        <!-- Header -->
        <div class="text-center">
            <div class="badge-modern mb-4">
                <span class="dot"></span>
                Website Builder
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 text-gradient-blue text-3d">
                Create Your Website
            </h1>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Choose a template and start building your digital presence with DevStack's powerful website builder.
            </p>
        </div>

        <!-- Form Card -->
        <div class="glass-card shine-card rounded-2xl p-8 md:p-10 border border-white/10">
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="mb-6 p-4 rounded-xl border border-red-500/20" style="background: rgba(239,68,68,0.08);">
                    <div class="flex items-start">
                        <svg class="h-5 w-5 text-red-400 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div class="text-sm text-red-300">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <p><?= $error ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('dashboard/websites/store') ?>" method="post" class="space-y-8">
                <?= csrf_field() ?>

                <!-- Site Name -->
                <div>
                    <label for="site_name" class="block text-sm font-medium text-gray-300 mb-2">
                        Website Name
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <input id="site_name" name="site_name" type="text" required
                            class="block w-full pl-12 pr-4 py-3 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            style="background: rgba(255,255,255,0.04);"
                            placeholder="My Awesome Website"
                            value="<?= old('site_name') ?>">
                    </div>
                    <p class="mt-2 text-xs text-gray-500">This will be used as your site title and default slug.</p>
                </div>

                <!-- Template Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-3">
                        Choose a Template
                    </label>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        <?php foreach ($templates as $key => $template): ?>
                            <label class="cursor-pointer group">
                                <input type="radio" name="template" value="<?= $key ?>"
                                    class="peer sr-only"
                                    <?= old('template') === $key || (!old('template') && $key === 'default') ? 'checked' : '' ?>>
                                <div class="glass-card shine-card p-4 rounded-xl border border-white/10 text-center transition-all duration-300
                                    peer-checked:border-blue-500/50 peer-checked:bg-blue-500/10 peer-checked:shadow-lg peer-checked:shadow-blue-500/10
                                    hover:border-white/20 group-hover:-translate-y-0.5">
                                    <div class="w-10 h-10 mx-auto mb-2 rounded-lg bg-white/5 flex items-center justify-center border border-white/10
                                        peer-checked:bg-blue-500/20 peer-checked:border-blue-500/30 group-hover:bg-white/10 transition-all">
                                        <svg class="w-5 h-5 text-gray-400 peer-checked:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?= $template['icon'] ?>"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-300 peer-checked:text-white font-medium"><?= $template['name'] ?></span>
                                </div>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-2">
                    <button type="submit"
                        class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-gray-900 transition-all duration-200 transform hover:scale-[1.02] hover:shadow-lg hover:shadow-blue-500/25">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                            <svg class="h-5 w-5 text-blue-300 group-hover:text-blue-200 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </span>
                        Create Website
                    </button>
                </div>
            </form>
        </div>

        <!-- Back Link -->
        <div class="text-center">
            <a href="<?= base_url('dashboard/websites') ?>"
                class="inline-flex items-center text-sm text-gray-500 hover:text-blue-400 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to My Websites
            </a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
