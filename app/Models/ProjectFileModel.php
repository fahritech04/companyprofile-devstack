<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectFileModel extends Model
{
    protected $table = 'project_files';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['user_id', 'name', 'file_path', 'size', 'type'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = null; // No updated_at field
}
