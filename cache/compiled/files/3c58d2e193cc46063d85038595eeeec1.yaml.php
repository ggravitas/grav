<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/grav-skeleton-open-blog-space/user/blueprints/admin/pages/new_standard_page.yaml',
    'modified' => 1533070696,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Standard Page'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Page Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'text' => [
                    'type' => 'display',
                    'size' => 'large',
                    'label' => NULL,
                    'content' => 'This top-level page will also be added to your site menu.'
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'default'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
