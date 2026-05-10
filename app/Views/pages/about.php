<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- ═══════════════════════════════════════════════════════════════
     ABOUT HERO — 3D Particle + Text Reveal
     ═══════════════════════════════════════════════════════════════ -->
<section class="min-h-[70vh] flex items-center pt-20 md:pt-28 pb-16 md:pb-20 relative overflow-hidden hero-section"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">

    <!-- Modern Hero Background -->
    <div class="hero-bg-modern">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="hero-grid-overlay"></div>
    </div>

    <!-- Canvas Particle Network -->
    <canvas id="particle-network-about" class="absolute inset-0 w-full h-full opacity-20"></canvas>

    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="text-center space-y-8 max-w-4xl mx-auto">
            <div class="badge-modern animate-fade-in">
                <span class="dot"></span>
                <?= lang('App.meet_our_team') ?>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-7xl text-gradient-blue leading-tight hero-text-reveal text-3d">
                <?= lang('App.about_title') ?>
            </h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto scramble-text">
                <?= lang('App.about_description') ?>
            </p>

            <!-- Achievement Stats with Counter -->
            <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto pt-6 stagger-children">
                <div class="glass-card px-8 py-6 text-center group shine-card stat-glow tilt-card">
                    <div class="tilt-card-glow"></div>
                    <div class="tilt-card-inner relative z-10">
                        <span class="text-3xl md:text-4xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform glow-text stat-number-animate" data-count="5" data-suffix="+">0</span>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">
                            <?= lang('App.years_excellence') ?>
                        </p>
                    </div>
                </div>
                <div class="glass-card px-8 py-6 text-center group shine-card stat-glow tilt-card">
                    <div class="tilt-card-glow"></div>
                    <div class="tilt-card-inner relative z-10">
                        <span class="text-3xl md:text-4xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform glow-text stat-number-animate" data-count="50" data-suffix="+">0</span>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">
                            <?= lang('App.projects_delivered') ?>
                        </p>
                    </div>
                </div>
                <div class="glass-card px-8 py-6 text-center group shine-card stat-glow tilt-card">
                    <div class="tilt-card-glow"></div>
                    <div class="tilt-card-inner relative z-10">
                        <span class="text-3xl md:text-4xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform glow-text stat-number-animate" data-count="100" data-suffix="%">0</span>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">
                            <?= lang('App.client_satisfaction') ?>
                        </p>
                    </div>
                </div>
                <div class="glass-card px-8 py-6 text-center group shine-card stat-glow tilt-card">
                    <div class="tilt-card-glow"></div>
                    <div class="tilt-card-inner relative z-10">
                        <span class="text-3xl md:text-4xl font-bold text-blue-400 group-hover:scale-110 inline-block transition-transform glow-text">24/7</span>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mt-2">
                            Support
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-950 to-transparent"
        style="background: linear-gradient(to top, #040b18, transparent);"></div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     MARQUEE — Trusted By (Scrolling Text)
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-8 relative overflow-hidden" style="background: #040b18; border-top: 1px solid rgba(255,255,255,0.04); border-bottom: 1px solid rgba(255,255,255,0.04);">
    <div class="flex whitespace-nowrap animate-marquee">
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">INNOVATION</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">TRUST</span>
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">EXCELLENCE</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">GROWTH</span>
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">COLLABORATION</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">FUTURE</span>
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">INNOVATION</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">TRUST</span>
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">EXCELLENCE</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">GROWTH</span>
        <span class="text-4xl md:text-5xl font-bold text-white/5 mx-8">COLLABORATION</span>
        <span class="text-4xl md:text-5xl font-bold text-blue-400/20 mx-8">FUTURE</span>
    </div>
    <!-- Edge fade masks for cleaner marquee edges -->
    <div class="absolute top-0 left-0 bottom-0 w-24 md:w-40 pointer-events-none z-10" style="background: linear-gradient(90deg, #040b18, transparent);"></div>
    <div class="absolute top-0 right-0 bottom-0 w-24 md:w-40 pointer-events-none z-10" style="background: linear-gradient(-90deg, #040b18, transparent);"></div>
