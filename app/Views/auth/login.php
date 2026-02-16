<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Modern Dark Login Page -->
<section class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden"
    style="background: linear-gradient(135deg, #040b18 0%, #0a1628 40%, #060e1f 100%);">

    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Grid pattern -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(59,130,246,0.3) 1px, transparent 0); background-size: 40px 40px;">
        </div>
        <!-- Glow orbs -->
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-indigo-500 rounded-full opacity-5 blur-3xl"></div>
        <!-- Top accent line -->
        <div
            class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent">
        </div>
    </div>

    <div class="max-w-md w-full space-y-8 relative z-10">
        <!-- Header with DevStack Logo -->
        <div class="text-center">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <img src="<?= base_url('images/devstack_logo.svg') ?>" alt="DevStack"
                    class="h-12 transition-transform duration-300 hover:scale-105"
                    style="filter: brightness(0) invert(1);">
            </div>
            <h2 class="text-3xl font-bold text-white mb-2" style="font-family: 'Inter', sans-serif;">
                Welcome Back
            </h2>
            <p class="text-gray-400">Sign in to access your dashboard</p>
        </div>

        <!-- Login Form Card -->
        <div class="rounded-2xl p-8 border border-white/10"
            style="background: rgba(255,255,255,0.03); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);">

            <?php if (session()->getFlashdata('error')): ?>
                <div class="mb-6 p-4 rounded-xl border border-red-500/20" style="background: rgba(239,68,68,0.08);">
                    <div class="flex">
                        <svg class="h-5 w-5 text-red-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-red-300 font-medium">
                            <?= session()->getFlashdata('error') ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('verification_required')): ?>
                <div class="mb-6 p-4 rounded-xl border border-yellow-500/20" style="background: rgba(234,179,8,0.08);">
                    <div class="flex">
                        <svg class="h-5 w-5 text-yellow-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm text-yellow-300 font-medium">Email Verification Required</p>
                            <p class="text-xs text-yellow-400/70 mt-1">Please check your email and click the verification
                                link to activate your account.</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-6 p-4 rounded-xl border border-green-500/20" style="background: rgba(34,197,94,0.08);">
                    <div class="flex">
                        <svg class="h-5 w-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-green-300 font-medium">
                            <?= session()->getFlashdata('success') ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <form class="space-y-6" action="<?= base_url('auth/authenticate') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                </path>
                            </svg>
                        </div>
                        <input id="email" name="email" type="email"
                            class="block w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])) ? 'border-red-500/40' : '' ?>"
                            style="background: rgba(255,255,255,0.04);" placeholder="Enter your email"
                            value="<?= old('email') ?>" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])): ?>
                        <p class="mt-2 text-sm text-red-400">
                            <?= session()->getFlashdata('errors')['email'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input id="password" name="password" type="password"
                            class="block w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])) ? 'border-red-500/40' : '' ?>"
                            style="background: rgba(255,255,255,0.04);" placeholder="Enter your password" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])): ?>
                        <p class="mt-2 text-sm text-red-400">
                            <?= session()->getFlashdata('errors')['password'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox"
                            class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-white/20 rounded bg-white/5">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-400">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-400 hover:text-blue-300 transition-colors">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-gray-900 transition-all duration-200 transform hover:scale-[1.02] hover:shadow-lg hover:shadow-blue-500/25">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                        <svg class="h-5 w-5 text-blue-300 group-hover:text-blue-200" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </span>
                    Sign In
                </button>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-400">
                        Don't have an account?
                        <a href="<?= base_url('register') ?>"
                            class="font-semibold text-blue-400 hover:text-blue-300 transition-colors">
                            Create one here
                        </a>
                    </p>
                </div>

            </form>
        </div>

        <!-- Footer -->
        <div class="text-center">
            <p class="text-sm text-gray-500">
                By signing in, you agree to our
                <a href="#" class="font-medium text-blue-400/70 hover:text-blue-400">Terms of Service</a>
                and
                <a href="#" class="font-medium text-blue-400/70 hover:text-blue-400">Privacy Policy</a>
            </p>
        </div>
    </div>
</section>
<?= $this->endSection() ?>