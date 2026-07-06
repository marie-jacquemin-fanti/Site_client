<?php

include('core/theme/configuration.php');

function dw_get_navigation_links(string $location): array
{
    // Récupérer l'objet W¨pour le menu
    $locations = get_nav_menu_locations();

    if (!isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];
    $nav = wp_get_nav_menu_items($nav_id);

    // Transformer le menu en tableau de liens, chaque lien va être un objet personnalisé
    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;

        $links[] = $link;
    }

    return $links;
}
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
function register_sensibilisation_cpt() {
    register_post_type('sensibilisation', [
        'labels' => [
            'name'          => 'Sensibilisations',
            'singular_name' => 'Sensibilisation',
            'add_new_item'  => 'Ajouter une sensibilisation',
        ],
        'public'       => true,
        'show_in_menu' => true,
        'supports'     => ['title'],
        'menu_icon'    => 'dashicons-heart',
    ]);
}
add_action('init', 'register_sensibilisation_cpt');

function remove_admin_menus(): void {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('upload.php');
}
add_action('admin_menu', 'remove_admin_menus', 999);


