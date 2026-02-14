<?= $this->extend('admin/layout/dashboard') ?>

<?= $this->section('content') ?>

<div class="panel">
    <div class="panel-header">
        <h2 class="text-sm font-semibold text-white">Support Tickets</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="table-dark">
            <thead>
                <tr>
                    <th>Ticket #</th>
                    <th>Client</th>
                    <th>Subject</th>
                    <th>Project</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($tickets)): ?>
                    <tr>
                        <td colspan="8" class="text-center py-12 text-gray-500">No tickets yet</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($tickets as $t): ?>
                        <tr>
                            <td class="font-mono text-xs">
                                <?= esc($t['ticket_number']) ?>
                            </td>
                            <td>
                                <?= esc(($t['first_name'] ?? '') . ' ' . ($t['last_name'] ?? '')) ?>
                            </td>
                            <td class="font-medium text-white">
                                <?= esc($t['subject']) ?>
                            </td>
                            <td class="text-sm text-gray-400">
                                <?= esc($t['project_name'] ?? '-') ?>
                            </td>
                            <td>
                                <?php
                                $pc = ['low' => 'badge-info', 'medium' => 'badge-warning', 'high' => 'badge-danger'];
                                ?>
                                <span class="badge <?= $pc[$t['priority']] ?? 'badge-info' ?>">
                                    <?= ucfirst($t['priority']) ?>
                                </span>
                            </td>
                            <td>
                                <?php
                                $sc = ['open' => 'badge-warning', 'replied' => 'badge-info', 'closed' => 'badge-success'];
                                ?>
                                <span class="badge <?= $sc[$t['status']] ?? 'badge-info' ?>">
                                    <?= ucfirst($t['status']) ?>
                                </span>
                            </td>
                            <td class="text-xs text-gray-400">
                                <?= date('d M Y', strtotime($t['created_at'])) ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/tickets/' . $t['id']) ?>" class="btn-secondary text-xs">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>