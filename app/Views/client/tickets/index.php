<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-6">
    <div></div>
    <a href="/client/tickets/create" class="btn-primary">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        New Ticket
    </a>
</div>

<div class="card-portal overflow-hidden">
    <table class="table-portal">
        <thead>
            <tr>
                <th>Ticket #</th>
                <th>Subject</th>
                <th>Project</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Last Update</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($tickets)): ?>
                <tr>
                    <td colspan="7" class="text-center py-12">
                        <p class="text-gray-400">Belum ada ticket</p>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td class="font-mono text-sm">
                            <?= esc($ticket['ticket_number']) ?>
                        </td>
                        <td class="font-medium">
                            <?= esc($ticket['subject']) ?>
                        </td>
                        <td class="text-sm text-gray-400">
                            <?= esc($ticket['project_name'] ?? '-') ?>
                        </td>
                        <td><span class="badge-status badge-<?= $ticket['priority'] ?>">
                                <?= ucfirst($ticket['priority']) ?>
                            </span></td>
                        <td><span class="badge-status badge-<?= $ticket['status'] ?>">
                                <?= ucfirst($ticket['status']) ?>
                            </span></td>
                        <td class="text-sm text-gray-400">
                            <?= date('d M Y H:i', strtotime($ticket['updated_at'])) ?>
                        </td>
                        <td><a href="/client/tickets/<?= $ticket['id'] ?>"
                                class="text-blue-400 hover:text-blue-300 text-sm">View →</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>