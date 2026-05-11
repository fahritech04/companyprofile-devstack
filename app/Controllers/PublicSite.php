<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\BlockRegistry;
use App\Models\WebsiteModel;

/**
 * Serves user-created websites at /s/{slug}/{page?}.
 *
 * Only sites with status=live (or status=building when the owner is the
 * current session user, for preview) are shown publicly. Pages can be
 * addressed by slug; the home page is reachable via empty path.
 */
class PublicSite extends BaseController
{
    protected WebsiteModel $websites;

    public function __construct()
    {
        $this->websites = new WebsiteModel();
        helper('url');
    }

    /**
     * Route: /s/(:segment)(/:any)?
     */
    public function show(string $slug, string $pagePath = '')
    {
        $site = $this->websites->getBySlug($slug);
        if (!$site) {
            return $this->notFound();
        }

        $isOwner = ((int) session()->get('user_id') === (int) $site['user_id']);
        if ($site['status'] !== 'live' && !$isOwner) {
            return $this->notFound();
        }

        $pages = is_array($site['pages'] ?? null) ? $site['pages'] : [];
        if (empty($pages)) {
            return $this->renderEmpty($site);
        }

        // Resolve the requested page — empty path or '/' means home.
        $pagePath = trim($pagePath, '/');
        if ($pagePath === '') {
            $pagePath = '/';
        }

        $page = $this->findPage($pages, $pagePath);
        if (!$page) {
            return $this->notFound();
        }

        $navPages = array_values(array_filter($pages, function ($p) {
            return !empty($p['visible']);
        }));
        usort($navPages, fn($a, $b) => (int) ($a['order'] ?? 0) <=> (int) ($b['order'] ?? 0));

        $blocksHtml = $this->renderBlocks($page['blocks'] ?? [], $site);

        return view('public_site/layout', [
            'site'       => $site,
            'page'       => $page,
            'blocksHtml' => $blocksHtml,
            'navPages'   => $navPages,
        ]);
    }

    /**
     * @param array<int, array<string, mixed>> $pages
     */
    protected function findPage(array $pages, string $pagePath): ?array
    {
        foreach ($pages as $p) {
            $slug = trim((string) ($p['slug'] ?? ''), '/');
            $slug = $slug === '' ? '/' : $slug;
            if ($slug === $pagePath) {
                return $p;
            }
        }
        return null;
    }

    /**
     * Render a list of blocks into a single HTML string.
     *
     * @param array<int, array<string, mixed>> $blocks
     * @param array<string, mixed>             $site
     */
    protected function renderBlocks(array $blocks, array $site): string
    {
        $html = '';

        foreach ($blocks as $block) {
            if (empty($block['type']) || !BlockRegistry::has($block['type'])) {
                continue;
            }
            $viewPath = BlockRegistry::view($block['type']);
            if (!$viewPath) {
                continue;
            }
            $data = is_array($block['data'] ?? null) ? $block['data'] : [];
            $html .= view($viewPath, [
                'data' => $data,
                'site' => $site,
            ]);
        }

        return $html;
    }

    protected function renderEmpty(array $site)
    {
        // Render layout shell with an empty-state section.
        $emptyHtml = '<section class="site-empty"><div class="site-container">'
            . '<h1 class="site-empty__title">Nothing here yet</h1>'
            . '<p>This site has no pages.</p></div></section>';

        return view('public_site/layout', [
            'site'       => $site,
            'page'       => ['id' => 'empty', 'name' => 'Home', 'slug' => '/'],
            'blocksHtml' => $emptyHtml,
            'navPages'   => [],
        ]);
    }

    protected function notFound()
    {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
