<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\WebsiteTemplateRegistry;
use App\Models\WebsiteModel;
use App\Services\WebsiteService;

class Dashboard extends BaseController
{
    protected WebsiteModel $websiteModel;
    protected WebsiteService $websiteService;

    public function __construct()
    {
        $this->websiteModel   = new WebsiteModel();
        $this->websiteService = service('website');
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

        $userId       = (int) session()->get('user_id');
        $websites     = $this->websiteModel->getByUser($userId);
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

        return view('dashboard/create-website', [
            'title'     => 'Create New Website',
            'templates' => WebsiteTemplateRegistry::listForPicker(),
        ]);
    }

    /**
     * Process create website form
     */
    public function storeWebsite()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to create a website.');
        }

        $allowed = implode(',', WebsiteTemplateRegistry::allowedKeys());

        $rules = [
            'site_name' => 'required|min_length[3]|max_length[100]',
            'template'  => 'required|in_list[' . $allowed . ']',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userId   = (int) session()->get('user_id');
        $siteName = (string) $this->request->getPost('site_name');
        $template = (string) $this->request->getPost('template');

        $websiteId = $this->websiteService->createForUser($userId, $siteName, $template);

        if (!$websiteId) {
            return redirect()->back()->withInput()->with('error', 'Failed to create website. Please try again.');
        }

        return redirect()->to('/dashboard/websites')
            ->with('success', 'Website "' . esc($siteName) . '" created successfully!');
    }

    /**
     * List user's websites
     */
    public function websites()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to view your websites.');
        }

        $userId   = (int) session()->get('user_id');
        $websites = $this->websiteModel->getByUser($userId);

        return view('dashboard/websites', [
            'title'    => 'My Websites',
            'websites' => $websites,
        ]);
    }

    /**
     * Edit website
     */
    public function editWebsite($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to edit your website.');
        }

        $userId  = (int) session()->get('user_id');
        $website = $this->websiteService->findOwned((int) $id, $userId);

        if (!$website) {
            return redirect()->to('/dashboard/websites')->with('error', 'Website not found.');
        }

        return view('dashboard/edit-website', [
            'title'   => 'Edit Website — ' . esc($website['site_name']),
            'website' => $website,
        ]);
    }

    /**
     * Visual page editor. URL: /dashboard/websites/editor/{id}[/{pageId}]
     *
     * Uses the REST API for persistence; this controller just hands the
     * initial website data to the Alpine.js editor.
     */
    public function editor($id, ?string $pageId = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please login to edit your website.');
        }

        $userId  = (int) session()->get('user_id');
        $website = $this->websiteService->findOwned((int) $id, $userId);

        if (!$website) {
            return redirect()->to('/dashboard/websites')->with('error', 'Website not found.');
        }

        $pages = is_array($website['pages'] ?? null) ? $website['pages'] : [];
        if (empty($pages)) {
            return redirect()->to('/dashboard/websites')->with('error', 'This website has no pages.');
        }

        $activePage = null;
        if ($pageId) {
            foreach ($pages as $p) {
                if (($p['id'] ?? null) === $pageId) { $activePage = $p; break; }
            }
        }
        if (!$activePage) {
            foreach ($pages as $p) {
                if (($p['id'] ?? null) === 'home') { $activePage = $p; break; }
            }
            $activePage = $activePage ?? $pages[0];
        }

        return view('dashboard/editor', [
            'title'      => 'Editor — ' . esc($website['site_name']),
            'website'    => $website,
            'pages'      => $pages,
            'activePage' => $activePage,
        ]);
    }
}
