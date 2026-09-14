<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/LARAGON_WORKSPACE/grav/user/config/system.yaml',
    'modified' => 1789409823,
    'size' => 377,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'quark2'
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ]
        ],
        'assets' => [
            'css_pipeline' => false,
            'js_pipeline' => false,
            'enable_asset_timestamp' => false
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'provider' => 'clockwork'
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ]
    ]
];
