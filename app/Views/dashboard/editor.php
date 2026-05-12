<?php
/**
 * @var array $website     full website row (with pages, config)
 * @var array $pages       pages[] from the website
 * @var array $activePage  the page being edited
 */
$websiteJson    = json_encode($website, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
$activePageJson = json_encode($activePage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
$csrfName       = csrf_token();
$csrfHash       = csrf_hash();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-name" content="<?= esc($csrfName, 'attr') ?>">
    <meta name="csrf-hash" content="<?= esc($csrfHash, 'attr') ?>">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/editor.css') ?>">
    <script defer src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
</head>
<body class="ed-body"
      x-data='editor(<?= $websiteJson ?>, <?= $activePageJson ?>)'
      x-init="init()">

<!-- ═══════ TOP BAR ═══════ -->
<header class="ed-topbar">
    <div class="ed-topbar__left">
        <a href="<?= base_url('dashboard/websites') ?>" class="ed-btn ed-btn--ghost" title="Back">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            Back
        </a>
        <div class="ed-divider"></div>
        <div class="ed-site-name">
            <strong x-text="website.site_name"></strong>
            <span class="ed-status" :class="'is-' + website.status" x-text="website.status"></span>
        </div>
    </div>

    <div class="ed-topbar__center">
        <select class="ed-select" x-model="activePageId" @change="switchPage($event.target.value)">
            <template x-for="p in website.pages" :key="p.id">
                <option :value="p.id" x-text="p.name"></option>
            </template>
        </select>
    </div>

    <div class="ed-topbar__right">
        <span class="ed-save-status" :class="{'is-dirty': dirty, 'is-saving': saving}">
            <template x-if="saving">Saving…</template>
            <template x-if="!saving && dirty">Unsaved changes</template>
            <template x-if="!saving && !dirty">All changes saved</template>
        </span>
        <a :href="'/s/' + website.slug" target="_blank" class="ed-btn ed-btn--ghost" title="Preview in new tab">
            Preview
        </a>
        <button type="button" class="ed-btn ed-btn--primary" @click="publish()" :disabled="publishing">
            <span x-show="!publishing">Publish</span>
            <span x-show="publishing">Publishing…</span>
        </button>
    </div>
</header>

<!-- ═══════ WORKSPACE ═══════ -->
<div class="ed-workspace">

    <!-- Left: block picker -->
    <aside class="ed-panel ed-panel--left">
        <div class="ed-panel__header">
            <h3>Add Block</h3>
        </div>
        <div class="ed-picker">
            <template x-for="(block, key) in blockCatalog" :key="key">
                <button type="button" class="ed-picker__item" @click="addBlock(key)">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" :d="block.icon"/>
                    </svg>
                    <span x-text="block.name"></span>
                </button>
            </template>
            <div class="ed-picker__empty" x-show="Object.keys(blockCatalog).length === 0">
                Loading…
            </div>
        </div>

        <div class="ed-panel__header" style="margin-top: 1.5rem;">
            <h3>Media</h3>
            <button type="button" class="ed-btn-mini" @click="$refs.fileInput.click()">Upload</button>
            <input type="file" x-ref="fileInput" accept="image/*" style="display:none" @change="uploadFile($event)">
        </div>
        <div class="ed-media-grid">
            <template x-for="m in media" :key="m.id">
                <div class="ed-media-item" :title="m.original_name"
                     draggable="true"
                     @dragstart="onMediaDragStart($event, m)">
                    <img :src="m.url" :alt="m.original_name" loading="lazy">
                </div>
            </template>
            <div class="ed-media-empty" x-show="media.length === 0">
                No uploads yet
            </div>
        </div>
    </aside>

    <!-- Center: canvas with live preview iframe -->
    <main class="ed-canvas">
        <div class="ed-canvas__header">
            <div class="ed-block-list" x-show="activePage">
                <div class="ed-block-list__title">Blocks on "<span x-text="activePage?.name"></span>"</div>
                <ul x-ref="blocksList" class="ed-block-list__ul">
                    <template x-for="b in activePage?.blocks || []" :key="b.id">
                        <li class="ed-block-list__item"
                            :class="{'is-selected': selectedBlockId === b.id}"
                            :data-id="b.id"
                            @click="selectBlock(b.id)">
                            <span class="ed-drag-handle" title="Drag to reorder">⠿</span>
                            <span class="ed-block-list__type" x-text="b.type"></span>
                            <button type="button" class="ed-block-list__del" @click.stop="deleteBlock(b.id)" title="Delete">×</button>
                        </li>
                    </template>
                    <li x-show="(activePage?.blocks || []).length === 0" class="ed-block-list__empty">
                        No blocks on this page yet. Add one from the left.
                    </li>
                </ul>
            </div>
        </div>

        <div class="ed-preview-wrap">
            <iframe class="ed-preview"
                    :src="'/s/' + website.slug + '/' + (activePageSlug || '')"
                    x-ref="preview"
                    title="Preview"></iframe>
        </div>
    </main>

    <!-- Right: block inspector (auto-generated form) -->
    <aside class="ed-panel ed-panel--right">
        <div class="ed-panel__header">
            <h3>Inspector</h3>
        </div>

        <div class="ed-inspector" x-show="selectedBlock">
            <div class="ed-inspector__head">
                <span class="ed-inspector__type" x-text="selectedBlock?.type"></span>
            </div>

            <form @submit.prevent="" class="ed-form">
                <template x-for="(field, key) in selectedSchema" :key="key">
                    <div class="ed-field">
                        <label class="ed-field__label" x-text="field.label || key"></label>

                        <!-- text / url / image (string inputs) -->
                        <template x-if="['text','url','image'].includes(field.type)">
                            <div class="ed-field__input-wrap">
                                <input :type="field.type === 'url' ? 'url' : 'text'"
                                       class="ed-input"
                                       :value="getFieldValue(key)"
                                       @input="setField(key, $event.target.value)"
                                       @dragover.prevent
                                       @drop="onImageDrop($event, key)">
                                <template x-if="field.type === 'image' && getFieldValue(key)">
                                    <img class="ed-field__preview" :src="getFieldValue(key)" alt="">
                                </template>
                            </div>
                        </template>

                        <!-- textarea -->
                        <template x-if="field.type === 'textarea'">
                            <textarea class="ed-input ed-input--area" rows="4"
                                      :value="getFieldValue(key)"
                                      @input="setField(key, $event.target.value)"></textarea>
                        </template>

                        <!-- select -->
                        <template x-if="field.type === 'select'">
                            <select class="ed-input"
                                    @change="setField(key, $event.target.value)">
                                <template x-for="(label, val) in field.options" :key="val">
                                    <option :value="val" :selected="getFieldValue(key) === val" x-text="label"></option>
                                </template>
                            </select>
                        </template>

                        <!-- repeater -->
                        <template x-if="field.type === 'repeater'">
                            <div class="ed-repeater">
                                <template x-for="(item, idx) in (getFieldValue(key) || [])" :key="idx">
                                    <div class="ed-repeater__row">
                                        <div class="ed-repeater__header">
                                            <span>Item <span x-text="idx + 1"></span></span>
                                            <button type="button" class="ed-btn-mini ed-btn-mini--danger"
                                                    @click="removeRepeaterItem(key, idx)">Remove</button>
                                        </div>
                                        <template x-for="(subField, subKey) in field.fields" :key="subKey">
                                            <div class="ed-field ed-field--sub">
                                                <label class="ed-field__label" x-text="subField.label || subKey"></label>
                                                <template x-if="subField.type === 'textarea'">
                                                    <textarea class="ed-input ed-input--area" rows="2"
                                                              :value="item[subKey] ?? ''"
                                                              @input="setRepeaterField(key, idx, subKey, $event.target.value)"></textarea>
                                                </template>
                                                <template x-if="subField.type === 'select'">
                                                    <select class="ed-input"
                                                            @change="setRepeaterField(key, idx, subKey, $event.target.value)">
                                                        <template x-for="(label, val) in subField.options" :key="val">
                                                            <option :value="val" :selected="(item[subKey] ?? '') === val" x-text="label"></option>
                                                        </template>
                                                    </select>
                                                </template>
                                                <template x-if="!['textarea','select'].includes(subField.type)">
                                                    <input :type="subField.type === 'url' ? 'url' : 'text'"
                                                           class="ed-input"
                                                           :value="item[subKey] ?? ''"
                                                           @input="setRepeaterField(key, idx, subKey, $event.target.value)">
                                                </template>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                                <button type="button" class="ed-btn-mini" @click="addRepeaterItem(key, field.fields)">+ Add item</button>
                            </div>
                        </template>
                    </div>
                </template>
            </form>
        </div>

        <div class="ed-inspector__empty" x-show="!selectedBlock">
            Select a block on the canvas to edit its content.
        </div>
    </aside>
</div>

<!-- Toast -->
<div class="ed-toast" x-show="toast" x-transition :class="'is-' + (toastKind || 'info')" x-text="toast"></div>

<script>
// ═══════════════════════════════════════════════════
// Editor state — Alpine.js component
// ═══════════════════════════════════════════════════
function editor(website, activePage) {
    return {
        website,
        activePage,
        activePageId: activePage?.id || null,
        blockCatalog: {},
        media: [],
        selectedBlockId: null,
        dirty: false,
        saving: false,
        publishing: false,
        toast: '',
        toastKind: 'info',
        _debounceTimer: null,

        // ═══════ lifecycle ═══════
        async init() {
            await Promise.all([this.loadCatalog(), this.loadMedia()]);
            this.$nextTick(() => this.setupSortable());
            window.addEventListener('beforeunload', (e) => {
                if (this.dirty) { e.preventDefault(); e.returnValue = ''; }
            });
        },

        get activePageSlug() {
            const p = this.website.pages.find(p => p.id === this.activePageId);
            if (!p) return '';
            return p.slug === '/' ? '' : p.slug.replace(/^\/+/, '');
        },

        get selectedBlock() {
            return this.activePage?.blocks.find(b => b.id === this.selectedBlockId) || null;
        },

        get selectedSchema() {
            if (!this.selectedBlock) return {};
            return this.blockCatalog[this.selectedBlock.type]?.schema || {};
        },

        // ═══════ API helpers ═══════
        _csrf() {
            // Read the current hash from cookie if available; CI4 rotates on POST.
            const name = document.querySelector('meta[name="csrf-name"]').getAttribute('content');
            const fromMeta = document.querySelector('meta[name="csrf-hash"]').getAttribute('content');
            const cookieMatch = document.cookie.match(/(?:^|;\s*)csrf_cookie_name=([^;]+)/);
            const hash = cookieMatch ? decodeURIComponent(cookieMatch[1]) : fromMeta;
            return { name, hash };
        },

        _updateCsrfMeta(newHash) {
            if (!newHash) return;
            const el = document.querySelector('meta[name="csrf-hash"]');
            if (el) el.setAttribute('content', newHash);
        },

        async _api(path, opts = {}) {
            const csrf = this._csrf();
            const isForm = opts.body instanceof FormData;
            const headers = Object.assign({ 'Accept': 'application/json' }, opts.headers || {});
            headers['X-CSRF-TOKEN'] = csrf.hash;

            if (opts.method && opts.method.toUpperCase() === 'POST' && !isForm) {
                headers['Content-Type'] = 'application/json';
                const body = opts.body ? JSON.parse(opts.body) : {};
                body[csrf.name] = csrf.hash;
                opts.body = JSON.stringify(body);
            } else if (isForm) {
                opts.body.append(csrf.name, csrf.hash);
            }

            const res = await fetch(path, { ...opts, headers, credentials: 'same-origin' });
            const data = await res.json().catch(() => ({}));

            // After a successful POST CI rotates the token cookie; sync our meta.
            const fresh = document.cookie.match(/(?:^|;\s*)csrf_cookie_name=([^;]+)/);
            if (fresh) this._updateCsrfMeta(decodeURIComponent(fresh[1]));

            if (!res.ok || data.success === false) {
                throw new Error(data.message || ('HTTP ' + res.status));
            }
            return data;
        },

        async _api(path, opts = {}) {
            const csrf = this._csrf();
            const isForm = opts.body instanceof FormData;
            const headers = Object.assign({ 'Accept': 'application/json' }, opts.headers || {});

            if (opts.method && opts.method.toUpperCase() === 'POST' && !isForm) {
                headers['Content-Type'] = 'application/json';
                const body = opts.body ? JSON.parse(opts.body) : {};
                body[csrf.name] = csrf.hash;
                opts.body = JSON.stringify(body);
            } else if (isForm) {
                opts.body.append(csrf.name, csrf.hash);
            }

            const res = await fetch(path, { ...opts, headers });
            const data = await res.json().catch(() => ({}));

            if (data && data[csrf.name || '']) {
                // server may return refreshed token via header or body; update meta if present
            }
            if (!res.ok || data.success === false) {
                throw new Error(data.message || ('HTTP ' + res.status));
            }
            return data;
        },

        async loadCatalog() {
            try {
                const res = await this._api('/api/website-builder/blocks/available');
                this.blockCatalog = res.data || {};
            } catch (e) { this.flash('Failed to load block catalog', 'error'); }
        },

        async loadMedia() {
            try {
                const res = await this._api('/api/media');
                this.media = res.data || [];
            } catch (e) { /* silent */ }
        },

        // ═══════ page switching ═══════
        switchPage(pageId) {
            const p = this.website.pages.find(p => p.id === pageId);
            if (!p) return;
            this.activePage = p;
            this.activePageId = pageId;
            this.selectedBlockId = null;
            this.$nextTick(() => {
                this.setupSortable();
                this.refreshPreview();
            });
        },

        // ═══════ block CRUD ═══════
        async addBlock(type) {
            try {
                const res = await this._api(
                    `/api/website-builder/${this.website.id}/pages/${this.activePageId}/blocks`,
                    { method: 'POST', body: JSON.stringify({ type }) }
                );
                this.activePage.blocks.push(res.data);
                this.selectedBlockId = res.data.id;
                this.refreshPreview();
                this.flash('Block added');
            } catch (e) { this.flash(e.message, 'error'); }
        },

        selectBlock(id) {
            this.selectedBlockId = id;
        },

        async deleteBlock(id) {
            if (!confirm('Delete this block?')) return;
            try {
                await this._api(
                    `/api/website-builder/${this.website.id}/pages/${this.activePageId}/blocks/${id}/delete`,
                    { method: 'POST', body: JSON.stringify({}) }
                );
                this.activePage.blocks = this.activePage.blocks.filter(b => b.id !== id);
                if (this.selectedBlockId === id) this.selectedBlockId = null;
                this.refreshPreview();
                this.flash('Block deleted');
            } catch (e) { this.flash(e.message, 'error'); }
        },

        async reorderBlocks() {
            const ul = this.$refs.blocksList;
            const ids = Array.from(ul.querySelectorAll('li[data-id]')).map(li => li.dataset.id);
            // reflect new order locally
            this.activePage.blocks = ids.map(id => this.activePage.blocks.find(b => b.id === id)).filter(Boolean);
            try {
                await this._api(
                    `/api/website-builder/${this.website.id}/pages/${this.activePageId}/blocks/reorder`,
                    { method: 'POST', body: JSON.stringify({ order: ids }) }
                );
                this.refreshPreview();
            } catch (e) { this.flash(e.message, 'error'); }
        },

        setupSortable() {
            const ul = this.$refs.blocksList;
            if (!ul || !window.Sortable) return;
            if (ul._sortable) ul._sortable.destroy();
            ul._sortable = window.Sortable.create(ul, {
                handle: '.ed-drag-handle',
                animation: 150,
                onEnd: () => this.reorderBlocks(),
            });
        },

        // ═══════ inspector field editing ═══════
        getFieldValue(key) {
            return this.selectedBlock?.data?.[key];
        },

        setField(key, value) {
            if (!this.selectedBlock) return;
            this.selectedBlock.data[key] = value;
            this.scheduleBlockSave();
        },

        addRepeaterItem(key, fields) {
            if (!this.selectedBlock) return;
            const arr = Array.isArray(this.selectedBlock.data[key]) ? this.selectedBlock.data[key] : [];
            const item = {};
            for (const sk of Object.keys(fields || {})) item[sk] = '';
            arr.push(item);
            this.selectedBlock.data[key] = arr;
            this.scheduleBlockSave();
        },

        removeRepeaterItem(key, idx) {
            if (!this.selectedBlock) return;
            const arr = Array.isArray(this.selectedBlock.data[key]) ? this.selectedBlock.data[key] : [];
            arr.splice(idx, 1);
            this.selectedBlock.data[key] = arr;
            this.scheduleBlockSave();
        },

        setRepeaterField(key, idx, subKey, value) {
            if (!this.selectedBlock) return;
            const arr = Array.isArray(this.selectedBlock.data[key]) ? this.selectedBlock.data[key] : [];
            if (!arr[idx]) arr[idx] = {};
            arr[idx][subKey] = value;
            this.selectedBlock.data[key] = arr;
            this.scheduleBlockSave();
        },

        scheduleBlockSave() {
            this.dirty = true;
            if (this._debounceTimer) clearTimeout(this._debounceTimer);
            this._debounceTimer = setTimeout(() => this.saveSelectedBlock(), 500);
        },

        async saveSelectedBlock() {
            if (!this.selectedBlock) return;
            this.saving = true;
            try {
                await this._api(
                    `/api/website-builder/${this.website.id}/pages/${this.activePageId}/blocks/${this.selectedBlock.id}`,
                    { method: 'POST', body: JSON.stringify({ data: this.selectedBlock.data }) }
                );
                this.dirty = false;
                this.refreshPreview();
            } catch (e) { this.flash(e.message, 'error'); }
            finally { this.saving = false; }
        },

        // ═══════ media upload / DnD ═══════
        async uploadFile(event) {
            const file = event.target.files[0];
            if (!file) return;
            const form = new FormData();
            form.append('file', file);
            form.append('website_id', this.website.id);
            try {
                const res = await this._api('/api/media/upload', { method: 'POST', body: form });
                this.media.unshift(res.data);
                this.flash('Uploaded');
            } catch (e) { this.flash(e.message, 'error'); }
            event.target.value = '';
        },

        onMediaDragStart(event, media) {
            event.dataTransfer.setData('text/plain', media.url);
            event.dataTransfer.effectAllowed = 'copy';
        },

        onImageDrop(event, fieldKey) {
            event.preventDefault();
            const url = event.dataTransfer.getData('text/plain');
            if (url) this.setField(fieldKey, url);
        },

        // ═══════ publish + misc ═══════
        async publish() {
            this.publishing = true;
            try {
                await this._api(`/api/website-builder/publish/${this.website.id}`, {
                    method: 'POST', body: JSON.stringify({})
                });
                this.website.status = 'live';
                this.flash('Website published');
            } catch (e) { this.flash(e.message, 'error'); }
            finally { this.publishing = false; }
        },

        refreshPreview() {
            const ifr = this.$refs.preview;
            if (ifr) ifr.contentWindow.location.reload();
        },

        flash(msg, kind = 'info') {
            this.toast = msg;
            this.toastKind = kind;
            setTimeout(() => this.toast = '', 2500);
        },
    };
}
</script>
</body>
</html>
