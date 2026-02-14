<?php

namespace App\Models;

use CodeIgniter\Model;

class MilestoneModel extends Model
{
    protected $table = 'milestones';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id',
        'title',
        'description',
        'status',
        'sort_order',
        'due_date',
        'completed_at',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Get milestones for an order
     */
    public function getByOrder(int $orderId)
    {
        return $this->where('order_id', $orderId)
            ->orderBy('sort_order', 'ASC')
            ->findAll();
    }

    /**
     * Get progress percentage for an order
     */
    public function getProgress(int $orderId): int
    {
        $total = $this->where('order_id', $orderId)->countAllResults(false);
        if ($total === 0)
            return 0;

        $completed = $this->where('order_id', $orderId)
            ->where('status', 'completed')
            ->countAllResults(false);

        return (int) round(($completed / $total) * 100);
    }

    /**
     * Create default milestones for a new order
     */
    public function createDefaults(int $orderId, string $category)
    {
        $milestones = [];

        if ($category === 'website') {
            $milestones = [
                ['title' => 'Requirement Analysis', 'description' => 'Menganalisis kebutuhan dan brief dari klien'],
                ['title' => 'UI/UX Design', 'description' => 'Desain tampilan dan user experience'],
                ['title' => 'Frontend Development', 'description' => 'Implementasi tampilan website'],
                ['title' => 'Backend Development', 'description' => 'Implementasi logic dan database'],
                ['title' => 'Testing & QA', 'description' => 'Pengujian fungsionalitas dan bug fixing'],
                ['title' => 'Deployment & Go Live', 'description' => 'Deploy ke server dan launching'],
            ];
        } elseif ($category === 'mobile') {
            $milestones = [
                ['title' => 'Requirement Analysis', 'description' => 'Menganalisis kebutuhan dan brief dari klien'],
                ['title' => 'UI/UX Design', 'description' => 'Desain tampilan mobile app'],
                ['title' => 'App Development', 'description' => 'Implementasi fitur dan logic aplikasi'],
                ['title' => 'API Integration', 'description' => 'Integrasi dengan backend/API'],
                ['title' => 'Testing & QA', 'description' => 'Pengujian di berbagai device'],
                ['title' => 'Publish to Store', 'description' => 'Submit ke Play Store / App Store'],
            ];
        } elseif ($category === 'consulting') {
            $milestones = [
                ['title' => 'Initial Assessment', 'description' => 'Evaluasi awal kondisi teknologi saat ini'],
                ['title' => 'Analysis & Research', 'description' => 'Riset dan analisis mendalam'],
                ['title' => 'Strategy & Recommendations', 'description' => 'Penyusunan strategi dan rekomendasi'],
                ['title' => 'Final Report', 'description' => 'Penyerahan laporan dan presentasi'],
            ];
        }

        foreach ($milestones as $i => $milestone) {
            $this->insert([
                'order_id' => $orderId,
                'title' => $milestone['title'],
                'description' => $milestone['description'],
                'status' => 'pending',
                'sort_order' => $i + 1,
            ]);
        }
    }
}
