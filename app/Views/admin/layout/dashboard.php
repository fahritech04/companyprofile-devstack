<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin' ?> — DevStack Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            800: '#111827',
                            850: '#0d1325',
                            900: '#0a0f1c',
                            950: '#060a14',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        /* Sidebar */
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.625rem 1rem;
            border-radius: 0.75rem;
            color: #9ca3af;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
            position: relative;
        }

        .sidebar-link:hover {
            color: #e5e7eb;
            background: rgba(255, 255, 255, 0.04);
        }

        .sidebar-link.active {
            color: #fff;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15), rgba(99, 102, 241, 0.08));
            border: 1px solid rgba(59, 130, 246, 0.2);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.05);
        }

        .sidebar-link.active svg {
            color: #60a5fa;
        }

        /* Stat Cards */
        .stat-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.01));
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-color, #3b82f6), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .stat-card:hover {
            border-color: rgba(59, 130, 246, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: #fff;
            padding: 0.625rem 1.25rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.35);
        }

        .btn-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #f87171;
            padding: 0.5rem 0.875rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.8125rem;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            transition: all 0.2s ease;
            border: 1px solid rgba(239, 68, 68, 0.15);
            cursor: pointer;
        }

        .btn-danger:hover {
            background: #ef4444;
            color: #fff;
            border-color: #ef4444;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.04);
            color: #d1d5db;
            padding: 0.5rem 0.875rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.8125rem;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            transition: all 0.2s ease;
            border: 1px solid rgba(255, 255, 255, 0.08);
            cursor: pointer;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.15);
        }

        .btn-icon {
            padding: 0.5rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        /* Tables */
        .table-dark {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        .table-dark thead th {
            color: #6b7280;
            font-size: 0.6875rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: 600;
            padding: 0.875rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            white-space: nowrap;
        }

        .table-dark tbody td {
            color: #d1d5db;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            font-size: 0.875rem;
        }

        .table-dark tbody tr {
            transition: background 0.15s ease;
        }

        .table-dark tbody tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }

        .table-dark tbody tr:last-child td {
            border-bottom: none;
        }

        /* Forms */
        .form-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            color: #fff;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            outline: none;
        }

        .form-input::placeholder {
            color: #4b5563;
        }

        .form-input:focus {
            border-color: rgba(59, 130, 246, 0.4);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.08);
            background: rgba(255, 255, 255, 0.05);
        }

        .form-input:hover:not(:focus) {
            border-color: rgba(255, 255, 255, 0.12);
        }

        .form-label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 500;
            color: #9ca3af;
            margin-bottom: 0.5rem;
        }

        /* Badges */
        .badge {
            padding: 0.25rem 0.625rem;
            border-radius: 9999px;
            font-size: 0.6875rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .badge-success {
            background: rgba(16, 185, 129, 0.12);
            color: #34d399;
            border: 1px solid rgba(16, 185, 129, 0.15);
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.12);
            color: #fbbf24;
            border: 1px solid rgba(245, 158, 11, 0.15);
        }

        .badge-danger {
            background: rgba(239, 68, 68, 0.12);
            color: #f87171;
            border: 1px solid rgba(239, 68, 68, 0.15);
        }

        .badge-info {
            background: rgba(59, 130, 246, 0.12);
            color: #60a5fa;
            border: 1px solid rgba(59, 130, 246, 0.15);
        }

        /* Toggle Switch */
        .toggle-switch {
            position: relative;
            width: 2.75rem;
            height: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 9999px;
            cursor: pointer;
            transition: background 0.3s ease;
            border: none;
            padding: 0;
        }

        .toggle-switch::after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            width: 1.125rem;
            height: 1.125rem;
            background: #9ca3af;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }

        input:checked+.toggle-switch {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
        }

        input:checked+.toggle-switch::after {
            transform: translateX(1.25rem);
            background: #fff;
        }

        /* Card Panel */
        .panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.01));
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 1rem;
            overflow: hidden;
        }

        .panel-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Flash Messages */
        .flash-msg {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.25rem;
            border-radius: 0.75rem;
            font-size: 0.875rem;
            animation: flashIn 0.3s ease;
        }

        @keyframes flashIn {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile overlay */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 35;
            backdrop-filter: blur(2px);
        }

        .sidebar-overlay.active {
            display: block;
        }

        @media (max-width: 1023px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0 !important;
            }
        }

        /* Misc */
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
        }

        .empty-state svg {
            width: 3rem;
            height: 3rem;
            margin: 0 auto 1rem;
            color: #374151;
        }
    </style>
</head>

