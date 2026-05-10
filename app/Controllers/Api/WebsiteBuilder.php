<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\WebsiteModel;
use CodeIgniter\HTTP\ResponseInterface;

class WebsiteBuilder extends BaseController
{
    protected $websiteModel;

    public function __construct()
    {
        $this->websiteModel = new WebsiteModel();
        helper(['form', 'url']);
    }

    /**
     * Get all websites for authenticated user
     */
    public function index(): ResponseInterface
    {
        $userId = session()->get('user_id');
        if (!$userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unauthorized',
            ])->setStatusCode(401);
        }

        $websites = $this->websiteModel->getByUser($userId);

        return $this->response->setJSON([
            'success' => true,
            'data'    => $websites,
        ]);
    }

    /**
     * Create new website
     */
    public function create(): ResponseInterface
    {
        $userId = session()->get('user_id');
        if (!$userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unauthorized',
            ])->setStatusCode(401);
        }

        $rules = [
            'site_name' => 'required|min_length[3]|max_length[100]',
            'template'  => 'required|in_list[default,business,portfolio,ecommerce,saas,landing]',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors'  => $this->validator->getErrors(),
            ])->setStatusCode(422);
        }

        $siteName = $this->request->getPost('site_name');
        $slug     = $this->websiteModel->createSlug($siteName);

        $data = [
            'user_id'     => $userId,
            'site_name'   => $siteName,
            'slug'        => $slug,
            'template'    => $this->request->getPost('template'),
            'status'      => 'draft',
            'config'      => $this->getDefaultConfig($this->request->getPost('template')),
            'pages'       => $this->getDefaultPages($this->request->getPost('template')),
            'meta_title'  => $siteName,
        ];

        $websiteId = $this->websiteModel->insert($data);

        if (!$websiteId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to create website',
            ])->setStatusCode(500);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website created successfully',
            'data'    => $this->websiteModel->find($websiteId),
        ]);
    }

    /**
     * Get single website
     */
    public function show($id): ResponseInterface
    {
        $userId = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Website not found',
            ])->setStatusCode(404);
        }

        return $this->response->setJSON([
            'success' => true,
            'data'    => $website,
        ]);
    }

    /**
     * Update website
     */
    public function update($id): ResponseInterface
    {
        $userId = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Website not found',
            ])->setStatusCode(404);
        }

        $data = [];

        if ($this->request->getPost('site_name')) {
            $data['site_name'] = $this->request->getPost('site_name');
        }
        if ($this->request->getPost('meta_title')) {
            $data['meta_title'] = $this->request->getPost('meta_title');
        }
        if ($this->request->getPost('meta_description')) {
            $data['meta_description'] = $this->request->getPost('meta_description');
        }
        if ($this->request->getPost('config')) {
            $data['config'] = $this->request->getPost('config');
        }
        if ($this->request->getPost('pages')) {
            $data['pages'] = $this->request->getPost('pages');
        }
        if ($this->request->getPost('custom_domain')) {
            $data['custom_domain'] = $this->request->getPost('custom_domain');
        }

        if (empty($data)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No data to update',
            ])->setStatusCode(422);
        }

        $this->websiteModel->update($id, $data);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website updated successfully',
            'data'    => $this->websiteModel->find($id),
        ]);
    }

    /**
     * Update website pages
     */
    public function updatePages($id): ResponseInterface
    {
        $userId = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Website not found',
            ])->setStatusCode(404);
        }

        $pages = $this->request->getPost('pages');
        if (!$pages) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Pages data is required',
            ])->setStatusCode(422);
        }

        $this->websiteModel->updatePages($id, $pages);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Pages updated successfully',
        ]);
    }

    /**
     * Publish website
     */
    public function publish($id): ResponseInterface
    {
        $userId = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Website not found',
            ])->setStatusCode(404);
        }

        $this->websiteModel->publish($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website published successfully',
        ]);
    }

    /**
     * Delete website
     */
    public function delete($id): ResponseInterface
    {
        $userId = session()->get('user_id');
        $website = $this->websiteModel->find($id);

        if (!$website || $website['user_id'] != $userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Website not found',
            ])->setStatusCode(404);
        }

        $this->websiteModel->update($id, ['status' => 'archived']);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website archived successfully',
        ]);
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
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1200px',
                    'padding'   => '2rem',
                ],
            ],
            'business' => [
                'colors' => [
                    'primary'   => '#0f172a',
                    'secondary' => '#334155',
                    'accent'    => '#3b82f6',
                    'text'      => '#f8fafc',
                    'bg'        => '#020617',
                ],
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1280px',
                    'padding'   => '1.5rem',
                ],
            ],
            'portfolio' => [
                'colors' => [
                    'primary'   => '#18181b',
                    'secondary' => '#27272a',
                    'accent'    => '#a855f7',
                    'text'      => '#fafafa',
                    'bg'        => '#09090b',
                ],
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1400px',
                    'padding'   => '2rem',
                ],
            ],
            'ecommerce' => [
                'colors' => [
                    'primary'   => '#059669',
                    'secondary' => '#047857',
                    'accent'    => '#10b981',
                    'text'      => '#f0fdf4',
                    'bg'        => '#022c22',
                ],
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1280px',
                    'padding'   => '1.5rem',
                ],
            ],
            'saas' => [
                'colors' => [
                    'primary'   => '#6366f1',
                    'secondary' => '#4f46e5',
                    'accent'    => '#818cf8',
                    'text'      => '#eef2ff',
                    'bg'        => '#1e1b4b',
                ],
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1200px',
                    'padding'   => '2rem',
                ],
            ],
            'landing' => [
                'colors' => [
                    'primary'   => '#f59e0b',
                    'secondary' => '#d97706',
                    'accent'    => '#fbbf24',
                    'text'      => '#fffbeb',
                    'bg'        => '#451a03',
                ],
                'typography' => [
                    'heading' => 'Inter',
                    'body'    => 'Inter',
                ],
                'layout' => [
                    'max_width' => '1100px',
                    'padding'   => '2rem',
                ],
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
            [
                'id'      => 'home',
                'name'    => 'Home',
                'slug'    => '/',
                'order'   => 1,
                'visible' => true,
                'blocks'  => [],
            ],
            [
                'id'      => 'about',
                'name'    => 'About',
                'slug'    => 'about',
                'order'   => 2,
                'visible' => true,
                'blocks'  => [],
            ],
            [
                'id'      => 'contact',
                'name'    => 'Contact',
                'slug'    => 'contact',
                'order'   => 99,
                'visible' => true,
                'blocks'  => [],
            ],
        ];

        $templatePages = [
            'ecommerce' => [
                [
                    'id'      => 'products',
                    'name'    => 'Products',
                    'slug'    => 'products',
                    'order'   => 3,
                    'visible' => true,
                    'blocks'  => [],
                ],
                [
                    'id'      => 'cart',
                    'name'    => 'Cart',
                    'slug'    => 'cart',
                    'order'   => 98,
                    'visible' => true,
                    'blocks'  => [],
                ],
            ],
            'portfolio' => [
                [
                    'id'      => 'works',
                    'name'    => 'Works',
                    'slug'    => 'works',
                    'order'   => 3,
                    'visible' => true,
                    'blocks'  => [],
                ],
            ],
            'saas' => [
                [
                    'id'      => 'features',
                    'name'    => 'Features',
                    'slug'    => 'features',
                    'order'   => 3,
                    'visible' => true,
                    'blocks'  => [],
                ],
                [
                    'id'      => 'pricing',
                    'name'    => 'Pricing',
                    'slug'    => 'pricing',
                    'order'   => 4,
                    'visible' => true,
                    'blocks'  => [],
                ],
            ],
        ];

        if (isset($templatePages[$template])) {
            return array_merge($commonPages, $templatePages[$template]);
        }

        return $commonPages;
    }
}
