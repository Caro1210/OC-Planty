<?php
// Activation du thème
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Enregistrement du style du thème parent
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );

    // Enregistrement du style du thème enfant avec une dépendance sur le style du thème parent
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-theme'), filemtime( get_stylesheet_directory() . '/css/theme.css' ) );
}

/* Ajout du hook*/
add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) {
if (is_user_logged_in() ) {
$items .= '<li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="'. get_admin_url() .'">Admin</a></li>';
}
return $items;
}
?>