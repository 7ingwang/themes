<?php
defined( 'ABSPATH' ) or die();

function dfmd_fonts_url() {
    $fonts_url = '';

    $font_families = array();

    $font_families[] = 'Montserrat:400,600,800';
    $font_families[] = 'Open+Sans:400,600,800';

    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
    );

    return esc_url_raw( $fonts_url );
}

function dfmd_scripts_head() {
    /* Css files */
    wp_enqueue_style( 'icons', get_theme_file_uri( '/assets/css/icons.css' ) );
    wp_enqueue_style( 'plugins', get_theme_file_uri( '/assets/css/plugins.min.css' ) );
    wp_enqueue_style( 'template', get_theme_file_uri( '/assets/css/template.css' ) );
    wp_enqueue_style( 'style', get_theme_file_uri( 'style.css' ) );
    

}

function dfmd_scripts_footer() {
    /* Js files */       
    wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/custom/jquery.min.js' ) );
    wp_enqueue_script( 'popper', get_theme_file_uri( '/assets/js/custom/popper.min.js' ) );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap/bootstrap.min.js' ) );
    wp_enqueue_script( 'plugins', get_theme_file_uri( '/assets/js/custom/plugins.min.js' ) );
    wp_enqueue_script( 'custom', get_theme_file_uri( '/assets/js/custom/custom.js' ) );
}

/* Enqueue Theme Style and Script Files in header */
add_action( 'wp_enqueue_scripts', 'dfmd_scripts_head' );

/* Enqueue Theme Style and Script Files in Footer */
add_action( 'wp_enqueue_scripts', 'dfmd_scripts_footer' );

?>