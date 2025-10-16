<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        helper(['form', 'url']);
    }

    /**
     * Display login form
     */
    public function login()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'title' => 'Login - SaaS Platform',
            'validation' => \Config\Services::validation()
        ];

        // Clear verification_required flashdata to prevent loops
        if (session()->getFlashdata('verification_required')) {
            session()->setFlashdata('verification_required', null);
        }

        return view('auth/login', $data);
    }

    /**
     * Process login form
     */
    public function authenticate()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        try {
            // Find user by email
            $user = $this->userModel->where('email', $email)->where('is_active', 1)->first();

            if (!$user) {
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            if (!password_verify($password, $user['password'])) {
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }

            // Check if email is verified
            if (empty($user['email_verified_at'])) {
                session()->setFlashdata('verification_required', true);
                return redirect()->to('/login')->with('error', 'Please verify your email address before logging in. Check your inbox for the verification link.');
            }

            // Set session data
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard')->with('success', 'Welcome back!');

        } catch (\Exception $e) {
            // Log the error for debugging
            log_message('error', 'Authentication error: ' . $e->getMessage());

            // Return generic error message
            return redirect()->back()->withInput()->with('error', 'Login failed. Please try again.');
        }
    }

    /**
     * Display registration form
     */
    public function register()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'title' => 'Register - SaaS Platform',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
    }

    /**
     * Process registration form
     */
    public function store()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
            'first_name' => 'max_length[50]',
            'last_name' => 'max_length[50]'
        ];

        $validationMessages = [
            'confirm_password' => [
                'matches' => 'Password confirmation does not match.'
            ]
        ];

        if (!$this->validate($rules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'), // Password will be hashed by User model callback
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'is_active' => 1,
            'email_verified_at' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        try {
             $this->userModel->insert($userData);

             // Send verification email after successful registration
             $this->sendVerificationEmail($this->request->getPost('email'), $this->request->getPost('first_name'));

             return redirect()->to('/login')->with('success', 'Registration successful! Please check your email and click the verification link before logging in.');
         } catch (\Exception $e) {
             // Log the error for debugging
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
     * Display dashboard for authenticated users
     */
    public function dashboard()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to access your dashboard.');
        }

        // Check if email is verified
        $userEmail = session()->get('email');
        $user = $this->userModel->where('email', $userEmail)->first();

        if (empty($user['email_verified_at'])) {
            // Destroy session and redirect to login with verification message
            session()->destroy();
            return redirect()->to('/login')->with('error', 'Your session has expired. Please verify your email address first.');
        }

        $data = [
            'title' => 'Dashboard - SaaS Platform',
            'user' => [
                'username' => session()->get('username'),
                'email' => session()->get('email'),
                'first_name' => session()->get('first_name'),
                'last_name' => session()->get('last_name')
            ]
        ];

        return view('auth/dashboard', $data);
    }

    /**
     * Verify email address
     */
    public function verify($token = null)
    {
        if (empty($token)) {
            return redirect()->to('/login')->with('error', 'Invalid verification token.');
        }

        try {
            // Handle URL decoding - try multiple methods
            $email = rawurldecode($token);

            // If rawurldecode doesn't produce a valid email, try urldecode
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = urldecode($token);
            }

            // Final validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                log_message('error', 'Invalid email format in verification. Token: ' . $token . ', Decoded: ' . $email);
                return redirect()->to('/login')->with('error', 'Invalid email format in verification link.');
            }

            log_message('info', 'Processing email verification for: ' . $email);

            // Find user by email
            $user = $this->userModel->where('email', $email)->where('email_verified_at', null)->first();

            if (!$user) {
                log_message('error', 'User not found or already verified for email: ' . $email);
                return redirect()->to('/login')->with('error', 'Invalid or expired verification token. User may already be verified or not exist.');
            }

            // Mark email as verified
            $this->userModel->update($user['id'], [
                'email_verified_at' => date('Y-m-d H:i:s')
            ]);

            log_message('info', 'Email verified successfully for: ' . $email);
            return redirect()->to('/login')->with('success', 'Email verified successfully! You can now login with your credentials.');

        } catch (\Exception $e) {
            log_message('error', 'Email verification error: ' . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());
            return redirect()->to('/login')->with('error', 'Email verification failed. Please try again or contact support.');
        }
    }

    /**
     * Send verification email
     */
    private function sendVerificationEmail($email, $firstName = 'User')
    {
        try {
            // Get email configuration
            $config = new \Config\Email();

            // Check if SMTP password is set
            $smtpPassword = getenv('email.smtpPassword');
            if (empty($smtpPassword) || strlen($smtpPassword) < 3) {
                log_message('error', 'SMTP password not properly set. Length: ' . strlen($smtpPassword ?? ''));
                log_message('error', 'Please set email.smtpPassword in .env file with your real email password');
                return false;
            }

            $config->SMTPPass = $smtpPassword;

            $emailService = \Config\Services::email();
            $emailService->initialize($config);

            $emailService->setFrom('info@dev-stack.id', 'DevStack');
            $emailService->setTo($email);
            $emailService->setSubject('Verify Your Email Address - DevStack');

            // Prepare email template data
            $userData = [
                'firstName' => $firstName,
                'verificationUrl' => base_url('auth/verify/' . rawurlencode($email))
            ];

            // Use the email template
            $emailTemplate = view('emails/email_verification', $userData);
            $emailService->setMessage($emailTemplate);

            if ($emailService->send()) {
                log_message('info', 'Verification email sent successfully to: ' . $email);
                return true;
            } else {
                $error = $emailService->printDebugger(['headers', 'subject', 'body']);
                log_message('error', 'Email sending failed with CodeIgniter error: ' . $error);
                return false;
            }

        } catch (\Exception $e) {
            log_message('error', 'Exception in sendVerificationEmail: ' . $e->getMessage());
            log_message('error', 'Exception trace: ' . $e->getTraceAsString());
            return false;
        }
    }


    /**
     * Resend email verification
     */
    public function resendVerification()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to access this page.');
        }

        $userEmail = session()->get('email');

        try {
            // Check if email is already verified
            $user = $this->userModel->where('email', $userEmail)->first();

            if ($user && !empty($user['email_verified_at'])) {
                return redirect()->to('/dashboard')->with('info', 'Your email is already verified.');
            }

            // Get user data for email template
            $userData = [
                'firstName' => $user['first_name'] ?? 'User',
                'verificationUrl' => base_url('auth/verify/' . rawurlencode($userEmail))
            ];

            // Send verification email using the new method
            if ($this->sendVerificationEmail($userEmail, $user['first_name'] ?? 'User')) {
                return redirect()->to('/dashboard')->with('success', 'Verification email sent! Please check your inbox.');
            } else {
                return redirect()->to('/dashboard')->with('error', 'Failed to send verification email. Please check your SMTP configuration.');
            }

        } catch (\Exception $e) {
            log_message('error', 'Resend verification error: ' . $e->getMessage());
            return redirect()->to('/dashboard')->with('error', 'Failed to send verification email. Please try again.');
        }
    }
}