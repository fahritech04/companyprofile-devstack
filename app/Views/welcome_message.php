<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DevStack — Digital Innovation Partner</title>
    <meta name="description" content="DevStack builds world-class digital experiences with cutting-edge technology.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-deep: #040b18;
            --bg-mid: #060e1f;
            --bg-light: #0a1628;
            --accent: #3b82f6;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
            background: linear-gradient(180deg, var(--bg-deep), var(--bg-mid), var(--bg-light));
            color: #e2e8f0;
            min-height: 100vh;
            overflow-x: hidden;
        }
        /* Ambient orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            animation: floatOrb 10s ease-in-out infinite alternate;
        }
        .orb-1 { width: 400px; height: 400px; background: rgba(59,130,246,0.08); top: -100px; left: -100px; animation-delay: 0s; }
        .orb-2 { width: 350px; height: 350px; background: rgba(99,102,241,0.06); bottom: -80px; right: -80px; animation-delay: -5s; }
        .orb-3 { width: 250px; height: 250px; background: rgba(16,185,129,0.05); top: 40%; left: 60%; animation-delay: -3s; }
        @keyframes floatOrb {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(30px, -30px) scale(1.1); }
        }
        /* Glass card */
        .glass-card {
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.05);
        }
        /* Entrance animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(24px);
            animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }
        .delay-1 { animation-delay: 0.15s; }
        .delay-2 { animation-delay: 0.3s; }
        .delay-3 { animation-delay: 0.5s; }
        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }
        /* Shine sweep */
        .shine-card {
            position: relative;
            overflow: hidden;
        }
        .shine-card::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.06), transparent);
            transform: skewX(-20deg);
            transition: left 0.6s ease;
            pointer-events: none;
        }
        .shine-card:hover::after { left: 150%; }
        /* Button glow */
        .btn-glow {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(59,130,246,0.3);
        }
        .btn-glow:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59,130,246,0.5);
        }
        .btn-ghost {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }
        .btn-ghost:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }
        /* Grid pattern overlay */
        .grid-pattern {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(59,130,246,0.08) 1px, transparent 1px);
            background-size: 32px 32px;
            mask-image: radial-gradient(circle at center, black 40%, transparent 80%);
            -webkit-mask-image: radial-gradient(circle at center, black 40%, transparent 80%);
            pointer-events: none;
        }
        /* Floating particles */
        .particle {
            position: absolute;
            width: 4px; height: 4px;
            background: rgba(59,130,246,0.3);
            border-radius: 50%;
            pointer-events: none;
            animation: particleFloat 15s infinite linear;
        }
        @keyframes particleFloat {
            0% { transform: translateY(100vh) scale(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-10vh) scale(1); opacity: 0; }
        }
    </style>
</head>
<body class="relative flex items-center justify-center min-h-screen p-4">

    <!-- Background effects -->
    <div class="grid-pattern"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <!-- Particles -->
    <div class="particle" style="left:10%; animation-delay:0s; animation-duration:18s;"></div>
    <div class="particle" style="left:25%; animation-delay:3s; animation-duration:22s;"></div>
    <div class="particle" style="left:40%; animation-delay:7s; animation-duration:16s;"></div>
    <div class="particle" style="left:55%; animation-delay:2s; animation-duration:20s;"></div>
    <div class="particle" style="left:70%; animation-delay:5s; animation-duration:24s;"></div>
    <div class="particle" style="left:85%; animation-delay:9s; animation-duration:19s;"></div>

    <!-- Main Card -->
    <div class="glass-card shine-card rounded-3xl p-8 md:p-12 max-w-lg w-full text-center fade-in-up relative z-10">
        <!-- Logo / Icon -->
        <div class="fade-in-up delay-1 mb-6">
            <div class="h-16 w-16 mx-auto rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/20"
                 style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
            </div>
        </div>

        <!-- Heading -->
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 fade-in-up delay-1 tracking-tight">
            DevStack
        </h1>
        <p class="text-gray-400 text-base md:text-lg mb-8 fade-in-up delay-2 leading-relaxed">
            Digital Innovation Partner.<br>
            <span class="text-gray-500 text-sm">We build world-class digital experiences with cutting-edge technology.</span>
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center fade-in-up delay-3">
            <a href="<?= base_url() ?>" class="btn-glow inline-flex items-center justify-center px-6 py-3 rounded-xl text-white font-semibold text-sm">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Visit Website
            </a>
            <a href="<?= base_url('login') ?>" class="btn-ghost inline-flex items-center justify-center px-6 py-3 rounded-xl text-gray-300 font-semibold text-sm">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
                Client Login
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-8 pt-6 border-t border-white/5 fade-in-up delay-3">
            <p class="text-xs text-gray-500">
                &copy; <?= date('Y') ?> DevStack. All rights reserved.
            </p>
        </div>
    </div>

</body>
</html>
