<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WebsiteModel;

class Dashboard extends BaseController
{
    protected $websiteModel;

    public function __construct()
    {
        $this->websiteModel = new WebsiteModel();
        helper(['form', 'url']);
    }

    /**
     * Display website builder dashboard
     */
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to access the dashboard.');
        }

        $userId = session()->get('user_id');

        // Get user's websites
        $websites = $this->websiteModel->getByUser($userId);
        $statusCounts = $this->websiteModel->countByStatus($userId);

        $data = [
            'title'         => 'Website Builder Dashboard',
            'websites'      => $websites,
            'statusCounts'  => $statusCounts,
            'totalWebsites' => count($websites),
            'liveWebsites'  => $statusCounts['live'] ?? 0,
            'draftWebsites' => $statusCounts['draft'] ?? 0,
        ];

        return view('dashboard/index', $data);
    }

    /**
     * Show create website form
     */
    public function createWebsite()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to create a website.');
        }

        $data = [
            'title'     => 'Create New Website',
            'templates' => [
                'default'   => ['name' => 'Default', 'icon' => 'M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z'],
                'business'  => ['name' => 'Business', 'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                'portfolio' => ['name' => 'Portfolio', 'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'],
                'ecommerce' => ['name' => 'E-Commerce', 'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'],
                'saas'      => ['name' => 'SaaS', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                'landing'   => ['name' => 'Landing Page', 'icon' => 'M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122'],
            ],
        ];

        return view('dashboard/create-website', $data);
    }

    /**
     * Process create website form
     */
    public function storeWebsite()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to create a website.');
        }

        $rules = [
            'site_name' => 'required|min_length[3]|max_length[100]',
            'template'  => 'required|in_list[default,business,portfolio,ecommerce,saas,landing]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userId   = session()->get('user_id');
        $siteName = $this->request->getPost('site_name');
        $slug     = $this->websiteModel->createSlug($siteName);
        $template = $this->request->getPost('template');

        $data = [
            'user_id'         => $userId,
            'site_name'       => $siteName,
            'slug'            => $slug,
            'template'        => $template,
            'status'          => 'draft',
            'config'          => $this->getDefaultConfig($template),
            'pages'           => $this->getDefaultPages($template),
            'meta_title'      => $siteName,
            'meta_description'=> '',
        ];

        $websiteId = $this->websiteModel->insert($data);

        if (!$websiteId) {
            return redirect()->back()->withInput()->with('error', 'Failed to create website. Please try again.');
        }

        return redirect()->to('/dashboard/websites')->with('success', 'Website "' . esc($siteName) . '" created successfully!');
    }

    /**
     * List user's websites
     */
    public function websites()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to view your websites.');
        }

        $userId   = session()->get('user_id');
        $websites = $this->websiteModel->getByUser($userId);

        $data = [
            'title'    => 'My Websites',
            'websites' => $websites,
        ];

        return view('dashboard/websites', $data);
    }

    /**
     * Edit website
     */
    public function editWebsite($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to edit your website.');
        }

        $userId  = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return redirect()->to('/dashboard/websites')->with('error', 'Website not found.');
        }

        $data = [
            'title'   => 'Edit Website — ' . esc($website['site_name']),
            'website' => $website,
        ];

        return view('dashboard/edit-website', $data);
    }

    /**
     * Get default config by template
     */
    protected function getDefaultConfig(string $template): array
    {
        $configs = [
            'default' => [
                'colors' => [
                    'primary'   => '#3b82f6',
                    'secondary' => '#1e40af',
                    'accent'    => '#60a5fa',
                    'text'      => '#e2e8f0',
                    'bg'        => '#040b18',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1200px', 'padding' => '2rem'],
            ],
            'business' => [
                'colors' => [
                    'primary'   => '#0f172a',
                    'secondary' => '#334155',
                    'accent'    => '#3b82f6',
                    'text'      => '#f8fafc',
                    'bg'        => '#020617',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1280px', 'padding' => '1.5rem'],
            ],
            'portfolio' => [
                'colors' => [
                    'primary'   => '#18181b',
                    'secondary' => '#27272a',
                    'accent'    => '#a855f7',
                    'text'      => '#fafafa',
                    'bg'        => '#09090b',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1400px', 'padding' => '2rem'],
            ],
            'ecommerce' => [
                'colors' => [
                    'primary'   => '#059669',
                    'secondary' => '#047857',
                    'accent'    => '#10b981',
                    'text'      => '#f0fdf4',
                    'bg'        => '#022c22',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1280px', 'padding' => '1.5rem'],
            ],
            'saas' => [
                'colors' => [
                    'primary'   => '#6366f1',
                    'secondary' => '#4f46e5',
                    'accent'    => '#818cf8',
                    'text'      => '#eef2ff',
                    'bg'        => '#1e1b4b',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1200px', 'padding' => '2rem'],
            ],
            'landing' => [
                'colors' => [
                    'primary'   => '#f59e0b',
                    'secondary' => '#d97706',
                    'accent'    => '#fbbf24',
                    'text'      => '#fffbeb',
                    'bg'        => '#451a03',
                ],
                'typography' => ['heading' => 'Inter', 'body' => 'Inter'],
                'layout'     => ['max_width' => '1100px', 'padding' => '2rem'],
            ],
        ];

        return $configs[$template] ?? $configs['default'];
    }

    /**
     * Get default pages by template
     */
    protected function getDefaultPages(string $template): array
    {
        $commonPages = [
            ['id' => 'home',    'name' => 'Home',    'slug' => '/',       'order' => 1,  'visible' => true, 'blocks' => []],
            ['id' => 'about',   'name' => 'About',   'slug' => 'about',   'order' => 2,  'visible' => true, 'blocks' => []],
            ['id' => 'contact', 'name' => 'Contact', 'slug' => 'contact', 'order' => 99, 'visible' => true, 'blocks' => []],
        ];

        $templatePages = [
            'ecommerce' => [
                ['id' => 'products', 'name' => 'Products', 'slug' => 'products', 'order' => 3,  'visible' => true, 'blocks' => []],
                ['id' => 'cart',     'name' => 'Cart',     'slug' => 'cart',     'order' => 98, 'visible' => true, 'blocks' => []],
            ],
            'portfolio' => [
                ['id' => 'works', 'name' => 'Works', 'slug' => 'works', 'order' => 3, 'visible' => true, 'blocks' => []],
            ],
            'saas' => [
                ['id' => 'features', 'name' => 'Features', 'slug' => 'features', 'order' => 3, 'visible' => true, 'blocks' => []],
                ['id' => 'pricing',  'name' => 'Pricing',  'slug' => 'pricing',  'order' => 4, 'visible' => true, 'blocks' => []],
            ],
        ];

        if (isset($templatePages[$template])) {
            return array_merge($commonPages, $templatePages[$template]);
        }

        return $commonPages;
    }
}
