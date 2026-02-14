<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<div class="card-portal overflow-hidden">
    <table class="table-portal">
        <thead>
            <tr>
                <th>Invoice #</th>
                <th>Project</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Due Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($invoices)): ?>
                <tr>
                    <td colspan="7" class="text-center py-12">
                        <p class="text-gray-400">Belum ada invoice</p>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($invoices as $inv): ?>
                    <tr>
                        <td class="font-mono text-sm">
                            <?= esc($inv['invoice_number']) ?>
                        </td>
                        <td>
                            <?= esc($inv['project_name'] ?? '-') ?>
                        </td>
                        <td><span class="text-sm">
                                <?= ucfirst($inv['type']) ?>
                            </span></td>
                        <td class="font-semibold">Rp
                            <?= number_format($inv['amount'], 0, ',', '.') ?>
                        </td>
                        <td><span class="badge-status badge-<?= $inv['status'] ?>">
                                <?= ucfirst(str_replace('_', ' ', $inv['status'])) ?>
                            </span></td>
                        <td class="text-sm text-gray-400">
                            <?= $inv['due_date'] ? date('d M Y', strtotime($inv['due_date'])) : '-' ?>
                        </td>
                        <td>
                            <a href="/client/billing/<?= $inv['id'] ?>" class="text-blue-400 hover:text-blue-300 text-sm">Detail
                                →</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>