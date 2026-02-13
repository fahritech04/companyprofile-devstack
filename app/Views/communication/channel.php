<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen bg-gray-900 py-6 text-white flex flex-col">
    <div class="max-w-4xl w-full mx-auto px-4 flex-1 flex flex-col">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <a href="<?= base_url('channels') ?>"
                    class="text-gray-400 hover:text-white mb-2 inline-block text-sm">&larr; Back to Channels</a>
                <h1 class="text-2xl font-bold">#
                    <?= esc($channel['name']) ?>
                </h1>
                <p class="text-gray-400 text-sm">
                    <?= esc($channel['description']) ?>
                </p>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 bg-gray-800 rounded-lg p-6 mb-6 overflow-y-auto max-h-[60vh] flex flex-col space-y-4"
            id="messagesContainer">
            <?php if (empty($messages)): ?>
                <div class="text-center text-gray-500 py-10">No messages yet. Be the first to say hi!</div>
            <?php else: ?>
                <?php foreach ($messages as $msg): ?>
                    <div
                        class="flex flex-col <?= $msg['user_id'] == session()->get('user_id') ? 'items-end' : 'items-start' ?>">
                        <div
                            class="bg-gray-700 px-4 py-2 rounded-lg max-w-[80%] <?= $msg['user_id'] == session()->get('user_id') ? 'bg-blue-600' : '' ?>">
                            <?php if ($msg['user_id'] != session()->get('user_id')): ?>
                                <span class="text-xs text-blue-300 font-bold block mb-1">
                                    <?= esc($msg['username'] ?? 'User') ?>
                                </span>
                            <?php endif; ?>
                            <p class="text-sm">
                                <?= esc($msg['content']) ?>
                            </p>
                        </div>
                        <span class="text-[10px] text-gray-500 mt-1">
                            <?= date('M d, H:i', strtotime($msg['created_at'])) ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Input Area -->
        <form action="<?= base_url('channels/' . $channel['id'] . '/messages') ?>" method="post" class="mt-auto">
            <?= csrf_field() ?>
            <div class="flex gap-2">
                <input type="text" name="content" required autocomplete="off"
                    class="flex-1 bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition"
                    placeholder="Type your message...">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                    Send
                </button>
            </div>
        </form>
    </div>
</section>

<script>
    // Scroll to bottom of messages
    const messagesContainer = document.getElementById('messagesContainer');
    if (messagesContainer) {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
</script>
<?= $this->endSection() ?>