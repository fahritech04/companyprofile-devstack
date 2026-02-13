<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'title',
        'slug',
        'description',
        'image',
        'category',
        'client_name',
        'demo_url',
        'is_featured',
        'sort_order'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'title' => 'required|max_length[255]',
        'slug' => 'required|max_length[255]|is_unique[portfolios.slug,id,{id}]',
    ];

    public function getFeatured()
    {
        return $this->where('is_featured', 1)->orderBy('sort_order', 'ASC')->findAll();
    }

    public function getByCategory($category)
    {
        return $this->where('category', $category)->orderBy('sort_order', 'ASC')->findAll();
    }
}
