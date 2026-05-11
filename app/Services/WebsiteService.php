<?php

namespace App\Services;

use App\Libraries\BlockRegistry;
use App\Libraries\WebsiteTemplateRegistry;
use App\Models\WebsiteModel;

/**
 * Business logic for websites — keeps controllers thin and makes the
 * rules (ownership, allowed template, slug generation, status transitions)
 * unit-testable.
 */
class WebsiteService
{
    protected WebsiteModel $websites;

    public function __construct(?WebsiteModel $websites = null)
    {
        $this->websites = $websites ?? new WebsiteModel();
    }

    /**
     * Create a new website for a user based on a template key.
     *
     * @return int|false inserted ID on success, false on failure
     */
    public function createForUser(int $userId, string $siteName, string $template): int|false
    {
        if (!in_array($template, WebsiteTemplateRegistry::allowedKeys(), true)) {
            $template = 'default';
        }

        $data = [
            'user_id'          => $userId,
            'site_name'        => $siteName,
            'slug'             => $this->websites->createSlug($siteName),
            'template'         => $template,
            'status'           => 'draft',
            'config'           => WebsiteTemplateRegistry::defaultConfig($template),
            'pages'            => WebsiteTemplateRegistry::defaultPages($template),
            'meta_title'       => $siteName,
            'meta_description' => '',
        ];

        $id = $this->websites->insert($data, true);
        return $id ? (int) $id : false;
    }

    /**
     * Whitelist-based partial update. Uses array_key_exists so clearing a
     * field with an empty string (e.g. meta_description) is supported.
     *
     * @param array<string, mixed> $input
     */
    public function updateOwned(int $id, int $userId, array $input): bool
    {
        $website = $this->websites->find($id);
        if (!$website || (int) $website['user_id'] !== $userId) {
            return false;
        }

        $allowed = ['site_name', 'meta_title', 'meta_description', 'config', 'pages', 'custom_domain'];
        $data    = [];

        foreach ($allowed as $key) {
            if (array_key_exists($key, $input)) {
                $data[$key] = $input[$key];
            }
        }

        if (empty($data)) {
            return false;
        }

        return (bool) $this->websites->update($id, $data);
    }

    public function findOwned(int $id, int $userId): ?array
    {
        $website = $this->websites->find($id);
        if (!$website || (int) $website['user_id'] !== $userId) {
            return null;
        }
        return $website;
    }

    public function publishOwned(int $id, int $userId): bool
    {
        if (!$this->findOwned($id, $userId)) {
            return false;
        }
        return $this->websites->publish($id);
    }

    public function archiveOwned(int $id, int $userId): bool
    {
        if (!$this->findOwned($id, $userId)) {
            return false;
        }
        return (bool) $this->websites->update($id, ['status' => 'archived']);
    }

    public function updatePagesOwned(int $id, int $userId, array $pages): bool
    {
        if (!$this->findOwned($id, $userId)) {
            return false;
        }
        return $this->websites->updatePages($id, $pages);
    }

    // ─────────────────────────────────────────────────────────────
    // Block-level operations
    // ─────────────────────────────────────────────────────────────

    /**
     * Append a new block to the end of a page's `blocks` array.
     *
     * @return array<string, mixed>|null the inserted block, or null on error
     */
    public function addBlock(int $websiteId, int $userId, string $pageId, string $type): ?array
    {
        $site = $this->findOwned($websiteId, $userId);
        if (!$site) {
            return null;
        }
        if (!BlockRegistry::has($type)) {
            return null;
        }

        $pages = is_array($site['pages'] ?? null) ? $site['pages'] : [];
        $idx   = $this->findPageIndex($pages, $pageId);
        if ($idx === null) {
            return null;
        }

        $block = BlockRegistry::makeBlock($type);
        if (!$block) {
            return null;
        }

        $pages[$idx]['blocks']   = $pages[$idx]['blocks'] ?? [];
        $pages[$idx]['blocks'][] = $block;

        if (!$this->websites->updatePages($websiteId, $pages)) {
            return null;
        }

        return $block;
    }

    /**
     * Replace the `data` payload of a specific block.
     */
    public function updateBlock(int $websiteId, int $userId, string $pageId, string $blockId, array $data): bool
    {
        $site = $this->findOwned($websiteId, $userId);
        if (!$site) {
            return false;
        }

        $pages = is_array($site['pages'] ?? null) ? $site['pages'] : [];
        $pIdx  = $this->findPageIndex($pages, $pageId);
        if ($pIdx === null) {
            return false;
        }

        $blocks = $pages[$pIdx]['blocks'] ?? [];
        $bIdx   = $this->findBlockIndex($blocks, $blockId);
        if ($bIdx === null) {
            return false;
        }

        // Merge into existing data so the caller can send partial updates
        $existing = is_array($blocks[$bIdx]['data'] ?? null) ? $blocks[$bIdx]['data'] : [];
        $pages[$pIdx]['blocks'][$bIdx]['data'] = array_merge($existing, $data);

        return $this->websites->updatePages($websiteId, $pages);
    }

    /**
     * Delete a block from a page.
     */
    public function deleteBlock(int $websiteId, int $userId, string $pageId, string $blockId): bool
    {
        $site = $this->findOwned($websiteId, $userId);
        if (!$site) {
            return false;
        }

        $pages = is_array($site['pages'] ?? null) ? $site['pages'] : [];
        $pIdx  = $this->findPageIndex($pages, $pageId);
        if ($pIdx === null) {
            return false;
        }

        $blocks = $pages[$pIdx]['blocks'] ?? [];
        $filtered = array_values(array_filter(
            $blocks,
            fn($b) => ($b['id'] ?? null) !== $blockId
        ));

        if (count($filtered) === count($blocks)) {
            // nothing removed
            return false;
        }

        $pages[$pIdx]['blocks'] = $filtered;
        return $this->websites->updatePages($websiteId, $pages);
    }

    /**
     * Reorder blocks within a page using an ordered list of block IDs.
     * Missing blocks are dropped; extra IDs are ignored.
     *
     * @param string[] $orderedIds
     */
    public function reorderBlocks(int $websiteId, int $userId, string $pageId, array $orderedIds): bool
    {
        $site = $this->findOwned($websiteId, $userId);
        if (!$site) {
            return false;
        }

        $pages = is_array($site['pages'] ?? null) ? $site['pages'] : [];
        $pIdx  = $this->findPageIndex($pages, $pageId);
        if ($pIdx === null) {
            return false;
        }

        $blocks    = $pages[$pIdx]['blocks'] ?? [];
        $byId      = [];
        foreach ($blocks as $b) {
            if (!empty($b['id'])) {
                $byId[$b['id']] = $b;
            }
        }

        $reordered = [];
        foreach ($orderedIds as $id) {
            if (isset($byId[$id])) {
                $reordered[] = $byId[$id];
            }
        }

        $pages[$pIdx]['blocks'] = $reordered;
        return $this->websites->updatePages($websiteId, $pages);
    }

    /**
     * @param array<int, array<string, mixed>> $pages
     */
    protected function findPageIndex(array $pages, string $pageId): ?int
    {
        foreach ($pages as $i => $p) {
            if (($p['id'] ?? null) === $pageId) {
                return $i;
            }
        }
        return null;
    }

    /**
     * @param array<int, array<string, mixed>> $blocks
     */
    protected function findBlockIndex(array $blocks, string $blockId): ?int
    {
        foreach ($blocks as $i => $b) {
            if (($b['id'] ?? null) === $blockId) {
                return $i;
            }
        }
        return null;
    }
}
