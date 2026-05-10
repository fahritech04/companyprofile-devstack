<?php

namespace App\Models;

use CodeIgniter\Model;

class WebsiteModel extends Model
{
    protected $table            = 'websites';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = [
        'user_id',
        'order_id',
        'site_name',
        'slug',
        'template',
        'status',
        'config',
        'pages',
        'assets',
        'domain',
        'custom_domain',
        'meta_title',
        'meta_description',
        'published_at',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'config' => 'json-array',
        'pages'  => 'json-array',
        'assets' => 'json-array',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'site_name' => 'required|min_length[3]|max_length[100]',
        'slug'      => 'required|min_length[3]|max_length[120]|is_unique[websites.slug]',
        'template'  => 'required|in_list[default,business,portfolio,ecommerce,saas,landing]',
        'status'    => 'required|in_list[draft,building,live,suspended,archived]',
    ];

    protected $validationMessages = [
        'site_name' => [
            'required'   => 'Site name is required.',
            'min_length' => 'Site name must be at least 3 characters.',
        ],
        'slug' => [
            'required'   => 'Slug is required.',
            'is_unique'  => 'This slug is already taken.',
        ],
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['generateSlug'];
    protected $beforeUpdate   = ['generateSlug'];

    /**
     * Auto-generate slug from site_name if empty
     */
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['site_name']) && empty($data['data']['slug'])) {
            $data['data']['slug'] = $this->createSlug($data['data']['site_name']);
        }
        return $data;
    }

    /**
     * Create URL-friendly slug
     */
    public function createSlug(string $text): string
    {
        $slug = strtolower(trim($text));
        $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim($slug, '-');

        // Ensure uniqueness
        $originalSlug = $slug;
        $counter = 1;
        while ($this->where('slug', $slug)->countAllResults() > 0) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Get websites by user
     */
    public function getByUser(int $userId): array
    {
        return $this->where('user_id', $userId)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }

    /**
     * Get website by slug
     */
    public function getBySlug(string $slug): ?array
    {
        return $this->where('slug', $slug)->first();
    }

    /**
     * Get active/live websites
     */
    public function getActive(): array
    {
        return $this->whereIn('status', ['live', 'building'])
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }

    /**
     * Update website config
     */
    public function updateConfig(int $id, array $config): bool
    {
        $website = $this->find($id);
        if (!$website) {
            return false;
        }

        $existing = $website['config'] ?? [];
        $merged   = array_merge($existing, $config);

        return $this->update($id, ['config' => $merged]);
    }

    /**
     * Update website pages
     */
    public function updatePages(int $id, array $pages): bool
    {
        return $this->update($id, ['pages' => $pages]);
    }

    /**
     * Publish website
     */
    public function publish(int $id): bool
    {
        return $this->update($id, [
            'status'       => 'live',
            'published_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Get website count by status
     */
    public function countByStatus(int $userId): array
    {
        $result = $this->select('status, COUNT(*) as count')
                       ->where('user_id', $userId)
                       ->groupBy('status')
                       ->findAll();

        $counts = [
            'draft'     => 0,
            'building'  => 0,
            'live'      => 0,
            'suspended' => 0,
            'archived'  => 0,
        ];

        foreach ($result as $row) {
            $counts[$row['status']] = (int) $row['count'];
        }

        return $counts;
    }
}
