<?php
return [
    'settings' => [
        // Slim Settings
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer'            => [
            'blade_template_path' => '../app/views', // String or array of multiple paths
            'blade_cache_path'    => '../app/cache', // Mandatory by default, though could probably turn caching off for development
        ],

        'determineRouteBeforeAppMiddleware' => false,

        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'root',
            'username' => 'root',
            'password' => 'toor',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
