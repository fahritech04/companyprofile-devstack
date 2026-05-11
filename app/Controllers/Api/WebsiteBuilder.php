<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Libraries\BlockRegistry;
use App\Libraries\WebsiteTemplateRegistry;
use App\Services\WebsiteService;
use CodeIgniter\HTTP\ResponseInterface;

class WebsiteBuilder extends BaseController
{
    protected WebsiteService $service;

    public function __construct()
    {
        $this->service = service('website');
        helper(['form', 'url']);
    }

    /**
     * Return 401 JSON for unauthenticated requests.
     */
    protected function requireUser(): ?int
    {
        $userId = session()->get('user_id');
        return $userId ? (int) $userId : null;
    }

    protected function unauthorized(): ResponseInterface
    {
        return $this->response->setStatusCode(401)->setJSON([
            'success' => false,
            'message' => 'Unauthorized',
        ]);
    }

    protected function notFound(): ResponseInterface
    {
        return $this->response->setStatusCode(404)->setJSON([
            'success' => false,
            'message' => 'Website not found',
        ]);
    }

    /**
     * Get all websites for the authenticated user.
     */
    public function index(): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $model    = new \App\Models\WebsiteModel();
        $websites = $model->getByUser($userId);

        return $this->response->setJSON([
            'success' => true,
            'data'    => $websites,
        ]);
    }

    /**
     * Create a new website.
     */
    public function create(): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $allowed = implode(',', WebsiteTemplateRegistry::allowedKeys());

        $rules = [
            'site_name' => 'required|min_length[3]|max_length[100]',
            'template'  => 'required|in_list[' . $allowed . ']',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        $id = $this->service->createForUser(
            $userId,
            (string) $this->request->getPost('site_name'),
            (string) $this->request->getPost('template')
        );

        if (!$id) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Failed to create website',
            ]);
        }

        $model = new \App\Models\WebsiteModel();
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website created successfully',
            'data'    => $model->find($id),
        ]);
    }

    /**
     * Get a single website.
     */
    public function show($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $website = $this->service->findOwned((int) $id, $userId);
        if (!$website) {
            return $this->notFound();
        }

        return $this->response->setJSON([
            'success' => true,
            'data'    => $website,
        ]);
    }

    /**
     * Update a website.
     *
     * Note: we read JSON bodies AND urlencoded form bodies, and we treat a
     * present-but-empty value (e.g. meta_description="") as an intentional clear,
     * which the old "if truthy" check incorrectly rejected.
     */
    public function update($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        if (!$this->service->findOwned((int) $id, $userId)) {
            return $this->notFound();
        }

        $allowed = ['site_name', 'meta_title', 'meta_description', 'config', 'pages', 'custom_domain'];
        $payload = $this->collectPayload($allowed);

        if (empty($payload)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'No data to update',
            ]);
        }

        $ok = $this->service->updateOwned((int) $id, $userId, $payload);
        if (!$ok) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Update failed',
            ]);
        }

        $model = new \App\Models\WebsiteModel();
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website updated successfully',
            'data'    => $model->find($id),
        ]);
    }

    /**
     * Update only the pages array.
     */
    public function updatePages($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        if (!$this->service->findOwned((int) $id, $userId)) {
            return $this->notFound();
        }

        $pages = $this->request->getJsonVar('pages') ?? $this->request->getPost('pages');
        if (!is_array($pages) || empty($pages)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'Pages data is required',
            ]);
        }

        $this->service->updatePagesOwned((int) $id, $userId, $pages);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Pages updated successfully',
        ]);
    }

    /**
     * Publish a website.
     */
    public function publish($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        if (!$this->service->publishOwned((int) $id, $userId)) {
            return $this->notFound();
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website published successfully',
        ]);
    }

    /**
     * Archive a website (soft-delete via status).
     */
    public function delete($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        if (!$this->service->archiveOwned((int) $id, $userId)) {
            return $this->notFound();
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Website archived successfully',
        ]);
    }

    /**
     * Collect only whitelisted keys from JSON or POST body.
     * Preserves empty-string values (e.g. clearing meta_description).
     *
     * @param string[] $allowed
     * @return array<string, mixed>
     */
    private function collectPayload(array $allowed): array
    {
        $json = $this->request->getJSON(true) ?? [];
        $post = $this->request->getPost() ?? [];
        $data = [];

        foreach ($allowed as $key) {
            if (array_key_exists($key, $json)) {
                $data[$key] = $json[$key];
            } elseif (array_key_exists($key, $post)) {
                $data[$key] = $post[$key];
            }
        }

        return $data;
    }

    // ─────────────────────────────────────────────────────────────
    // Block-level endpoints
    // ─────────────────────────────────────────────────────────────

    /**
     * GET /api/website-builder/blocks/available
     * Returns the catalog of block types for the block-picker UI.
     */
    public function availableBlocks(): ResponseInterface
    {
        if (!$this->requireUser()) {
            return $this->unauthorized();
        }

        $catalog = [];
        foreach (BlockRegistry::listForPicker() as $key => $meta) {
            $catalog[$key] = [
                'name'   => $meta['name'],
                'icon'   => $meta['icon'],
                'schema' => BlockRegistry::schema($key),
            ];
        }

        return $this->response->setJSON([
            'success' => true,
            'data'    => $catalog,
        ]);
    }

    /**
     * POST /api/website-builder/{id}/pages/{pageId}/blocks
     * Body: { "type": "hero" }
     */
    public function addBlock($websiteId, $pageId): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $type = $this->request->getJsonVar('type') ?? $this->request->getPost('type');
        if (!is_string($type) || $type === '') {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'Block type is required',
            ]);
        }

        if (!BlockRegistry::has($type)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'Unknown block type: ' . $type,
            ]);
        }

        $block = $this->service->addBlock((int) $websiteId, $userId, (string) $pageId, $type);
        if (!$block) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Website or page not found',
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Block added',
            'data'    => $block,
        ]);
    }

    /**
     * POST /api/website-builder/{id}/pages/{pageId}/blocks/{blockId}
     * Body: { "data": { ... } }
     */
    public function updateBlock($websiteId, $pageId, $blockId): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $data = $this->request->getJsonVar('data') ?? $this->request->getPost('data');
        if (!is_array($data)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'Block data must be an object',
            ]);
        }

        $ok = $this->service->updateBlock(
            (int) $websiteId, $userId, (string) $pageId, (string) $blockId, $data
        );

        if (!$ok) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Website, page or block not found',
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Block updated',
        ]);
    }

    /**
     * POST /api/website-builder/{id}/pages/{pageId}/blocks/{blockId}/delete
     */
    public function deleteBlock($websiteId, $pageId, $blockId): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $ok = $this->service->deleteBlock(
            (int) $websiteId, $userId, (string) $pageId, (string) $blockId
        );

        if (!$ok) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Block not found',
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Block deleted',
        ]);
    }

    /**
     * POST /api/website-builder/{id}/pages/{pageId}/blocks/reorder
     * Body: { "order": ["blockId1", "blockId2", ...] }
     */
    public function reorderBlocks($websiteId, $pageId): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $order = $this->request->getJsonVar('order') ?? $this->request->getPost('order');
        if (!is_array($order) || empty($order)) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'Order array is required',
            ]);
        }

        $ids = array_values(array_filter(array_map('strval', $order)));

        $ok = $this->service->reorderBlocks(
            (int) $websiteId, $userId, (string) $pageId, $ids
        );

        if (!$ok) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Website or page not found',
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Blocks reordered',
        ]);
    }
}
