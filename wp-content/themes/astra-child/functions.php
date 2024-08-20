<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css','astra-contact-form-7' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// FONCTION POUR AJOUTER LE LIEN ADMIN AU MENU 
function add_admin_link_to_menu( $items, $args ) 
{ 
    if ( is_user_logged_in() ) 
    { $dashboard_url = admin_url(); 
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662"><a href="' . $dashboard_url . '">Admin</a></li>'; 
        $items_array = explode( '</li>', $items ); 
        array_splice( $items_array, 1, 0, $admin_link );
        $items = implode( '</li>', $items_array ); 
    } return $items; 
} 

// 10 = valeur par défaut (priorité)| 2 = nombre d'arguments du callback 
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

?>