</section>

<div class="divider-glow-modern"></div>

<!-- ═══════════════════════════════════════════════════════════════
     COMPANY STORY — 3D Cards with Tilt
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative" style="background: #040b18;">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-20 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                OUR STORY
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl"><?= lang('App.our_story_title') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg leading-relaxed max-w-4xl mx-auto"><?= lang('App.our_story_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 perspective-container">
            <div class="glass-card p-8 text-center group tilt-card shine-card float-3d" style="animation-delay: 0s;">
                <div class="tilt-card-glow"></div>
                <div class="tilt-card-inner relative z-10">
                    <div class="icon-box-dark mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?= lang('App.innovation_first_title') ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.innovation_first_desc') ?></p>
                </div>
            </div>
            <div class="glass-card p-8 text-center group tilt-card shine-card float-3d" style="animation-delay: 0.5s;">
                <div class="tilt-card-glow"></div>
                <div class="tilt-card-inner relative z-10">
                    <div class="icon-box-dark mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?= lang('App.expert_team_title') ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.expert_team_desc') ?></p>
                </div>
            </div>
            <div class="glass-card p-8 text-center group tilt-card shine-card float-3d" style="animation-delay: 1s;">
                <div class="tilt-card-glow"></div>
                <div class="tilt-card-inner relative z-10">
                    <div class="icon-box-dark mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?= lang('App.proven_results_title') ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= lang('App.proven_results_desc') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     TIMELINE — Journey with Scroll Animation
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="max-w-5xl mx-auto px-4 relative z-10">
        <div class="text-center mb-20 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                OUR JOURNEY
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">How We Grew</h2>
            <div class="separator mx-auto mb-8"></div>
        </div>

        <div class="relative">
            <!-- Vertical Line (desktop only) -->
            <div class="absolute left-1/2 transform -translate-x-1/2 top-4 bottom-4 w-px bg-gradient-to-b from-transparent via-blue-500/20 to-transparent hidden md:block"></div>

            <!-- Timeline Items -->
            <?php
            $milestones = [
                ['year' => '2020', 'title' => 'Founded', 'desc' => 'DevStack was born with a mission to deliver cutting-edge digital solutions.'],
                ['year' => '2021', 'title' => 'First 10 Projects', 'desc' => 'Successfully delivered our first 10 projects with 100% client satisfaction.'],
                ['year' => '2022', 'title' => 'Team Expansion', 'desc' => 'Grew to a team of 15+ experts across development, design, and strategy.'],
                ['year' => '2023', 'title' => 'Enterprise Clients', 'desc' => 'Started serving enterprise-level clients with scalable solutions.'],
                ['year' => '2024', 'title' => 'Global Reach', 'desc' => 'Expanded services to international markets with remote-first operations.'],
                ['year' => '2025', 'title' => 'Innovation Hub', 'desc' => 'Launched R&D division focused on AI and next-gen web technologies.'],
            ];
            $lastIdx = count($milestones) - 1;

            foreach ($milestones as $i => $ms):
                $isEven = $i % 2 === 0;
                $delay  = 0.1 * $i;
                $year   = $ms['year'];
                $title  = $ms['title'];
                $desc   = $ms['desc'];
            ?>

                <!-- Timeline Item -->
                <div class="relative md:grid md:grid-cols-2 md:gap-16 mb-8 md:mb-4 animate-fade-in" style="animation-delay: <?= $delay ?>s">

                    <!-- Desktop: Left Column -->
                    <div class="hidden md:block <?= $isEven ? '' : 'md:col-start-1' ?>">
                        <?php if ($isEven): ?>
                        <div class="relative group">
                            <!-- Pill Badge -->
                            <div class="inline-flex items-center gap-2 mb-3 ml-auto pill-badge">
                                <span class="inline-block w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                                <span class="text-xs font-bold text-blue-300 tracking-widest"><?= $year ?></span>
                            </div>
                            <!-- Card -->
                            <div class="glass-card p-6 shine-card transition-all duration-300 group-hover:border-blue-500/40 group-hover:-translate-y-1">
                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors"><?= $title ?></h3>
                                <p class="text-gray-400 text-sm leading-relaxed"><?= $desc ?></p>
                            </div>
                            <!-- Connector arrow to line -->
                            <div class="absolute top-12 -right-8 w-8 h-px bg-gradient-to-r from-blue-500/50 to-blue-500/20"></div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Center Dot on Line -->
                    <div class="hidden md:block absolute left-1/2 top-12 -translate-x-1/2 z-20">
                        <div class="relative">
                            <span class="absolute inset-0 rounded-full bg-blue-400/40 blur-md"></span>
                            <span class="relative block w-3 h-3 rounded-full bg-blue-400 ring-4 ring-blue-500/20"></span>
                        </div>
                    </div>

                    <!-- Desktop: Right Column -->
                    <div class="hidden md:block <?= !$isEven ? 'md:col-start-2' : '' ?>">
                        <?php if (!$isEven): ?>
                        <div class="relative group">
                            <!-- Pill Badge -->
                            <div class="inline-flex items-center gap-2 mb-3 pill-badge">
                                <span class="text-xs font-bold text-blue-300 tracking-widest"><?= $year ?></span>
                                <span class="inline-block w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                            </div>
                            <!-- Card -->
                            <div class="glass-card p-6 shine-card transition-all duration-300 group-hover:border-blue-500/40 group-hover:-translate-y-1">
                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors"><?= $title ?></h3>
                                <p class="text-gray-400 text-sm leading-relaxed"><?= $desc ?></p>
                            </div>
                            <!-- Connector arrow to line -->
                            <div class="absolute top-12 -left-8 w-8 h-px bg-gradient-to-l from-blue-500/50 to-blue-500/20"></div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Mobile Layout -->
                    <div class="md:hidden relative pl-8">
                        <!-- Vertical line -->
                        <?php if ($i < $lastIdx): ?>
                        <div class="absolute left-[0.3rem] top-4 bottom-0 w-px bg-gradient-to-b from-blue-500/30 to-blue-500/5"></div>
                        <?php endif; ?>
                        <!-- Dot -->
                        <div class="absolute left-0 top-1">
                            <span class="absolute inset-0 rounded-full bg-blue-400/40 blur-sm"></span>
                            <span class="relative block w-2.5 h-2.5 rounded-full bg-blue-400 ring-2 ring-blue-500/20"></span>
                        </div>
                        <!-- Pill + Card -->
                        <div class="inline-flex items-center gap-2 mb-2 pill-badge">
                            <span class="inline-block w-1 h-1 rounded-full bg-blue-400"></span>
                            <span class="text-[10px] font-bold text-blue-300 tracking-widest"><?= $year ?></span>
                        </div>
                        <div class="glass-card p-5 shine-card group hover:border-blue-500/40 transition-all">
                            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-300 transition-colors"><?= $title ?></h3>
                            <p class="text-gray-400 text-sm leading-relaxed"><?= $desc ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     VISION — Spotlight + 3D Cards
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative" style="background: #040b18;">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-20 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                VISION 2026
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl"><?= lang('App.vision_tomorrow_title') ?></h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg leading-relaxed max-w-4xl mx-auto"><?= lang('App.vision_tomorrow_desc') ?></p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left Column: Vision Items with Spotlight -->
            <div class="space-y-6">
                <?php
                $visions = [
                    ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => lang('App.innovation_excellence_title'), 'desc' => lang('App.innovation_excellence_desc')],
                    ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => lang('App.client_centric_title'), 'desc' => lang('App.client_centric_desc')],
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => lang('App.global_impact_title'), 'desc' => lang('App.global_impact_desc')],
                ];
                foreach ($visions as $i => $v):
                ?>
                <div class="glass-card p-6 group shine-card spotlight animate-fade-in" style="animation-delay: <?= 0.1 * $i ?>s">
                    <div class="flex items-start space-x-5">
                        <div class="icon-box-dark flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $v['icon'] ?>"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2"><?= $v['title'] ?></h3>
                            <p class="text-gray-400 text-sm leading-relaxed"><?= $v['desc'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Column: Why Choose Us with Holographic Border -->
            <div class="glass-card p-8 shine-card holo-border animate-fade-in animate-delay-2">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="icon-box-dark group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white text-3d"><?= lang('App.why_choose_title') ?></h3>
                </div>
                <div class="space-y-5">
                    <?php $items = ['proven_track_record', 'expert_diverse_team', 'customized_solutions', 'continuous_innovation']; ?>
                    <?php foreach ($items as $idx => $item): ?>
                        <div class="flex items-center space-x-4 group/item animate-fade-in" style="animation-delay: <?= 0.15 * $idx ?>s">
                            <div
                                class="w-10 h-10 bg-blue-500/10 border border-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover/item:bg-blue-500/20 group-hover/item:border-blue-500/40 transition-all duration-300 group-hover/item:shadow-lg group-hover/item:shadow-blue-500/20">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover/item:text-white transition-colors duration-300"><?= lang('App.' . $item) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     TEAM SECTION — 3D Flip Cards
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-20 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                MEET THE TEAM
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">The Minds Behind DevStack</h2>
            <div class="separator mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto">Passionate professionals dedicated to transforming your digital vision into reality.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 perspective-container">
            <?php
            $team = [
                ['name' => 'Ahmad Rizky', 'role' => 'Founder & CEO', 'initial' => 'AR', 'bio' => 'Visionary leader with 10+ years building innovative digital products and scaling engineering teams.'],
                ['name' => 'Budi Santoso', 'role' => 'CTO', 'initial' => 'BS', 'bio' => 'Full-stack architect passionate about clean code, performance, and emerging web technologies.'],
                ['name' => 'Citra Lestari', 'role' => 'Lead Designer', 'initial' => 'CL', 'bio' => 'Crafts beautiful, accessible interfaces that balance user needs with bold creative vision.'],
                ['name' => 'Dedi Pratama', 'role' => 'Head of Engineering', 'initial' => 'DP', 'bio' => 'Systems thinker focused on reliability, cloud infrastructure, and developer experience.'],
            ];
            foreach ($team as $i => $member):
            ?>
            <div class="flip-card group animate-fade-in" style="animation-delay: <?= 0.12 * $i ?>s; min-height: 300px;">
                <div class="flip-card-inner" style="min-height: 300px;">
                    <!-- Front -->
                    <div class="flip-card-front glass-card p-6 text-center shine-card flex flex-col items-center justify-center" style="min-height: 300px;">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 blur-md opacity-40 group-hover:opacity-70 transition-opacity"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-2xl font-bold text-white shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 transition-shadow">
                                <?= $member['initial'] ?>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-white"><?= $member['name'] ?></h3>
                        <p class="text-blue-400 text-sm mt-1"><?= $member['role'] ?></p>
                        <div class="mt-4 flex items-center gap-1.5 text-[10px] text-gray-500 uppercase tracking-wider">
                            <span>Hover to view</span>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back glass-card p-6 text-center flex flex-col items-center justify-center" style="min-height: 300px; background: linear-gradient(135deg, rgba(37,99,235,0.15), rgba(59,130,246,0.08));">
                        <h3 class="text-lg font-bold text-white mb-1"><?= $member['name'] ?></h3>
                        <p class="text-blue-300 text-xs mb-4 uppercase tracking-wider"><?= $member['role'] ?></p>
                        <p class="text-gray-300 text-sm leading-relaxed mb-5"><?= $member['bio'] ?></p>
                        <div class="flex gap-3">
                            <a href="#" aria-label="Twitter profile" class="w-9 h-9 rounded-full bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" aria-label="LinkedIn profile" class="w-9 h-9 rounded-full bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" aria-label="Email" class="w-9 h-9 rounded-full bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     TECH STACK — Floating Icons Grid
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative" style="background: #040b18;">
    <div class="max-w-5xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                TECHNOLOGIES
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">Tools We Master</h2>
            <div class="separator mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4 stagger-float">
            <?php
            $techs = [
                ['name' => 'React',      'color' => '#61DAFB', 'icon' => '<circle cx="12" cy="12" r="2" fill="currentColor"/><g fill="none" stroke="currentColor" stroke-width="1"><ellipse cx="12" cy="12" rx="10" ry="4"/><ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(60 12 12)"/><ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(120 12 12)"/></g>'],
                ['name' => 'Vue.js',     'color' => '#42B883', 'icon' => '<path d="M12 21L2 3h4.5L12 13l5.5-10H22L12 21z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M12 21L7.5 13h3L12 15l1.5-2h3L12 21z" fill="currentColor" opacity="0.4"/>'],
                ['name' => 'Laravel',    'color' => '#FF2D20', 'icon' => '<path d="M3 7l4-2 4 2-4 2-4-2zm8 4l4-2 4 2-4 2-4-2zm-8 4l4-2 4 2-4 2-4-2zm0 4v-4m4-2v-4m0 12v-4m4-6v4m4 2v-4m-4 8v-4" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>'],
                ['name' => 'Node.js',    'color' => '#8CC84B', 'icon' => '<path d="M12 2L3 7v10l9 5 9-5V7l-9-5z" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M9 10v4c0 1 .5 1.5 1.5 1.5h1.5M15 10v4" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
                ['name' => 'Python',     'color' => '#3776AB', 'icon' => '<path d="M12 3c-3 0-3 1.5-3 1.5V6h3v1H6s-3 0-3 3.5S6 14 6 14h1v-1.5s0-1.5 1.5-1.5h5.5s3 0 3-3V5s.5-2-4-2zM9.5 4.5a.5.5 0 110 1 .5.5 0 010-1zM12 21c3 0 3-1.5 3-1.5V18h-3v-1h6s3 0 3-3.5S18 10 18 10h-1v1.5s0 1.5-1.5 1.5H10s-3 0-3 3v3s-.5 2 4 2zm2.5-1.5a.5.5 0 110-1 .5.5 0 010 1z" fill="currentColor"/>'],
                ['name' => 'AWS',        'color' => '#FF9900', 'icon' => '<path d="M6 10a2 2 0 012-2h8a2 2 0 012 2v3c0 .5.2 1 .5 1.5M3 16c2 2 5 3 9 3s7-1 9-3" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="9" cy="11" r="0.8" fill="currentColor"/><circle cx="15" cy="11" r="0.8" fill="currentColor"/>'],
                ['name' => 'Docker',     'color' => '#2496ED', 'icon' => '<rect x="3" y="10" width="3" height="3" fill="none" stroke="currentColor" stroke-width="1.2"/><rect x="7" y="10" width="3" height="3" fill="none" stroke="currentColor" stroke-width="1.2"/><rect x="11" y="10" width="3" height="3" fill="none" stroke="currentColor" stroke-width="1.2"/><rect x="7" y="6" width="3" height="3" fill="none" stroke="currentColor" stroke-width="1.2"/><rect x="11" y="6" width="3" height="3" fill="none" stroke="currentColor" stroke-width="1.2"/><path d="M3 14c2 3 5 4 9 4s8-1 9-4c0 0-1-1-3-1-1 0-2 .3-2 1" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>'],
                ['name' => 'Figma',      'color' => '#F24E1E', 'icon' => '<rect x="8" y="3" width="4" height="6" rx="2" fill="none" stroke="currentColor" stroke-width="1.4"/><rect x="12" y="3" width="4" height="6" rx="2" fill="none" stroke="currentColor" stroke-width="1.4"/><rect x="8" y="9" width="4" height="6" rx="2" fill="none" stroke="currentColor" stroke-width="1.4"/><rect x="8" y="15" width="4" height="6" rx="2" fill="none" stroke="currentColor" stroke-width="1.4"/><circle cx="14" cy="12" r="3" fill="none" stroke="currentColor" stroke-width="1.4"/>'],
                ['name' => 'Flutter',    'color' => '#02569B', 'icon' => '<path d="M14 3L4 13l4 4L20 5h-6zm0 10l-5 5 5 5h6l-5-5 5-5h-6z" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>'],
                ['name' => 'TypeScript', 'color' => '#3178C6', 'icon' => '<rect x="3" y="3" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.3"/><path d="M8 11h6M11 11v6M14 13c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1-1.5 1.3c-.8.3-1.5.7-1.5 1.5 0 .8.7 1.2 1.5 1.2s1.5-.4 1.5-1" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>'],
                ['name' => 'MySQL',      'color' => '#4479A1', 'icon' => '<ellipse cx="12" cy="6" rx="8" ry="2.5" fill="none" stroke="currentColor" stroke-width="1.3"/><path d="M4 6v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V6M4 12v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-6" fill="none" stroke="currentColor" stroke-width="1.3"/>'],
                ['name' => 'Redis',      'color' => '#DC382D', 'icon' => '<ellipse cx="12" cy="5" rx="8" ry="2.5" fill="none" stroke="currentColor" stroke-width="1.3"/><path d="M4 5v5c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V5M4 10v5c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-5M4 15v4c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-4" fill="none" stroke="currentColor" stroke-width="1.3"/>'],
            ];
            foreach ($techs as $i => $tech):
            ?>
            <div class="glass-card p-5 flex flex-col items-center justify-center text-center group shine-card animate-fade-in transition-all duration-300 hover:-translate-y-1 hover:border-blue-500/30" style="animation-delay: <?= 0.05 * $i ?>s; min-height: 110px;">
                <svg class="w-9 h-9 mb-2 transition-transform duration-300 group-hover:scale-110" style="color: <?= $tech['color'] ?>;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <?= $tech['icon'] ?>
                </svg>
                <span class="text-xs text-gray-400 group-hover:text-white font-medium transition-colors"><?= $tech['name'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     TESTIMONIALS — 3D Perspective Cards
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(180deg, #040b18, #060e1f, #040b18);">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="text-center mb-20 reveal">
            <div class="badge-modern mb-6">
                <span class="dot"></span>
                TESTIMONIALS
            </div>
            <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">What Clients Say</h2>
            <div class="separator mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 iso-stack">
            <?php
            $testimonials = [
                ['name' => 'PT Maju Bersama', 'role' => 'CEO', 'text' => 'DevStack transformed our digital presence completely. The attention to detail and technical excellence is unmatched.', 'initial' => 'MB'],
                ['name' => 'Startup Nusantara', 'role' => 'Founder', 'text' => 'Working with DevStack felt like having an in-house tech team. They understood our vision and delivered beyond expectations.', 'initial' => 'SN'],
                ['name' => 'Global Tech ID', 'role' => 'CTO', 'text' => 'The scalability and performance of the solutions delivered by DevStack have been critical to our growth.', 'initial' => 'GT'],
            ];
            foreach ($testimonials as $i => $t):
            ?>
            <div class="iso-card glass-card p-6 shine-card animate-fade-in group transition-all duration-300 hover:border-blue-500/30" style="animation-delay: <?= 0.15 * $i ?>s">
                <!-- Decorative quote mark -->
                <svg class="w-8 h-8 text-blue-500/20 mb-3 group-hover:text-blue-500/40 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.17 17q-1.4 0-2.387-.975T3.8 13.7q0-.95.413-1.887t1.112-1.688l3.375-3.7 1.4 1.275L6.525 11H9.2q.475 0 .8.338t.325.812v4.025q0 .337-.237.563t-.588.237zm9 0q-1.4 0-2.387-.975T12.8 13.7q0-.95.413-1.887t1.112-1.688l3.375-3.7 1.4 1.275L15.525 11H18.2q.475 0 .8.338t.325.812v4.025q0 .337-.237.563t-.588.237z"/>
                </svg>
                <p class="text-gray-300 text-sm leading-relaxed mb-5"><?= $t['text'] ?></p>

                <!-- Divider -->
                <div class="h-px bg-gradient-to-r from-blue-500/20 via-white/5 to-transparent mb-4"></div>

                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 blur-sm opacity-50 group-hover:opacity-80 transition-opacity"></div>
                        <div class="relative w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-sm font-bold text-white shadow-lg shadow-blue-500/30">
                            <?= $t['initial'] ?>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-semibold text-sm"><?= $t['name'] ?></h4>
                        <p class="text-gray-500 text-xs"><?= $t['role'] ?></p>
                    </div>
                    <div class="flex gap-0.5">
                        <?php for ($s = 0; $s < 5; $s++): ?>
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     CTA SECTION — Mesh Gradient + Neon Pulse
     ═══════════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden mesh-gradient" style="background: linear-gradient(180deg, #040b18, #0a1628);">
    <div class="hero-bg-modern">
        <div class="orb orb-1" style="width:500px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-250px;"></div>
    </div>

    <div class="max-w-3xl mx-auto px-4 relative z-10 text-center">
        <div class="badge-modern mb-6 mx-auto inline-flex">
            <span class="dot"></span>
            LET'S COLLABORATE
        </div>
        <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">
            <?= lang('App.cta_about_title') ?? 'Ready to Build Something Amazing?' ?>
        </h2>
        <p class="text-gray-400 text-lg mb-10 max-w-xl mx-auto leading-relaxed">
            <?= lang('App.cta_about_subtitle') ?? 'Let\'s collaborate to turn your vision into reality. Our team is ready to help you achieve your digital goals.' ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center stagger-children">
            <a href="<?= base_url('contact') ?>" class="btn-glow-modern magnetic-btn neon-pulse">
                <span><?= lang('App.start_project') ?? 'Start a Project' ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            <a href="<?= base_url('services') ?>" class="btn-glass-modern magnetic-btn">
                <span><?= lang('App.our_services') ?? 'Our Services' ?></span>
            </a>
        </div>

        <!-- Trust indicators -->
        <div class="mt-10 pt-8 border-t border-white/5 flex flex-wrap items-center justify-center gap-6 text-xs text-gray-500">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span>Free consultation</span>
            </div>
            <span class="hidden sm:block w-1 h-1 rounded-full bg-gray-700"></span>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <span>24h response time</span>
            </div>
            <span class="hidden sm:block w-1 h-1 rounded-full bg-gray-700"></span>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <span>NDA-protected</span>
            </div>
        </div>
    </div>
</section>

<!-- Scroll to Top Button -->
<button id="scroll-to-top" aria-label="Scroll to top" class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-blue-500/10 border border-blue-500/30 backdrop-blur-md text-blue-300 flex items-center justify-center shadow-lg shadow-blue-500/10 opacity-0 pointer-events-none transition-all duration-300 hover:bg-blue-500/20 hover:scale-110 z-40">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.stat-number-animate');

        // Initialize counter animations for about page
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.count);
                const suffix = counter.dataset.suffix || '';
                if (isNaN(target)) return;

                ScrollTrigger.create({
                    trigger: counter,
                    start: 'top 85%',
                    once: true,
                    onEnter: () => {
                        gsap.to({ val: 0 }, {
                            val: target,
                            duration: 2,
                            ease: 'power2.out',
                            onUpdate: function() {
                                counter.textContent = Math.floor(this.targets()[0].val) + suffix;
                            }
                        });
                    }
                });
            });
        } else {
            // Fallback: show final values immediately when GSAP is unavailable
            counters.forEach(counter => {
                const target = counter.dataset.count;
                const suffix = counter.dataset.suffix || '';
                if (target && !isNaN(parseInt(target))) {
                    counter.textContent = target + suffix;
                }
            });
        }

        // Scroll-to-top button
        const scrollBtn = document.getElementById('scroll-to-top');
        if (scrollBtn) {
            const toggleScrollBtn = () => {
                if (window.scrollY > 600) {
                    scrollBtn.classList.remove('opacity-0', 'pointer-events-none');
                    scrollBtn.classList.add('opacity-100');
                } else {
                    scrollBtn.classList.add('opacity-0', 'pointer-events-none');
                    scrollBtn.classList.remove('opacity-100');
                }
            };
            window.addEventListener('scroll', toggleScrollBtn, { passive: true });
            toggleScrollBtn();

            scrollBtn.addEventListener('click', () => {
                if (window.lenis) {
                    window.lenis.scrollTo(0);
                } else {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });
        }
    });
</script>

<?= $this->endSection() ?>
