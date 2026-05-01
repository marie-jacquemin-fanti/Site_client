<?php

include('core/theme/configuration.php');
function dw_asset(string $file): string
{
    $manifest_path = get_theme_file_path('public/.vite/manifest.json');
    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        if (isset($manifest['wp-content/themes/theme_1/assets/css/styles.scss']) && $file === 'css') {
            return get_theme_file_uri('public/' . $manifest['wp-content/themes/theme_1/assets/css/styles.scss']['file']);
        }
        if (isset($manifest['wp-content/themes/theme_1/assets/js/main.js']) && $file === 'js') {
            return get_theme_file_uri('public/' . $manifest['wp-content/themes/theme_1/assets/js/main.js']['file']);
        }
    }
    return '';
}





