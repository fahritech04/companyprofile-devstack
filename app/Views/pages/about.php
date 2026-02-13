<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- About Hero Section -->
<section class="min-h-[60vh] flex items-center pt-28 pb-20 relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">
    <div class="grid-bg"></div>
    <div class="dot-grid-dark"></div>
    <div class="glow-orb glow-orb-1"></div>
    <div class="glow-orb glow-orb-2"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-8 max-w-4xl mx-auto" data-aos="fade-up">
            <div class="badge-glow inline-flex items-center text-xs">
                <span class="badge-pulse"></span>
                <?= lang('App.meet_our_team') ?>
            </div>
            <h1 class="text-gradient-blue leading-tight"><?= lang('App.about_title') ?></h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto">
                <?= lang('App.about_description') ?>
            </p>

            <!-- Achievement Stats -->
            <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto pt-6">
                <div class="card-dark px-8 py-5 text-center group">
                    <span
                        class="text-2xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform">5+</span>
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-1">
                        <?= lang('App.years_excellence') ?></p>
                </div>
                <div class="card-dark px-8 py-5 text-center group">
                    <span
                        class="text-2xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform">50+</span>
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-1">
                        <?= lang('App.projects_completed') ?></p>
                </div>
                <div class="card-dark px-8 py-5 text-center group">
                    <span
                        class="text-2xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform">100%</span>
                    <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-1">
                        <?= lang('App.client_satisfaction') ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>

<!-- Divider -->
<div class="divider-glow"></div>

<!-- Company Story Section -->
<section class="py-24 relative" style="background: #040b18;">
    <div class="absolute inset-0 dot-grid-dark opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.our_story_title') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg leading-relaxed max-w-4xl mx-auto"><?= lang('App.our_story_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-dark p-8 text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3"><?= lang('App.innovation_first_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.innovation_first_desc') ?></p>
            </div>
            <div class="card-dark p-8 text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3"><?= lang('App.expert_team_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.expert_team_desc') ?></p>
            </div>
            <div class="card-dark p-8 text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box-dark mx-auto mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3"><?= lang('App.proven_results_title') ?></h3>
                <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.proven_results_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-24 relative" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="glow-orb"
        style="width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.08),transparent 70%);bottom:10%;right:-5%;filter:blur(80px);">
    </div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-gradient-blue mb-6"><?= lang('App.vision_tomorrow_title') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg leading-relaxed max-w-4xl mx-auto"><?= lang('App.vision_tomorrow_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-start space-x-4">
                    <div class="icon-box-dark flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-2"><?= lang('App.innovation_excellence_title') ?></h3>
                        <p class="text-gray-400 text-sm"><?= lang('App.innovation_excellence_desc') ?></p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="icon-box-dark flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-2"><?= lang('App.client_centric_title') ?></h3>
                        <p class="text-gray-400 text-sm"><?= lang('App.client_centric_desc') ?></p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="icon-box-dark flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-2"><?= lang('App.global_impact_title') ?></h3>
                        <p class="text-gray-400 text-sm"><?= lang('App.global_impact_desc') ?></p>
                    </div>
                </div>
            </div>

            <div class="card-dark p-8" data-aos="fade-left">
                <h3 class="text-xl font-bold text-white mb-6"><?= lang('App.why_choose_title') ?></h3>
                <div class="space-y-4">
                    <?php $items = ['proven_track_record', 'expert_diverse_team', 'customized_solutions', 'continuous_innovation']; ?>
                    <?php foreach ($items as $item): ?>
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm"><?= lang('App.' . $item) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>