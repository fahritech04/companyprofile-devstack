<?php
$currentRoute = service('uri')->getPath();
$user = session()->get('user_data') ?? ['first_name' => session()->get('first_name') ?? 'User'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? 'Client Portal' ?> — DevStack
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('images/devstack_icon.svg') ?>" type="image/svg+xml">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #060e1f;
        }

        .sidebar {
            background: linear-gradient(180deg, #0a1628 0%, #060e1f 100%);
            border-right: 1px solid rgba(59, 130, 246, 0.1);
        }

        .sidebar-link {
            color: #94a3b8;
            transition: all 0.2s;
            padding: 10px 16px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            color: #fff;
            background: rgba(59, 130, 246, 0.1);
        }

        .sidebar-link.active {
            border-left: 3px solid #3b82f6;
            color: #60a5fa;
        }

        .sidebar-link svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .main-content-area {
            background: #060e1f;
            min-height: 100vh;
        }

        .card-portal {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8), rgba(10, 22, 40, 0.9));
            border: 1px solid rgba(59, 130, 246, 0.1);
            border-radius: 16px;
        }

        .card-portal:hover {
            border-color: rgba(59, 130, 246, 0.2);
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.08), rgba(59, 130, 246, 0.03));
            border: 1px solid rgba(59, 130, 246, 0.15);
            border-radius: 16px;
            padding: 24px;
        }

        .badge-status {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-pending {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .badge-paid {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .badge-in_progress,
        .badge-in-progress {
            background: rgba(59, 130, 246, 0.15);
            color: #3b82f6;
        }

        .badge-review {
            background: rgba(139, 92, 246, 0.15);
            color: #8b5cf6;
        }

        .badge-revision {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .badge-completed {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .badge-cancelled {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        .badge-unpaid {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        .badge-pending_verification {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .badge-open {
            background: rgba(59, 130, 246, 0.15);
            color: #3b82f6;
        }

        .badge-replied {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .badge-closed {
            background: rgba(107, 114, 128, 0.15);
            color: #6b7280;
        }

        .badge-high {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        .badge-medium {
            background: rgba(245, 158, 11, 0.15);
            color: #f59e0b;
        }

        .badge-low {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            padding: 10px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-outline {
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #60a5fa;
            padding: 10px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
        }

        .btn-outline:hover {
            background: rgba(59, 130, 246, 0.1);
        }

        .form-input {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(59, 130, 246, 0.15);
            color: #e2e8f0;
            padding: 10px 16px;
            border-radius: 10px;
            width: 100%;
            font-size: 14px;
            transition: all 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-input::placeholder {
            color: #475569;
        }

        .form-label {
            color: #94a3b8;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        .progress-bar {
            background: rgba(59, 130, 246, 0.1);
            border-radius: 10px;
            height: 8px;
            overflow: hidden;
        }

        .progress-bar-fill {
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
            height: 100%;
            border-radius: 10px;
            transition: width 0.5s ease;
        }

        .table-portal {
            width: 100%;
        }

        .table-portal th {
            color: #64748b;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 12px 16px;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
            text-align: left;
        }

        .table-portal td {
            color: #e2e8f0;
            font-size: 14px;
            padding: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        .table-portal tr:hover td {
            background: rgba(59, 130, 246, 0.03);
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.2);
            color: #10b981;
            padding: 12px 20px;
            border-radius: 12px;
            font-size: 14px;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #ef4444;
            padding: 12px 20px;
            border-radius: 12px;
            font-size: 14px;
        }

        .mobile-menu-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                z-index: 50;
                height: 100vh;
                transition: left 0.3s;
            }

            .sidebar.open {
                left: 0;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }

            .sidebar-overlay.open {
                display: block;
            }
        }
    </style>
</head>

<body class="text-gray-100">
    <!-- Mobile Menu Toggle -->
    <button onclick="toggleSidebar()"
        class="mobile-menu-toggle fixed top-4 left-4 z-50 w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center border border-blue-500/15">
        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar w-64 min-h-screen p-5 flex flex-col fixed" id="sidebar">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 mb-8 px-2">
                <img src="<?= base_url('images/devstack_icon.svg') ?>" alt="DevStack" class="h-8"
                    style="filter: brightness(0) invert(1);">
                <span class="text-xl font-bold text-white">Dev<span class="text-blue-400">Stack</span></span>
            </a>

            <!-- Nav Links -->
            <nav class="flex-1 space-y-1">
                <a href="/client" class="sidebar-link <?= $currentRoute === 'client' ? 'active' : '' ?>">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="/client/orders"
                    class="sidebar-link <?= strpos($currentRoute, 'client/orders') !== false ? 'active' : '' ?>">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                        </path>
                    </svg>
                    My Orders
                </a>
                <a href="/client/orders/create"
                    class="sidebar-link <?= strpos($currentRoute, 'orders/create') !== false ? 'active' : '' ?>">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Order Baru
                </a>
                <a href="/client/billing"
                    class="sidebar-link <?= strpos($currentRoute, 'client/billing') !== false ? 'active' : '' ?>">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                        </path>
                    </svg>
                    Billing
                </a>
                <a href="/client/tickets"
                    class="sidebar-link <?= strpos($currentRoute, 'client/tickets') !== false ? 'active' : '' ?>">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    Support
                </a>
            </nav>

            <!-- User Section -->
            <div class="border-t border-white/5 pt-4 mt-4 space-y-1">
                <a href="/" class="sidebar-link">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Website
                </a>
                <a href="/logout" class="sidebar-link text-red-400 hover:text-red-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content-area flex-1 ml-64 p-8">
            <!-- Top Bar -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-white">
                        <?= $title ?? 'Dashboard' ?>
                    </h1>
                    <p class="text-sm text-gray-500 mt-1">Welcome back,
                        <?= esc(session()->get('first_name') ?? 'User') ?>
                    </p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/client/orders/create" class="btn-primary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Order Baru
                    </a>
                </div>
            </div>

            <!-- Flash Messages -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert-success mb-6">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert-error mb-6">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Page Content -->
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
            document.getElementById('sidebarOverlay').classList.toggle('open');
        }
    </script>
</body>

</html>