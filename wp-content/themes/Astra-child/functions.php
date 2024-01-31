<?php
// Activation du thème
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Enregistrement du style du thème parent
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );

    // Enregistrement du style du thème enfant avec une dépendance sur le style du thème parent
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-theme'), filemtime( get_stylesheet_directory() . '/css/theme.css' ) );
}
?>