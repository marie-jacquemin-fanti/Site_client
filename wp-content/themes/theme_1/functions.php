<?php

include ('core/theme/configuration.php');
// Fonction qui retourne l'URL d'un asset (css ou js) compilé par Vite
function dw_asset(string $file): string {

  // Chemin absolu vers le fichier manifest.json généré par Vite
  // get_theme_file_path() retourne le chemin serveur vers le thème WordPress
  $manifest_path = get_theme_file_path('public/.vite/manifest.json');

  // Vérifie si le fichier manifest.json existe
  if (file_exists($manifest_path)) {

    // Lit le contenu du fichier manifest.json
    // file_get_contents = récupère le contenu brut du fichier
    // json_decode(..., true) = convertit le JSON en tableau PHP associatif
    $manifest = json_decode(file_get_contents($manifest_path), true);

    // Vérifie si l'entrée CSS existe dans le manifest ET si on demande un fichier de type "css"
    if (isset($manifest['wp-content/themes/theme_1/assets/css/styles.scss']) && $file === 'css') {

      // Retourne l'URL publique vers le fichier CSS compilé
      // ['file'] contient le nom final généré par Vite (avec hash)
      return get_theme_file_uri('public/' . $manifest['wp-content/themes/theme_1/assets/css/styles.scss']['file']);
    }

    // Vérifie si l'entrée JS existe dans le manifest ET si on demande un fichier de type "js"
    if (isset($manifest['wp-content/themes/theme_1/assets/js/main.js']) && $file === 'js') {

      // Retourne l'URL publique vers le fichier JS compilé
      return get_theme_file_uri('public/' . $manifest['wp-content/themes/theme_1/assets/js/main.js']['file']);
    }
  }

  // Si manifest introuvable ou asset non trouvé, on retourne une chaîne vide
  return '';
}





