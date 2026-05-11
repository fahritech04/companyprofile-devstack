<?php

namespace App\Libraries;

/**
 * Registry of all available block types that can be placed on a page.
 *
 * Each block has:
 *  - name   : human-readable label shown in the block picker
 *  - icon   : Heroicons-style SVG path
 *  - view   : path to the view template (relative to app/Views/)
 *  - schema : array of field definitions — used by the editor to render a form
 *             and by renderBlock() to sanitize data.
 *             Supported field types: text, textarea, url, image, number,
 *             color, select, repeater.
 *  - default: baseline data so a freshly-dropped block renders something.
 *
 * Block data is stored verbatim in `websites.pages[i].blocks[j].data` as JSON.
 */
final class BlockRegistry
{
    /** @var array<string, array<string, mixed>> */
    private static array $blocks = [
        'hero' => [
            'name'   => 'Hero',
            'icon'   => 'M3 4a1 1 0 011-1h16a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4z',
            'view'   => 'blocks/hero',
            'schema' => [
                'eyebrow'     => ['type' => 'text',     'label' => 'Eyebrow'],
                'heading'     => ['type' => 'text',     'label' => 'Heading', 'required' => true],
                'subheading'  => ['type' => 'textarea', 'label' => 'Subheading'],
                'cta_label'   => ['type' => 'text',     'label' => 'CTA label'],
                'cta_url'     => ['type' => 'url',      'label' => 'CTA URL'],
                'image'       => ['type' => 'image',    'label' => 'Background image URL'],
            ],
            'default' => [
                'eyebrow'    => 'WELCOME',
                'heading'    => 'Build something amazing',
                'subheading' => 'Launch your website in minutes with our drag-and-drop builder.',
                'cta_label'  => 'Get Started',
                'cta_url'    => '#',
                'image'      => '',
            ],
        ],

        'features' => [
            'name'   => 'Features',
            'icon'   => 'M13 10V3L4 14h7v7l9-11h-7z',
            'view'   => 'blocks/features',
            'schema' => [
                'heading'  => ['type' => 'text', 'label' => 'Section heading'],
                'subheading' => ['type' => 'textarea', 'label' => 'Subheading'],
                'items'    => [
                    'type'  => 'repeater',
                    'label' => 'Feature cards',
                    'fields' => [
                        'icon'        => ['type' => 'text',     'label' => 'Icon SVG path'],
                        'title'       => ['type' => 'text',     'label' => 'Title'],
                        'description' => ['type' => 'textarea', 'label' => 'Description'],
                    ],
                ],
            ],
            'default' => [
                'heading'    => 'Everything you need',
                'subheading' => 'Powerful tools in one place.',
                'items'      => [
                    ['icon' => '', 'title' => 'Fast',      'description' => 'Optimized for speed on every device.'],
                    ['icon' => '', 'title' => 'Secure',    'description' => 'Enterprise-grade security by default.'],
                    ['icon' => '', 'title' => 'Scalable',  'description' => 'Grows with your business.'],
                ],
            ],
        ],

        'pricing' => [
            'name'   => 'Pricing',
            'icon'   => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1',
            'view'   => 'blocks/pricing',
            'schema' => [
                'heading' => ['type' => 'text', 'label' => 'Heading'],
                'plans'   => [
                    'type'  => 'repeater',
                    'label' => 'Plans',
                    'fields' => [
                        'name'       => ['type' => 'text',     'label' => 'Plan name'],
                        'price'      => ['type' => 'text',     'label' => 'Price'],
                        'period'     => ['type' => 'text',     'label' => 'Period (e.g. /month)'],
                        'features'   => ['type' => 'textarea', 'label' => 'Features (one per line)'],
                        'cta_label'  => ['type' => 'text',     'label' => 'CTA label'],
                        'cta_url'    => ['type' => 'url',      'label' => 'CTA URL'],
                        'featured'   => ['type' => 'select',   'label' => 'Featured', 'options' => ['no' => 'No', 'yes' => 'Yes']],
                    ],
                ],
            ],
            'default' => [
                'heading' => 'Simple, transparent pricing',
                'plans'   => [
                    ['name' => 'Starter', 'price' => '$9',  'period' => '/mo', 'features' => "1 website\n10 pages\nBasic support", 'cta_label' => 'Choose', 'cta_url' => '#', 'featured' => 'no'],
                    ['name' => 'Pro',     'price' => '$29', 'period' => '/mo', 'features' => "5 websites\nUnlimited pages\nPriority support", 'cta_label' => 'Choose', 'cta_url' => '#', 'featured' => 'yes'],
                    ['name' => 'Agency',  'price' => '$99', 'period' => '/mo', 'features' => "Unlimited\nCustom domains\n24/7 support", 'cta_label' => 'Choose', 'cta_url' => '#', 'featured' => 'no'],
                ],
            ],
        ],

        'cta' => [
            'name'   => 'Call to Action',
            'icon'   => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
            'view'   => 'blocks/cta',
            'schema' => [
                'heading'    => ['type' => 'text',     'label' => 'Heading'],
                'subheading' => ['type' => 'textarea', 'label' => 'Subheading'],
                'cta_label'  => ['type' => 'text',     'label' => 'Button label'],
                'cta_url'    => ['type' => 'url',      'label' => 'Button URL'],
            ],
            'default' => [
                'heading'    => 'Ready to get started?',
                'subheading' => 'Join thousands of happy customers today.',
                'cta_label'  => 'Sign up free',
                'cta_url'    => '#',
            ],
        ],

        'text' => [
            'name'   => 'Rich Text',
            'icon'   => 'M4 6h16M4 12h16M4 18h7',
            'view'   => 'blocks/text',
            'schema' => [
                'heading' => ['type' => 'text',     'label' => 'Heading (optional)'],
                'body'    => ['type' => 'textarea', 'label' => 'Body (Markdown-ish, supports line breaks)'],
                'align'   => ['type' => 'select',   'label' => 'Alignment', 'options' => ['left' => 'Left', 'center' => 'Center', 'right' => 'Right']],
            ],
            'default' => [
                'heading' => 'About',
                'body'    => "Write something meaningful here.\n\nUse a blank line for a new paragraph.",
                'align'   => 'left',
            ],
        ],

        'image' => [
            'name'   => 'Image',
            'icon'   => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
            'view'   => 'blocks/image',
            'schema' => [
                'src'     => ['type' => 'image', 'label' => 'Image URL', 'required' => true],
                'alt'     => ['type' => 'text',  'label' => 'Alt text'],
                'caption' => ['type' => 'text',  'label' => 'Caption'],
            ],
            'default' => [
                'src'     => '',
                'alt'     => '',
                'caption' => '',
            ],
        ],

        'gallery' => [
            'name'   => 'Gallery',
            'icon'   => 'M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z',
            'view'   => 'blocks/gallery',
            'schema' => [
                'heading' => ['type' => 'text', 'label' => 'Heading (optional)'],
                'images'  => [
                    'type'  => 'repeater',
                    'label' => 'Images',
                    'fields' => [
                        'src' => ['type' => 'image', 'label' => 'URL'],
                        'alt' => ['type' => 'text',  'label' => 'Alt text'],
                    ],
                ],
            ],
            'default' => [
                'heading' => 'Gallery',
                'images'  => [],
            ],
        ],

        'footer' => [
            'name'   => 'Footer',
            'icon'   => 'M20 12H4M12 4v16',
            'view'   => 'blocks/footer',
            'schema' => [
                'brand'    => ['type' => 'text', 'label' => 'Brand name'],
                'tagline'  => ['type' => 'text', 'label' => 'Tagline'],
                'copyright'=> ['type' => 'text', 'label' => 'Copyright line'],
                'links'    => [
                    'type'  => 'repeater',
                    'label' => 'Links',
                    'fields' => [
                        'label' => ['type' => 'text', 'label' => 'Label'],
                        'url'   => ['type' => 'url',  'label' => 'URL'],
                    ],
                ],
            ],
            'default' => [
                'brand'     => 'Your Brand',
                'tagline'   => 'Building the future.',
                'copyright' => '© {{year}} Your Brand. All rights reserved.',
                'links'     => [
                    ['label' => 'About',   'url' => 'about'],
                    ['label' => 'Contact', 'url' => 'contact'],
                ],
            ],
        ],
    ];

