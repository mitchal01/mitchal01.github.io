<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Southeastern Career Center',
        'nav_menu' => [
            '' => 'Frate Games',
            'test' => 'Test Page',
            'updates' => 'Updates',
            'website' => 'Website',
            'about-us' => 'About Us',
            'help' => 'Help',
        ],
        'template_path' => 'template',
        'root_path' => '',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
