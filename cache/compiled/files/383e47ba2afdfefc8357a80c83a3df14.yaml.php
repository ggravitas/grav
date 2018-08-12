<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/grav/user/config/site.yaml',
    'modified' => 1533936797,
    'data' => [
        'title' => 'OutRage Fatigue',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jerry',
            'email' => 'g.gravits@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'author'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => ''
        ]
    ]
];
