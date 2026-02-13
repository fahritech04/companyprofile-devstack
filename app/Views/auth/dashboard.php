<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- SaaS Dashboard -->
<section class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/40 to-indigo-50/30 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Dashboard Header -->
        <div class="mb-8">
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex items-center space-x-4">
                        <div
                            class="h-16 w-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">
                                Welcome back, <?= $user['first_name'] ?? $user['username'] ?>! 👋
                            </h1>
                            <p class="text-gray-600">Ready to collaborate on amazing projects?</p>
                        </div>
                    </div>

                    <!-- Email Verification Status -->
                    <div class="mt-4 md:mt-0">
                        <?php
                        $userModel = new \App\Models\User();
                        $currentUser = $userModel->where('email', session()->get('email'))->first();
                        $isVerified = !empty($currentUser['email_verified_at']);
                        ?>

                        <?php if ($isVerified): ?>
                            <div class="flex items-center space-x-2 px-4 py-2 bg-green-50 rounded-2xl">
                                <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium text-green-800">Email Verified</span>
                            </div>
                        <?php else: ?>
                            <div class="space-y-2">
                                <div class="flex items-center space-x-2 px-4 py-2 bg-yellow-50 rounded-2xl">
                                    <svg class="h-5 w-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-yellow-800">Email Not Verified</span>
                                </div>
                                <form action="<?= base_url('auth/resend-verification') ?>" method="post" class="inline">
                                    <?= csrf_field() ?>
                                    <button type="submit"
                                        class="w-full px-4 py-2 bg-blue-600 text-white text-sm rounded-xl hover:bg-blue-700 transition-colors">
                                        Resend Verification
                                    </button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- User Menu -->
                    <div class="mt-4 md:mt-0 flex items-center space-x-4">
                        <div class="relative">
                            <button
                                class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 transition-colors">
                                <div class="h-8 w-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-sm font-medium text-blue-600">
                                        <?= strtoupper(substr($user['first_name'] ?? $user['username'], 0, 1)) ?>
                                    </span>
                                </div>
                                <span class="font-medium">
                                    <?= $user['first_name'] ?? $user['username'] ?>
                                </span>
                            </button>
                        </div>
                        <a href="<?= base_url('logout') ?>"
                            class="px-4 py-2 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition-colors">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition-shadow">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 bg-blue-100 rounded-2xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Communication Hub</h3>
                        <p class="text-gray-600 text-sm">Join project channels and collaborate</p>
                    </div>
                </div>
                <a href="<?= base_url('communication') ?>"
                    class="mt-4 block w-full bg-blue-600 text-white text-center py-3 rounded-2xl hover:bg-blue-700 transition-colors">
                    Open Hub
                </a>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition-shadow">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 bg-green-100 rounded-2xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Project Files</h3>
                        <p class="text-gray-600 text-sm">Access shared documents and resources</p>
                    </div>
                </div>
                <a href="<?= base_url('project-files') ?>"
                    class="mt-4 block w-full bg-green-600 text-white text-center py-3 rounded-2xl hover:bg-green-700 transition-colors">
                    View Files
                </a>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition-shadow">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 bg-purple-100 rounded-2xl flex items-center justify-center">
                        <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Activity Feed</h3>
                        <p class="text-gray-600 text-sm">See recent updates and notifications</p>
                    </div>
                </div>
                <a href="<?= base_url('activity-feed') ?>"
                    class="mt-4 block w-full bg-purple-600 text-white text-center py-3 rounded-2xl hover:bg-purple-700 transition-colors">
                    View Activity
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Recent Activity</h2>
                <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">View All</button>
            </div>

            <div class="space-y-4">
                <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-2xl">
                    <div class="h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Welcome to DevStack Communication Platform!</p>
                        <p class="text-xs text-gray-600">Your account has been successfully created</p>
                    </div>
                    <span class="text-xs text-gray-500">Just now</span>
                </div>

                <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-2xl">
                    <div class="h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Email verified successfully</p>
                        <p class="text-xs text-gray-600">Your account is now fully activated</p>
                    </div>
                    <span class="text-xs text-gray-500">2 minutes ago</span>
                </div>
            </div>
        </div>

        <!-- Getting Started Guide -->
        <div class="mt-8 bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl shadow-xl p-8 text-white">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-2">🚀 Getting Started with DevStack</h3>
                    <p class="text-blue-100">Follow these steps to make the most of your collaboration experience</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <button
                        class="bg-white text-blue-600 px-6 py-3 rounded-2xl font-semibold hover:bg-blue-50 transition-colors">
                        Start Tutorial
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>