    /** @return string[] */
    public static function allowedKeys(): array
    {
        return array_keys(self::$blocks);
    }

    /** @return array<string, array{name: string, icon: string}> */
    public static function listForPicker(): array
    {
        $out = [];
        foreach (self::$blocks as $key => $block) {
            $out[$key] = ['name' => $block['name'], 'icon' => $block['icon']];
        }
        return $out;
    }

    public static function has(string $type): bool
    {
        return isset(self::$blocks[$type]);
    }

    public static function defaultData(string $type): array
    {
        $data = self::$blocks[$type]['default'] ?? [];
        return self::substitutePlaceholders($data);
    }

    public static function view(string $type): ?string
    {
        return self::$blocks[$type]['view'] ?? null;
    }

    public static function schema(string $type): array
    {
        return self::$blocks[$type]['schema'] ?? [];
    }

    /**
     * Build a fresh block structure for insertion into pages[i].blocks[].
     *
     * @param array<string, mixed> $data  optional override for default data
     */
    public static function makeBlock(string $type, array $data = []): ?array
    {
        if (!self::has($type)) {
            return null;
        }
        return [
            'id'   => bin2hex(random_bytes(8)),
            'type' => $type,
            'data' => array_merge(self::defaultData($type), $data),
        ];
    }

    /**
     * Replace runtime placeholders like {{year}} inside default data.
     * We can't use date() in a static property initializer, so we resolve
     * tokens when defaults are read.
     *
     * @param mixed $value
     * @return mixed
     */
    private static function substitutePlaceholders($value)
    {
        $year = date('Y');
        $walk = function ($v) use (&$walk, $year) {
            if (is_string($v)) {
                return str_replace('{{year}}', $year, $v);
            }
            if (is_array($v)) {
                foreach ($v as $k => $nested) {
                    $v[$k] = $walk($nested);
                }
            }
            return $v;
        };
        return $walk($value);
    }
}
