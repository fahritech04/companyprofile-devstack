<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicePackageModel extends Model
{
    protected $table = 'service_packages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'category',
        'name',
        'slug',
        'price',
        'is_custom_price',
        'description',
        'features',
        'duration_days',
        'max_revisions',
        'is_active',
        'sort_order',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Get active packages grouped by category
     */
    public function getActiveByCategory()
    {
        $packages = $this->where('is_active', 1)
            ->orderBy('sort_order', 'ASC')
            ->findAll();

        $grouped = [];
        foreach ($packages as $pkg) {
            $grouped[$pkg['category']][] = $pkg;
        }
        return $grouped;
    }

    /**
     * Get packages by category
     */
    public function getByCategory(string $category)
    {
        return $this->where('category', $category)
            ->where('is_active', 1)
            ->orderBy('sort_order', 'ASC')
            ->findAll();
    }

    /**
     * Decode features JSON
     */
    public function getFeatures(array $package): array
    {
        if (!empty($package['features'])) {
            return json_decode($package['features'], true) ?? [];
        }
        return [];
    }
}
