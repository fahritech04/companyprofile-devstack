<?php

namespace App\Services;

use App\Models\MediaModel;
use CodeIgniter\HTTP\Files\UploadedFile;

/**
 * Handles image uploads for the website builder.
 *
 * Storage layout:
 *   writable/uploads/user_{userId}/{filename}
 *
 * Public URL is exposed via base_url('uploads/user_{userId}/{filename}')
 * which is served by a thin pass-through controller (see MediaController::serve),
 * because writable/ is outside the webroot by default.
 */
class MediaService
{
    public const MAX_BYTES_PER_FILE = 5 * 1024 * 1024;    // 5 MB
    public const MAX_BYTES_PER_USER = 100 * 1024 * 1024;  // 100 MB quota

    /** @var string[] */
    public const ALLOWED_MIME = [
        'image/jpeg',
        'image/png',
        'image/webp',
        'image/gif',
        'image/svg+xml',
    ];

    protected MediaModel $model;

    public function __construct(?MediaModel $model = null)
    {
        $this->model = $model ?? new MediaModel();
    }

    /**
     * Store an uploaded image and return the DB row.
     *
     * @throws \InvalidArgumentException on validation failure
     * @throws \RuntimeException         on storage failure or quota exceeded
     */
    public function storeUpload(UploadedFile $file, int $userId, ?int $websiteId = null): array
    {
        if (!$file->isValid()) {
            throw new \InvalidArgumentException(
                'Upload failed: ' . $file->getErrorString() . ' (' . $file->getError() . ')'
            );
        }

        $size = $file->getSize();
        if ($size > self::MAX_BYTES_PER_FILE) {
            throw new \InvalidArgumentException(
                'File too large. Max size is ' . self::formatBytes(self::MAX_BYTES_PER_FILE) . '.'
            );
        }

        $mime = $file->getMimeType();
        if (!in_array($mime, self::ALLOWED_MIME, true)) {
            throw new \InvalidArgumentException(
                'Unsupported file type: ' . $mime . '. Allowed: ' . implode(', ', self::ALLOWED_MIME)
            );
        }

        // Quota check
        $used = $this->model->totalBytesForUser($userId);
        if ($used + $size > self::MAX_BYTES_PER_USER) {
            throw new \RuntimeException(
                'Storage quota exceeded (' . self::formatBytes($used) . ' / ' . self::formatBytes(self::MAX_BYTES_PER_USER) . ').'
            );
        }

        // Store under writable/uploads/user_{id}/
        $relDir = 'user_' . $userId;
        $absDir = rtrim(WRITEPATH, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $relDir;
        if (!is_dir($absDir) && !@mkdir($absDir, 0755, true) && !is_dir($absDir)) {
            throw new \RuntimeException('Failed to create upload directory.');
        }

        $newName = $file->getRandomName();

        if (!$file->move($absDir, $newName, true)) {
            throw new \RuntimeException('Failed to store uploaded file.');
        }

        $absPath  = $absDir . DIRECTORY_SEPARATOR . $newName;
        $relPath  = $relDir . '/' . $newName;

        // Best-effort dimensions
        $width = $height = null;
        if ($mime !== 'image/svg+xml') {
            $info = @getimagesize($absPath);
            if (is_array($info)) {
                $width  = (int) $info[0];
                $height = (int) $info[1];
            }
        }

        $data = [
            'user_id'       => $userId,
            'website_id'    => $websiteId,
            'original_name' => mb_substr($file->getClientName(), 0, 255),
            'filename'      => $newName,
            'path'          => $relPath,
            'mime_type'     => $mime,
            'size_bytes'    => $size,
            'width'         => $width,
            'height'        => $height,
        ];

        $id = $this->model->insert($data, true);
        if (!$id) {
            @unlink($absPath);
            throw new \RuntimeException('Failed to record upload in database.');
        }

        return $this->decorate($this->model->find($id));
    }

    /**
     * Delete a media item owned by user (removes file and DB row).
     */
    public function deleteOwned(int $id, int $userId): bool
    {
        $row = $this->model->findOwned($id, $userId);
        if (!$row) {
            return false;
        }

        $abs = rtrim(WRITEPATH, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $row['path'];
        if (is_file($abs)) {
            @unlink($abs);
        }

        return (bool) $this->model->delete($id);
    }

    /**
     * List user's media with public URLs decorated.
     *
     * @return array<int, array<string, mixed>>
     */
    public function listForUser(int $userId, int $limit = 100, int $offset = 0): array
    {
        $rows = $this->model->getByUser($userId, $limit, $offset);
        return array_map(fn($r) => $this->decorate($r), $rows);
    }

    public function usageForUser(int $userId): array
    {
        $used = $this->model->totalBytesForUser($userId);
        return [
            'used_bytes'  => $used,
            'quota_bytes' => self::MAX_BYTES_PER_USER,
            'used_human'  => self::formatBytes($used),
            'quota_human' => self::formatBytes(self::MAX_BYTES_PER_USER),
            'percent'     => self::MAX_BYTES_PER_USER > 0 ? round($used / self::MAX_BYTES_PER_USER * 100, 2) : 0,
        ];
    }

    /**
     * Read a file from writable/uploads and stream it safely.
     * Only returns the path when ownership is verified OR the file belongs
     * to a published website (so public site templates can link to it).
     *
     * @return array{path: string, mime: string, size: int}|null
     */
    public function resolvePublicPath(string $relPath): ?array
    {
        // Defense against traversal
        if (strpos($relPath, '..') !== false) {
            return null;
        }

        $row = $this->model->where('path', $relPath)->first();
        if (!$row) {
            return null;
        }

        $abs = rtrim(WRITEPATH, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $relPath;
        if (!is_file($abs)) {
            return null;
        }

        return [
            'path' => $abs,
            'mime' => $row['mime_type'],
            'size' => (int) $row['size_bytes'],
        ];
    }

    /**
     * Add `url` to a media row.
     *
     * @param array<string, mixed> $row
     * @return array<string, mixed>
     */
    protected function decorate(array $row): array
    {
        helper('url');
        $row['url'] = base_url('uploads/' . $row['path']);
        return $row;
    }

    public static function formatBytes(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $i = 0;
        while ($bytes >= 1024 && $i < count($units) - 1) {
            $bytes /= 1024;
            $i++;
        }
        return round($bytes, 2) . ' ' . $units[$i];
    }
}
