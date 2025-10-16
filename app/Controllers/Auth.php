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

        // Simple demo authentication for testing
        if ($email === 'demo@devstack.com' && $password === 'demo123456') {
            // Set session data for demo user
            session()->set([
                'user_id' => 1,
                'username' => 'demo',
                'email' => 'demo@devstack.com',
                'first_name' => 'Demo',
                'last_name' => 'User',
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard')->with('success', 'Welcome to DevStack SaaS!');
        }

        // Database authentication (when database is ready)
        try {
            // Find user by email
            $user = $this->userModel->where('email', $email)->where('is_active', 1)->first();

            if (!$user || !password_verify($password, $user['password'])) {
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
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
            // Fallback to demo if database not available
            return redirect()->back()->withInput()->with('error', 'Database not configured. Use demo@devstack.com / demo123456 for testing.');
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
            'password' => $this->request->getPost('password'),
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'is_active' => 1,
            'email_verified_at' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        try {
            $this->userModel->insert($userData);

            return redirect()->to('/login')->with('success', 'Registration successful! Please login with your credentials.');
        } catch (\Exception $e) {
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
}