<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Services\MediaService;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Media library REST API.
 *
 * Mounted at /api/media/* and /uploads/{path} for public serving.
 */
class Media extends BaseController
{
    protected MediaService $service;

    public function __construct()
    {
        $this->service = new MediaService();
        helper(['url']);
    }

    protected function requireUser(): ?int
    {
        $uid = session()->get('user_id');
        return $uid ? (int) $uid : null;
    }

    protected function unauthorized(): ResponseInterface
    {
        return $this->response->setStatusCode(401)->setJSON([
            'success' => false,
            'message' => 'Unauthorized',
        ]);
    }

    /**
     * GET /api/media
     * Query params: limit, offset
     */
    public function index(): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $limit  = max(1, min(200, (int) ($this->request->getGet('limit')  ?? 100)));
        $offset = max(0, (int) ($this->request->getGet('offset') ?? 0));

        return $this->response->setJSON([
            'success' => true,
            'data'    => $this->service->listForUser($userId, $limit, $offset),
            'usage'   => $this->service->usageForUser($userId),
        ]);
    }

    /**
     * POST /api/media/upload
     * Form fields: file (required), website_id (optional)
     */
    public function upload(): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $file = $this->request->getFile('file');
        if (!$file) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => 'No file uploaded (field name: "file").',
            ]);
        }

        $websiteId = $this->request->getPost('website_id');
        $websiteId = $websiteId !== null && $websiteId !== '' ? (int) $websiteId : null;

        try {
            $media = $this->service->storeUpload($file, $userId, $websiteId);
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Upload successful',
                'data'    => $media,
            ]);
        } catch (\InvalidArgumentException $e) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } catch (\RuntimeException $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        } catch (\Throwable $e) {
            log_message('error', 'Media upload crash: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Upload failed. Please try again.',
            ]);
        }
    }

    /**
     * POST /api/media/{id}/delete
     */
    public function delete($id): ResponseInterface
    {
        $userId = $this->requireUser();
        if (!$userId) {
            return $this->unauthorized();
        }

        $ok = $this->service->deleteOwned((int) $id, $userId);
        if (!$ok) {
            return $this->response->setStatusCode(404)->setJSON([
                'success' => false,
                'message' => 'Media not found',
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Deleted',
        ]);
    }

    /**
     * GET /uploads/(:any)
     * Streams a stored file with correct MIME and long cache header.
     * Called from public routes (no auth filter), so any media row is considered public.
     */
    public function serve(string $path)
    {
        $resolved = $this->service->resolvePublicPath($path);
        if (!$resolved) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return $this->response
            ->setHeader('Content-Type', $resolved['mime'])
            ->setHeader('Content-Length', (string) $resolved['size'])
            ->setHeader('Cache-Control', 'public, max-age=31536000, immutable')
            ->setBody(file_get_contents($resolved['path']));
    }
}
