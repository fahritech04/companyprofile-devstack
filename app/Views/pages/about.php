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
            <!-- Vertical Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-blue-500/20 via-blue-500/10 to-transparent hidden md:block"></div>

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
                $delay  = 0.15 * $i;
                $year   = $ms['year'];
                $title  = $ms['title'];
                $desc   = $ms['desc'];
            ?>

                <!-- Timeline Item -->
                <div class="relative flex items-center mb-12 md:mb-0 md:min-h-[12rem] animate-fade-in" style="animation-delay: <?= $delay ?>s">

                    <!-- Desktop: Left Side -->
                    <div class="hidden md:block w-5/12 <?= $isEven ? 'text-right pr-12' : '' ?>">
                        <?php if ($isEven): ?>
                        <div class="inline-block text-left glass-card p-5 shine-card">
                            <h3 class="text-2xl font-bold text-white glow-text"><?= $year ?></h3>
                            <p class="text-blue-400 font-semibold mt-1"><?= $title ?></p>
                            <p class="text-gray-400 text-sm mt-2 leading-relaxed"><?= $desc ?></p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Center Marker -->
                    <div class="hidden md:flex absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
                        <div class="relative flex items-center justify-center w-5 h-5">
                        </div>
                    </div>

                    <!-- Desktop: Right Side -->
                    <div class="hidden md:block w-5/12 <?= !$isEven ? 'text-left pl-12' : '' ?>">
                        <?php if (!$isEven): ?>
                        <div class="inline-block text-left glass-card p-5 shine-card">
                            <h3 class="text-2xl font-bold text-white glow-text"><?= $year ?></h3>
                            <p class="text-blue-400 font-semibold mt-1"><?= $title ?></p>
                            <p class="text-gray-400 text-sm mt-2 leading-relaxed"><?= $desc ?></p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start gap-4 w-full">
                        <div class="flex flex-col items-center pt-2">
                            <div class="relative flex items-center justify-center w-4 h-4">
                                <div class="relative w-2 h-2 rounded-full bg-blue-400 shadow-[0_0_8px_rgba(96,165,250,0.5)]"></div>
                            </div>
                            <?php if ($i < $lastIdx): ?>
                            <div class="w-px flex-1 bg-gradient-to-b from-blue-500/20 to-transparent mt-2"></div>
                            <?php endif; ?>
                        </div>
                        <div class="pb-8">
                            <div class="glass-card p-4 shine-card">
                                <h3 class="text-xl font-bold text-white glow-text"><?= $year ?></h3>
                                <p class="text-blue-400 font-semibold mt-1"><?= $title ?></p>
                                <p class="text-gray-400 text-sm mt-2 leading-relaxed"><?= $desc ?></p>
                            </div>
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
                ['name' => 'Ahmad Rizky', 'role' => 'Founder & CEO', 'initial' => 'AR'],
                ['name' => 'Budi Santoso', 'role' => 'CTO', 'initial' => 'BS'],
                ['name' => 'Citra Lestari', 'role' => 'Lead Designer', 'initial' => 'CL'],
                ['name' => 'Dedi Pratama', 'role' => 'Head of Engineering', 'initial' => 'DP'],
            ];
            foreach ($team as $i => $member):
            ?>
            <div class="flip-card group animate-fade-in" style="animation-delay: <?= 0.12 * $i ?>s; min-height: 280px;">
                <div class="flip-card-inner" style="min-height: 280px;">
                    <!-- Front -->
                    <div class="flip-card-front glass-card p-6 text-center shine-card flex flex-col items-center justify-center" style="min-height: 280px;">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-2xl font-bold text-white mb-4 shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 transition-shadow">
                            <?= $member['initial'] ?>
                        </div>
                        <h3 class="text-lg font-bold text-white"><?= $member['name'] ?></h3>
                        <p class="text-blue-400 text-sm mt-1"><?= $member['role'] ?></p>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back glass-card p-6 text-center flex flex-col items-center justify-center" style="min-height: 280px; background: linear-gradient(135deg, rgba(37,99,235,0.15), rgba(59,130,246,0.1));">
                        <h3 class="text-lg font-bold text-white mb-2"><?= $member['name'] ?></h3>
                        <p class="text-blue-300 text-sm mb-4"><?= $member['role'] ?></p>
                        <p class="text-gray-300 text-xs leading-relaxed">Driving innovation and excellence in every project we deliver.</p>
                        <div class="flex gap-3 mt-4">
                            <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-blue-500/20 flex items-center justify-center transition-all border border-white/10 hover:border-blue-500/30">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
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
                ['name' => 'React', 'icon' => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z'],
                ['name' => 'Vue', 'icon' => 'M12 2L2 19h20L12 2zm0 3.5L17.5 17h-11L12 5.5z'],
                ['name' => 'Laravel', 'icon' => 'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'],
                ['name' => 'Node.js', 'icon' => 'M12 2L3 7v10l9 5 9-5V7l-9-5z'],
                ['name' => 'Python', 'icon' => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z'],
                ['name' => 'AWS', 'icon' => 'M12 2L2 12l10 10 10-10L12 2z'],
                ['name' => 'Docker', 'icon' => 'M4 10v8h16v-8H4zm2 6v-4h2v4H6zm4 0v-4h2v4h-2zm4 0v-4h2v4h-2z'],
                ['name' => 'Figma', 'icon' => 'M8 2a4 4 0 00-4 4v4h4a4 4 0 004-4V2H8zm0 8H4v4a4 4 0 004 4h4v-4a4 4 0 00-4-4zm8-4a4 4 0 00-4 4v4h4a4 4 0 004-4V6h-4z'],
                ['name' => 'Flutter', 'icon' => 'M12 2L2 12l10 10 10-10L12 2z'],
                ['name' => 'TypeScript', 'icon' => 'M12 2L2 12l10 10 10-10L12 2zm0 4l6 6-6 6-6-6 6-6z'],
                ['name' => 'MySQL', 'icon' => 'M4 6v12h16V6H4zm2 10V8h12v8H6z'],
                ['name' => 'Redis', 'icon' => 'M12 2L4 7v10l8 5 8-5V7l-8-5z'],
            ];
            foreach ($techs as $i => $tech):
            ?>
            <div class="glass-card p-4 flex flex-col items-center justify-center text-center group shine-card float-3d animate-fade-in" style="animation-delay: <?= 0.05 * $i ?>s; min-height: 100px;">
                <svg class="w-8 h-8 text-blue-400 group-hover:text-blue-300 transition-colors mb-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="<?= $tech['icon'] ?>"/>
                </svg>
                <span class="text-xs text-gray-400 group-hover:text-white transition-colors"><?= $tech['name'] ?></span>
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
            <div class="iso-card glass-card p-6 shine-card animate-fade-in" style="animation-delay: <?= 0.15 * $i ?>s">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-sm font-bold text-white">
                        <?= $t['initial'] ?>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold text-sm"><?= $t['name'] ?></h4>
                        <p class="text-gray-500 text-xs"><?= $t['role'] ?></p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed italic">"<?= $t['text'] ?>"</p>
                <div class="flex gap-1 mt-4">
                    <?php for ($s = 0; $s < 5; $s++): ?>
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
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
        <h2 class="text-gradient-blue mb-6 text-3d text-4xl md:text-5xl">
            <?= lang('App.cta_about_title') ?? 'Ready to Build Something Amazing?' ?>
        </h2>
        <p class="text-gray-400 text-lg mb-10 max-w-xl mx-auto">
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
    </div>
</section>

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
    });
</script>

<?= $this->endSection() ?>
