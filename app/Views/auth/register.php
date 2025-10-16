<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Modern Register Page -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-50 via-blue-50/40 to-indigo-50/30 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header -->
        <div class="text-center">
            <div class="mx-auto h-16 w-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6">
                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Join DevStack</h2>
            <p class="text-gray-600">Create your account to access the communication platform</p>
        </div>

        <!-- Register Form -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8">
            <?php if (session()->getFlashdata('error')): ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-2xl">
                    <div class="flex">
                        <svg class="h-5 w-5 text-red-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-red-600 font-medium">
                            <?= session()->getFlashdata('error') ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-2xl">
                    <div class="flex">
                        <svg class="h-5 w-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-green-600 font-medium">
                            <?= session()->getFlashdata('success') ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <form class="space-y-6" action="<?= base_url('auth/store') ?>" method="post">
                <?= csrf_field() ?>

                <!-- First Name & Last Name -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            First Name
                        </label>
                        <input id="first_name" name="first_name" type="text"
                               class="block w-full px-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['first_name'])) ? 'border-red-300' : '' ?>"
                               placeholder="John"
                               value="<?= old('first_name') ?>">
                        <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['first_name'])): ?>
                            <p class="mt-2 text-sm text-red-600">
                                <?= session()->getFlashdata('errors')['first_name'] ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Last Name
                        </label>
                        <input id="last_name" name="last_name" type="text"
                               class="block w-full px-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['last_name'])) ? 'border-red-300' : '' ?>"
                               placeholder="Doe"
                               value="<?= old('last_name') ?>">
                        <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['last_name'])): ?>
                            <p class="mt-2 text-sm text-red-600">
                                <?= session()->getFlashdata('errors')['last_name'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Username Field -->
                <div>
                    <label for="username" class="block text-sm font-semibold text-gray-700 mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input id="username" name="username" type="text"
                               class="block w-full pl-12 pr-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['username'])) ? 'border-red-300' : '' ?>"
                               placeholder="johndoe"
                               value="<?= old('username') ?>" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['username'])): ?>
                        <p class="mt-2 text-sm text-red-600">
                            <?= session()->getFlashdata('errors')['username'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                            </svg>
                        </div>
                        <input id="email" name="email" type="email"
                               class="block w-full pl-12 pr-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])) ? 'border-red-300' : '' ?>"
                               placeholder="john@example.com"
                               value="<?= old('email') ?>" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])): ?>
                        <p class="mt-2 text-sm text-red-600">
                            <?= session()->getFlashdata('errors')['email'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <input id="password" name="password" type="password"
                               class="block w-full pl-12 pr-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])) ? 'border-red-300' : '' ?>"
                               placeholder="Minimum 8 characters" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])): ?>
                        <p class="mt-2 text-sm text-red-600">
                            <?= session()->getFlashdata('errors')['password'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="confirm_password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Confirm Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <input id="confirm_password" name="confirm_password" type="password"
                               class="block w-full pl-12 pr-4 py-3 border border-gray-200 rounded-2xl bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['confirm_password'])) ? 'border-red-300' : '' ?>"
                               placeholder="Confirm your password" required>
                    </div>
                    <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['confirm_password'])): ?>
                        <p class="mt-2 text-sm text-red-600">
                            <?= session()->getFlashdata('errors')['confirm_password'] ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-semibold rounded-2xl text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-[1.02]">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                        <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </span>
                    Create Account
                </button>

                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="<?= base_url('login') ?>" class="font-semibold text-blue-600 hover:text-blue-500 transition-colors">
                            Sign in here
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="text-center">
            <p class="text-sm text-gray-500">
                By creating an account, you agree to our
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Terms of Service</a>
                and
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Privacy Policy</a>
            </p>
        </div>
    </div>
</section>
<?= $this->endSection() ?>