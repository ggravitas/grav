<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/grav/user/themes/quark-open-publishing/blueprints.yaml',
    'modified' => 1533946679,
    'data' => [
        'name' => 'Quark Open Publishing',
        'version' => '1.0.8',
        'description' => 'A custom version of the Quark theme for open publishing. Includes Git Sync and \'chromeless\' content embedding.',
        'icon' => 'unlock',
        'author' => [
            'name' => 'Hibbitts Design',
            'email' => 'hello@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-theme-quark-open-publishing',
        'demo' => 'http://demo.hibbittsdesign.org/grav-open-publishing-quark/',
        'docs' => 'https://github.com/hibbitts-design/grav-theme-quark-open-publishing/blob/master/README.md',
        'keywords' => 'open, publishing, gitsync, chromeless',
        'bugs' => 'https://github.com/hibbitts-design/grav-theme-quark-open-publishing/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.4.0'
            ],
            1 => 'admin',
            2 => 'auto-date',
            3 => 'archives',
            4 => 'breadcrumbs',
            5 => 'email',
            6 => 'external_links',
            7 => 'feed',
            8 => 'form',
            9 => 'git-sync',
            10 => 'login',
            11 => 'markdown-fontawesome',
            12 => 'markdown-notices',
            13 => 'page-inject',
            14 => 'pagination',
            15 => 'relatedpages',
            16 => 'simplesearch',
            17 => 'taxonomylist',
            18 => 'tntsearch',
            19 => 'youtube',
            20 => 'shortcode-core',
            21 => 'shortcode-ui',
            22 => 'quark'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'general_info' => [
                            'type' => 'tab',
                            'title' => 'Open Blog Options',
                            'fields' => [
                                'chromelessoptions' => [
                                    'type' => 'section',
                                    'title' => 'Chromeless Site',
                                    'underline' => true
                                ],
                                'chromeless.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Hide Menubar, Sidebar and Footer',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'gitsyncsetup' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link Setup',
                                    'underline' => true
                                ],
                                'display_of_git_sync_repo_link' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'Display of Git Sync Link',
                                    'default' => 'menu',
                                    'options' => [
                                        'menu' => 'Menu',
                                        'page' => 'Page (visible when \'Chromeless\')',
                                        'footer' => 'Footer',
                                        'none' => 'None'
                                    ]
                                ],
                                'type_of_git_sync_repo_link' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'Type of Git Sync Link',
                                    'default' => 'view',
                                    'options' => [
                                        'view' => 'View Git Repository',
                                        'edit' => 'View/Edit Page in Git Repository'
                                    ]
                                ],
                                'gitsyncoptions' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link Options',
                                    'underline' => true
                                ],
                                'git_sync_edit_note_text' => [
                                    'type' => 'input.text',
                                    'size' => 'long',
                                    'label' => 'Text before Git Sync Link on Pages',
                                    'default' => 'Have a suggestion or correction?',
                                    'description' => 'The text before the Git Sync link (only when displayed on a Page).'
                                ],
                                'custom_git_sync_repo_link_icon' => [
                                    'type' => 'input.text',
                                    'size' => 'small',
                                    'label' => 'Custom Git Sync Font Awesome Icon',
                                    'description' => 'Short name, e.g. \'code-fork\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'custom_git_sync_repo_link_text' => [
                                    'type' => 'input.text',
                                    'size' => 'medium',
                                    'label' => 'Custom Git Sync Link Text',
                                    'description' => 'Git Sync link text, e.g. \'View Page in GitHub\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'git_sync_repo_link' => [
                                    'type' => 'input.url',
                                    'label' => 'Custom Git Repository Tree URL',
                                    'help' => 'Enter the URL that leads to the pages folder of your Git Repository.',
                                    'description' => 'URL path to pages folder for \'View/Edit Page in Git Repository\' option, but with \'/pages\' and everything following it removed. For example, \'https://github.com/paulhibbitts/demo-grav-course-hub/tree/master\'.',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'h5psetup' => [
                                    'type' => 'section',
                                    'title' => 'H5P Setup',
                                    'underline' => true
                                ],
                                'h5pembedrootpath' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'H5P Embed Source URL',
                                    'default' => 'https://h5p.org/h5p/embed/',
                                    'help' => 'Enter the embed source URL path up to, but not including, the H5P Content ID.',
                                    'description' => 'H5P embed source URL path up to, but not including, the Content ID. For example, for h5p.org the URL would be \'https://h5p.org/h5p/embed/\'.',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'displaycclicense' => [
                                    'type' => 'section',
                                    'title' => 'Creative Commons License',
                                    'underline' => true,
                                    'fields' => [
                                        'cc_license.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'Display CC License',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'cc_license.type' => [
                                            'type' => 'select',
                                            'label' => 'CC License Type',
                                            'default' => 'ccby',
                                            'size' => 'long',
                                            'description' => 'Looking for more info about Creative Commons (CC) Licenses?<br> Visit the <a href="https://creativecommons.org/" target="_blank">creativecommons.org</a> site.',
                                            'options' => [
                                                'ccby' => 'CC Attribution',
                                                'ccbysa' => 'CC Attribution Share Alike',
                                                'ccbynd' => 'CC Attribution No Derivatives',
                                                'ccbync' => 'CC Attribution Non-Commercial',
                                                'ccbyncsa' => 'CC Attribution Non-Commercial Share Alike',
                                                'ccbyncnd' => 'CC Attribution Non-Commercial No Derivatives'
                                            ]
                                        ],
                                        'cc_license.icon' => [
                                            'type' => 'toggle',
                                            'label' => 'Display Only CC License Icon',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'cc_license.text' => [
                                            'type' => 'text',
                                            'size' => 'long',
                                            'description' => 'For example, \'except where otherwise noted.\'',
                                            'label' => 'Additional CC License Text',
                                            'validate' => [
                                                'type' => 'text'
                                            ]
                                        ]
                                    ]
                                ],
                                'menubaroptions' => [
                                    'type' => 'section',
                                    'title' => 'Menubar',
                                    'underline' => true
                                ],
                                'displaycustommenus.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Custom Menu Items',
                                    'help' => 'Determines if any defined custom menu entries are displayed in the menubar.',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'menu' => [
                                    'name' => 'menu',
                                    'type' => 'list',
                                    'label' => 'Custom Menubar Items',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text',
                                            'description' => 'Text label for menu item.'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon',
                                            'description' => 'Font Awesome icon for menu item.'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL',
                                            'description' => 'URL for menu item.'
                                        ],
                                        '.target' => [
                                            'type' => 'select',
                                            'label' => 'Target',
                                            'default' => '_self',
                                            'size' => 'medium',
                                            'options' => [
                                                '_blank' => 'Open in a new window',
                                                '_parent' => 'Open in the parent frame',
                                                '_top' => 'Open in the full body of the window',
                                                '_self' => 'Open in the same frame as clicked'
                                            ]
                                        ]
                                    ]
                                ],
                                'hidehomemenulink' => [
                                    'type' => 'toggle',
                                    'label' => 'Include Homepage Link in Menubar',
                                    'help' => 'Determines if the link to the Homepage is included in the menubar.',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'theme_info' => [
                            'type' => 'tab',
                            'title' => 'Quark Options',
                            'fields' => [
                                'production-mode' => [
                                    'type' => 'toggle',
                                    'label' => 'Production mode',
                                    'help' => 'When enabled, Quark will render with minified CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'grid-size' => [
                                    'type' => 'select',
                                    'label' => 'Grid size',
                                    'help' => 'The maximum width of the theme',
                                    'size' => 'small',
                                    'options' => [
                                        '' => 'None (full width)',
                                        'grid-xl' => 'Extra Large',
                                        'grid-lg' => 'Large',
                                        'grid-md' => 'Medium'
                                    ]
                                ],
                                'header_section' => [
                                    'type' => 'section',
                                    'title' => 'Header Defaults',
                                    'underline' => true
                                ],
                                'header-fixed' => [
                                    'type' => 'toggle',
                                    'label' => 'Fixed header',
                                    'help' => 'When enabled, the header will be fixed at the top of the browser',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-animated' => [
                                    'type' => 'toggle',
                                    'label' => 'Animated',
                                    'help' => 'When enabled, the header will animate to a smaller header when scrolling',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-dark' => [
                                    'type' => 'toggle',
                                    'label' => 'Dark Style',
                                    'help' => 'When enabled, a dark-friendly style will be used',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-transparent' => [
                                    'type' => 'toggle',
                                    'label' => 'Transparent',
                                    'help' => 'When enabled, a transparent style will be used',
                                    'highlight' => 0,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'footer_section' => [
                                    'type' => 'section',
                                    'title' => 'Footer Defaults',
                                    'underline' => true
                                ],
                                'sticky-footer' => [
                                    'type' => 'toggle',
                                    'label' => 'Sticky footer',
                                    'help' => 'When enabled, the footer will be sticky at the bottom of the browser',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'blog_section' => [
                                    'type' => 'section',
                                    'title' => 'Blog Defaults',
                                    'underline' => true
                                ],
                                'blog-page' => [
                                    'type' => 'text',
                                    'label' => 'Blog Page',
                                    'help' => 'The route to the blog page when working with blog sidebar',
                                    'size' => 'medium',
                                    'default' => '/blog'
                                ],
                                'blog_page_hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'Hero Classes',
                                    'markdown' => true,
                                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.'
                                ],
                                'spectre_section' => [
                                    'type' => 'section',
                                    'title' => 'Spectre.css Options',
                                    'underline' => true
                                ],
                                'spectre.exp' => [
                                    'type' => 'toggle',
                                    'label' => 'Experimentals CSS',
                                    'help' => 'When enabled, the `spectre-exp.css` file will be included',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'spectre.icons' => [
                                    'type' => 'toggle',
                                    'label' => 'Icons CSS',
                                    'help' => 'When enabled, the `spectre-icons.css` file will be included',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];