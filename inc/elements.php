<?php

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_reusable_dependencies_urls', function ($urls) {
	$urls['iconify'] = WPSIX_PLUGIN_URL . 'dist/libs/iconify/iconify.min.js';
	return $urls;
});

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/../elements',
        'WPSix',
        'element',
        'WPSix Elements',
        false
    );
}, 9 );
