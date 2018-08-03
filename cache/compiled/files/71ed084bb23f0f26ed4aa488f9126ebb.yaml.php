<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/grav-skeleton-open-blog-space/user/themes/quark-open-publishing/blueprints/twitterfeed.yaml',
    'modified' => 1533070814,
    'data' => [
        'title' => 'Twitter Feed',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'replace@' => true,
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Page Title'
                                ],
                                'header.twitter_feed_text' => [
                                    'ordering@' => 1,
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Twitter Feed Text'
                                ],
                                'header.twitter_feed_url' => [
                                    'ordering@' => 2,
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Twitter Feed URL',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'header.twitter_feed_height' => [
                                    'ordering@' => 3,
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Twitter Feed Height (px)',
                                    'default' => 600,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 100,
                                        'max' => 1000
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'publishing' => [
                                    'fields' => [
                                        'header.published' => [
                                            'default' => 1
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.routable' => [
                                            'default' => 0
                                        ],
                                        'header.visible' => [
                                            'default' => 0
                                        ]
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