<body class="bg-[#060a14] text-white min-h-screen antialiased">
    <div class="flex min-h-screen">

        <!-- Mobile Overlay -->
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

        <!-- Sidebar -->
        <aside
            class="sidebar w-[260px] bg-[#0a0f1c] border-r border-white/[0.04] flex flex-col fixed h-full z-40 transition-transform duration-300"
            id="sidebar">

            <!-- Logo -->
            <div class="px-5 py-5 border-b border-white/[0.04]">
                <a href="<?= base_url('admin') ?>" class="flex items-center gap-3">
                    <div
                        class="w-9 h-9 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[15px] font-bold text-white">Dev</span><span
                            class="text-[15px] font-bold text-blue-400">Stack</span>
                        <p class="text-[9px] text-gray-600 uppercase tracking-[0.2em] font-semibold -mt-0.5">Admin Panel
                        </p>
                    </div>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-3 py-5 space-y-0.5 overflow-y-auto">
                <p class="px-3 text-[9px] uppercase tracking-[0.15em] text-gray-600 font-semibold mb-2.5">Main</p>

                <a href="<?= base_url('admin') ?>"
                    class="sidebar-link <?= ($active ?? '') === 'dashboard' ? 'active' : '' ?>">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <p class="px-3 text-[9px] uppercase tracking-[0.15em] text-gray-600 font-semibold mb-2.5 mt-5">Content
                </p>

                <a href="<?= base_url('admin/services') ?>"
                    class="sidebar-link <?= ($active ?? '') === 'services' ? 'active' : '' ?>">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <span>Services</span>
                </a>

                <a href="<?= base_url('admin/portfolio') ?>"
                    class="sidebar-link <?= ($active ?? '') === 'portfolio' ? 'active' : '' ?>">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span>Portfolio</span>
                </a>

                <a href="<?= base_url('admin/inquiries') ?>"
                    class="sidebar-link <?= ($active ?? '') === 'inquiries' ? 'active' : '' ?>">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Inquiries</span>
                    <?php if (isset($unreadCount) && $unreadCount > 0): ?>
                        <span
                            class="ml-auto bg-red-500/90 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full min-w-[18px] text-center">
                            <?= $unreadCount ?>
                        </span>
                    <?php endif; ?>
                </a>

                <p class="px-3 text-[9px] uppercase tracking-[0.15em] text-gray-600 font-semibold mb-2.5 mt-5">System
                </p>
            </nav>

            <!-- User Info -->
            <div class="px-3 py-4 border-t border-white/[0.04]">
                <div class="flex items-center gap-3 px-3">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-blue-500/30 to-indigo-500/30 rounded-full flex items-center justify-center ring-1 ring-blue-500/20">
                        <span class="text-xs font-bold text-blue-300">
                            <?= strtoupper(substr(session()->get('first_name') ?? 'A', 0, 1)) ?>
                        </span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate leading-tight">
                            <?= session()->get('first_name') ?? 'Admin' ?>
                        </p>
                        <p class="text-[11px] text-gray-600 truncate">
                            <?= session()->get('email') ?? '' ?>
                        </p>
                    </div>
                    <a href="<?= base_url('logout') ?>"
                        class="text-gray-600 hover:text-red-400 transition-colors p-1 rounded-lg hover:bg-red-500/5"
                        title="Logout">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content flex-1 ml-[260px] min-h-screen">

            <!-- Top Header -->
            <header class="sticky top-0 z-30 bg-[#060a14]/80 backdrop-blur-xl border-b border-white/[0.04]">
                <div class="flex items-center justify-between px-6 lg:px-8 py-4">
                    <div class="flex items-center gap-4">
                        <!-- Mobile Hamburger -->
                        <button
                            class="lg:hidden p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-colors"
                            onclick="toggleSidebar()">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div>
                            <h1 class="text-lg font-bold text-white leading-tight">
                                <?= $title ?? 'Dashboard' ?>
                            </h1>
                            <p class="text-xs text-gray-500 mt-0.5">
                                <?= $subtitle ?? 'Manage your content' ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="<?= base_url('/') ?>" target="_blank" class="btn-secondary">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                            <span class="hidden sm:inline">View Site</span>
                        </a>
                    </div>
                </div>
            </header>

            <!-- Flash Messages -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="mx-6 lg:mx-8 mt-4">
                    <div class="flash-msg bg-emerald-500/8 border border-emerald-500/15 text-emerald-300" id="flashSuccess">
                        <svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm"><?= session()->getFlashdata('success') ?></span>
                        <button onclick="this.parentElement.remove()"
                            class="ml-auto text-emerald-400/60 hover:text-emerald-300 p-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="mx-6 lg:mx-8 mt-4">
                    <div class="flash-msg bg-red-500/8 border border-red-500/15 text-red-300" id="flashError">
                        <svg class="w-4 h-4 text-red-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm"><?= session()->getFlashdata('error') ?></span>
                        <button onclick="this.parentElement.remove()"
                            class="ml-auto text-red-400/60 hover:text-red-300 p-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="mx-6 lg:mx-8 mt-4">
                    <div class="flash-msg bg-red-500/8 border border-red-500/15 text-red-300">
                        <svg class="w-4 h-4 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="text-sm">
                            <p class="font-medium mb-1">Please fix the following errors:</p>
                            <ul class="list-disc list-inside space-y-0.5 text-red-300/80">
                                <?php foreach (session()->getFlashdata('errors') as $err): ?>
                                    <li><?= esc($err) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Page Content -->
            <div class="p-6 lg:p-8">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
            document.getElementById('sidebarOverlay').classList.toggle('active');
        }

        // Auto-hide flash messages after 5s
        setTimeout(() => {
            ['flashSuccess', 'flashError'].forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(-8px)';
                    setTimeout(() => el.parentElement?.remove(), 400);
                }
            });
        }, 5000);

        // Close sidebar on window resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                document.getElementById('sidebar').classList.remove('open');
                document.getElementById('sidebarOverlay').classList.remove('active');
            }
        });

        // Delete confirmation with better UX
        document.querySelectorAll('form[onsubmit]').forEach(form => {
            form.removeAttribute('onsubmit');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const msg = this.dataset.confirm || 'Are you sure you want to delete this item?';
                if (confirm(msg)) this.submit();
            });
        });
    </script>
</body>

</html>