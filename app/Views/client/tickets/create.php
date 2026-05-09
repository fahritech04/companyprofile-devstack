<?= $this->extend('client/layout') ?>

<?= $this->section('content') ?>

<a href="/client/tickets" class="text-sm text-gray-400 hover:text-blue-400 flex items-center gap-2 mb-6 transition-colors animate-fade-in">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Kembali
</a>

<div class="card-portal p-6 mb-6 card-shine animate-fade-in animate-delay-1">
    <h2 class="text-xl font-bold text-white mb-4">New Support Ticket</h2>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert-error mb-4">
            <ul class="list-disc list-inside text-sm">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li>
                        <?= esc($error) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/client/tickets/store" method="post">
        <?= csrf_field() ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="form-label">Subject *</label>
                <input type="text" name="subject" class="form-input" placeholder="Masukkan subject" required
                    value="<?= old('subject') ?>">
            </div>
            <div>
                <label class="form-label">Priority</label>
                <select name="priority" class="form-input">
                    <option value="low">Low</option>
                    <option value="medium" selected>Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label">Related Project (opsional)</label>
            <select name="order_id" class="form-input">
                <option value="">— Tidak terkait project —</option>
                <?php if (!empty($orders)): ?>
                    <?php foreach ($orders as $order): ?>
                        <option value="<?= $order['id'] ?>">
                            <?= esc($order['order_number'] . ' - ' . $order['project_name']) ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>

        <div class="mb-6">
            <label class="form-label">Message *</label>
            <textarea name="message" rows="6" class="form-input" placeholder="Jelaskan masalah atau pertanyaan Anda..."
                required><?= old('message') ?></textarea>
        </div>

        <button type="submit" class="btn-primary transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
            </svg>
            Submit Ticket
        </button>
    </form>
</div>

<?= $this->endSection() ?>
