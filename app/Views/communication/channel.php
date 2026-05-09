<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="min-h-screen py-6 text-white flex flex-col relative overflow-hidden"
    style="background: linear-gradient(180deg, #060e1f, #0a1628);">

    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-500 rounded-full opacity-5 blur-3xl"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-indigo-500 rounded-full opacity-5 blur-3xl"></div>
    </div>

    <div class="max-w-4xl w-full mx-auto px-4 flex-1 flex flex-col relative z-10">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between animate-fade-in">
            <div>
                <a href="<?= base_url('channels') ?>"
                    class="text-gray-400 hover:text-blue-400 mb-2 inline-block text-sm transition-colors">&larr; Back to Channels</a>
                <h1 class="text-2xl font-bold text-white">#
                    <?= esc($channel['name']) ?>
                </h1>
                <p class="text-gray-400 text-sm">
                    <?= esc($channel['description']) ?>
                </p>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 glass-card p-6 mb-6 overflow-y-auto max-h-[60vh] flex flex-col space-y-4 card-shine animate-fade-in animate-delay-1"
            id="messagesContainer"
            style="background: rgba(255,255,255,0.02); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.06);">
            <?php if (empty($messages)): ?>
                <div class="text-center text-gray-500 py-10">
                    <svg class="w-12 h-12 text-gray-700 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <p>No messages yet. Be the first to say hi!</p>
                </div>
            <?php else: ?>
                <?php foreach ($messages as $msg): ?>
                    <div class="flex flex-col <?= $msg['user_id'] == session()->get('user_id') ? 'items-end' : 'items-start' ?> animate-fade-in">
                        <div class="px-4 py-3 rounded-2xl max-w-[80%] <?= $msg['user_id'] == session()->get('user_id') ? 'bg-blue-600 text-white' : 'bg-white/5 text-gray-200 border border-white/5' ?>"
                            style="<?= $msg['user_id'] == session()->get('user_id') ? 'box-shadow: 0 4px 20px rgba(59,130,246,0.2);' : '' ?>">
                            <?php if ($msg['user_id'] != session()->get('user_id')): ?>
                                <span class="text-xs text-blue-400 font-bold block mb-1">
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
        <form action="<?= base_url('channels/' . $channel['id'] . '/messages') ?>" method="post" class="mt-auto animate-fade-in animate-delay-2">
            <?= csrf_field() ?>
            <div class="flex gap-2">
                <input type="text" name="content" required autocomplete="off"
                    class="flex-1 rounded-xl px-4 py-3 text-white placeholder-gray-500 transition-all duration-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);"
                    placeholder="Type your message...">
                <button type="submit"
                    class="px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5 text-white"
                    style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
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
