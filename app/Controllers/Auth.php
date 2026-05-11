<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Services\AuthService;

class Auth extends BaseController
{
    protected User $userModel;
    protected AuthService $authService;

    public function __construct()
    {
        $this->userModel   = new User();
        $this->authService = service('auth');
        helper(['form', 'url']);
    }

    /**
     * Display login form
     */
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'title'      => 'Login - SaaS Platform',
            'validation' => \Config\Services::validation(),
        ];

        if (session()->getFlashdata('verification_required')) {
            session()->setFlashdata('verification_required', null);
        }

        return view('auth/login', $data);
    }

    /**
     * Process login form.
     *
     * Security:
     *  - Enforces account lockout after repeated failures.
     *  - Regenerates session ID on success to prevent fixation.
     *  - Uses generic "Invalid credentials" error for both unknown email and wrong password.
     */
    public function authenticate()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        try {
            $user = $this->userModel->where('email', $email)->where('is_active', 1)->first();

            if (!$user) {
                // Generic message to avoid user-enumeration
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            // Account locked?
            if ($this->authService->isLocked($user)) {
                $minutes = (int) ceil($this->authService->lockoutSecondsRemaining($user) / 60);
                return redirect()->back()->withInput()->with(
                    'error',
                    "Too many failed attempts. Please try again in {$minutes} minute(s)."
                );
            }

            if (!password_verify($password, $user['password'])) {
                $this->authService->recordFailedAttempt($user);
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            // Require verified email
            if (empty($user['email_verified_at'])) {
                session()->setFlashdata('verification_required', true);
                return redirect()->to('/login')->with(
                    'error',
                    'Please verify your email address before logging in. Check your inbox for the verification link.'
                );
            }

            // ✅ Success: regenerate session ID (prevents fixation) and set data
            session()->regenerate(true);
            session()->set([
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'email'      => $user['email'],
                'first_name' => $user['first_name'],
                'last_name'  => $user['last_name'],
                'user_role'  => $user['role'] ?? 'user',
                'isLoggedIn' => true,
            ]);

            $this->authService->recordSuccessfulLogin($user, $this->request->getIPAddress());

            return redirect()->to('/dashboard')->with('success', 'Welcome back!');

        } catch (\Throwable $e) {
            log_message('error', 'Authentication error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Login failed. Please try again.');
        }
    }

    /**
     * Display registration form
     */
    public function register()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/register', [
            'title'      => 'Register - SaaS Platform',
            'validation' => \Config\Services::validation(),
        ]);
    }

    /**
     * Process registration form
     */
    public function store()
    {
        $rules = [
            'username'         => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'email'            => 'required|valid_email|max_length[100]|is_unique[users.email]',
            'password'         => 'required|min_length[8]|max_length[128]',
            'confirm_password' => 'required|matches[password]',
            'first_name'       => 'max_length[50]',
            'last_name'        => 'max_length[50]',
        ];

        $validationMessages = [
            'confirm_password' => [
                'matches' => 'Password confirmation does not match.',
            ],
        ];

        if (!$this->validate($rules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Extra password-policy check (complexity)
        $password       = $this->request->getPost('password');
        $policyErrors   = $this->authService->validatePasswordPolicy($password);
        if (!empty($policyErrors)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['password' => implode(' ', $policyErrors)]);
        }

        $userData = [
            'username'           => $this->request->getPost('username'),
            'email'              => $this->request->getPost('email'),
            'password'           => $password, // hashed by User model callback
            'first_name'         => $this->request->getPost('first_name'),
            'last_name'          => $this->request->getPost('last_name'),
            'is_active'          => 1,
            'email_verified_at'  => null,
            'password_changed_at'=> date('Y-m-d H:i:s'),
        ];

        try {
            $userId = $this->userModel->insert($userData, true);
            if (!$userId) {
                throw new \RuntimeException('Insert returned false');
            }

            // Issue secure verification token and email it
            $token = $this->authService->issueVerificationToken((int) $userId);
            $this->sendVerificationEmail($userData['email'], $userData['first_name'] ?: 'User', $token);

            return redirect()->to('/login')->with(
                'success',
                'Registration successful! Please check your email and click the verification link before logging in.'
            );
        } catch (\Throwable $e) {
            log_message('error', 'Registration error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again.');
        }
    }

    /**
     * Logout user
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Redirect to role-appropriate dashboard.
     */
    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to access your dashboard.');
        }

        $userEmail = session()->get('email');
        $user      = $this->userModel->where('email', $userEmail)->first();

        if (empty($user['email_verified_at'])) {
            session()->destroy();
            return redirect()->to('/login')->with(
                'error',
                'Your session has expired. Please verify your email address first.'
            );
        }

        if (($user['role'] ?? 'user') === 'admin') {
            return redirect()->to('/admin');
        }

        return redirect()->to('/client');
    }

    /**
     * Verify email using a random token (not email-in-URL).
     */
    public function verify($token = null)
    {
        if (empty($token)) {
            return redirect()->to('/login')->with('error', 'Invalid verification token.');
        }

        $user = $this->authService->consumeVerificationToken((string) $token);

        if (!$user) {
            return redirect()->to('/login')->with(
                'error',
                'Invalid or expired verification link. Please request a new one.'
            );
        }

        log_message('info', 'Email verified successfully for user id=' . $user['id']);
        return redirect()->to('/login')->with(
            'success',
            'Email verified successfully! You can now login with your credentials.'
        );
    }

    /**
     * Send verification email using a random token.
     */
    private function sendVerificationEmail(string $email, string $firstName, string $token): bool
    {
        try {
            $config = new \Config\Email();

            $smtpPassword = getenv('email.smtpPassword');
            if (empty($smtpPassword) || strlen($smtpPassword) < 3) {
                log_message('error', 'SMTP password not properly set. Length: ' . strlen((string) $smtpPassword));
                return false;
            }
            $config->SMTPPass = $smtpPassword;

            $emailService = \Config\Services::email();
            $emailService->initialize($config);

            $emailService->setFrom('info@dev-stack.id', 'DevStack');
            $emailService->setTo($email);
            $emailService->setSubject('Verify Your Email Address - DevStack');

            $userData = [
                'firstName'       => $firstName,
                'verificationUrl' => base_url('auth/verify/' . $token),
            ];

            $emailTemplate = view('emails/email_verification', $userData);
            $emailService->setMessage($emailTemplate);

            if ($emailService->send()) {
                log_message('info', 'Verification email sent to: ' . $email);
                return true;
            }

            log_message('error', 'Email sending failed: ' . $emailService->printDebugger(['headers', 'subject']));
            return false;

        } catch (\Throwable $e) {
            log_message('error', 'Exception in sendVerificationEmail: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Resend email verification link.
     */
    public function resendVerification()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to access this page.');
        }

        $userEmail = session()->get('email');

        try {
            $user = $this->userModel->where('email', $userEmail)->first();

            if (!$user) {
                return redirect()->to('/dashboard')->with('error', 'User not found.');
            }

            if (!empty($user['email_verified_at'])) {
                return redirect()->to('/dashboard')->with('info', 'Your email is already verified.');
            }

            $token = $this->authService->issueVerificationToken((int) $user['id']);

            if ($this->sendVerificationEmail($userEmail, $user['first_name'] ?? 'User', $token)) {
                return redirect()->to('/dashboard')->with('success', 'Verification email sent! Please check your inbox.');
            }

            return redirect()->to('/dashboard')->with('error', 'Failed to send verification email. Please check your SMTP configuration.');

        } catch (\Throwable $e) {
            log_message('error', 'Resend verification error: ' . $e->getMessage());
            return redirect()->to('/dashboard')->with('error', 'Failed to send verification email. Please try again.');
        }
    }
}
