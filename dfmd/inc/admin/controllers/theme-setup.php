<?php
defined( 'ABSPATH' ) or die();

function wl__dfmd_theme_setup() {
	/* Load child theme text domain. */
	if ( is_child_theme() ) {
		load_child_theme_textdomain( 'dfmd', get_stylesheet_directory() . '/languages' );
	}

	/* Load theme text domain. */
	load_theme_textdomain( 'dfmd', get_template_directory() . '/languages' );

	/* Register custom menu. */
	register_nav_menu( 'primary', __( 'Primary Menu', 'dfmd' ) );

	/* Gutenberg */
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Block Color Palettes */
	add_theme_support( 'editor-color-palette', array(
	    array(
	        'name' => __( 'strong magenta', 'dfmd' ),
	        'slug' => 'strong-magenta',
	        'color' => '#a156b4',
	    ),
	    array(
	        'name' => __( 'light grayish magenta', 'dfmd' ),
	        'slug' => 'light-grayish-magenta',
	        'color' => '#d0a5db',
	    ),
	    array(
	        'name' => __( 'very light gray', 'dfmd' ),
	        'slug' => 'very-light-gray',
	        'color' => '#eee',
	    ),
	    array(
	        'name' => __( 'very dark gray', 'dfmd' ),
	        'slug' => 'very-dark-gray',
	        'color' => '#444',
	    ),
	) );

	/* Block Font Sizes */
	add_theme_support( 'editor-font-sizes', array(
	    array(
	        'name' => __( 'small', 'dfmd' ),
	        'shortName' => __( 'S', 'dfmd' ),
	        'size' => 12,
	        'slug' => 'small'
	    ),
	    array(
	        'name' => __( 'regular', 'dfmd' ),
	        'shortName' => __( 'M', 'dfmd' ),
	        'size' => 16,
	        'slug' => 'regular'
	    ),
	    array(
	        'name' => __( 'large', 'dfmd' ),
	        'shortName' => __( 'L', 'dfmd' ),
	        'size' => 36,
	        'slug' => 'large'
	    ),
	    array(
	        'name' => __( 'larger', 'dfmd' ),
	        'shortName' => __( 'XL', 'dfmd' ),
	        'size' => 50,
	        'slug' => 'larger'
	    )
	) );

	/* Disabling custom colors in block Color Palettes */
	add_theme_support( 'disable-custom-colors' );

	/* Add editor style. */
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );

	/* Load editor style. */
	add_editor_style();

	/* Add default posts and comments RSS feed links to head. */
	add_theme_support( 'automatic-feed-links' );

	/* Enable support for Post Thumbnails. */
	add_theme_support( 'post-thumbnails' );

	/* Add title tag support. */
	add_theme_support( 'title-tag' );

	/* Allow shortcodes in widgets. */
	add_filter( 'widget_text', 'do_shortcode' );

	/* Create upload dir. */
	wp_upload_dir();

	/* Enable support for Woocommerce */
  	add_theme_support( 'woocommerce' );
  	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    /* Enable support for HTML5 */
    add_theme_support( 'html5', array(
	    'comment-form',
	    'comment-list',
	    'gallery',
	    'caption',
	  ) );

     $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );

    $defaults = array(
    'default-image'          => get_template_directory_uri().'/assets/images/header-bg.jpg',
    'flex-width'             => true,
	'width'                  => 980,
	'flex-height'            => true,
	'height'                 => 400,
    'uploads'                => true,
    'random-default'         => true,
    'header-text'            => true,
    'default-text-color'     => '#fff',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    );
  add_theme_support( 'custom-header', $defaults );

  add_theme_support( 'custom-background' );

  if ( ! isset( $content_width ) ) $content_width = 900;

}

function wl__dfmd_widgets_init() {

  /*sidebar*/
  register_sidebar( array(
      'name' => __( 'Sidebar', 'dfmd' ),
      'id' => 'sidebar-primary',
      'description' => __( 'The primary widget area', 'dfmd' ),
      'before_widget' => '<div id="%1$s" class="widget widget-categories %2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<div class="widgets-title"> <h6>',
	  'after_title' => '</div>',
    ) );

  register_sidebar( array(
      'name' => __( 'Footer Widgets', 'dfmd' ),
      'id' => 'footer-widget-area',
      'description' => __( 'footer widget area', 'dfmd' ),
      'before_widget' => '<div id="%1$s" class="col-md-4 widgets-col %2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<div class="widgets-title"> <h6>',
	  'after_title' => '</div>',
    ) ); 
}

/** Theme setup **/
add_action( 'after_setup_theme', 'wl__dfmd_theme_setup', 5 );

/** Theme **/
add_action( 'widgets_init', 'wl__dfmd_widgets_init' );

//Plugin Recommend
add_action('tgmpa_register','dfmd_plugin_recommend');
function dfmd_plugin_recommend(){
	$plugins = array(
	array(
            'name'      => 'weblizar-companion',
            'slug'      => 'weblizar-companion',
            'required'  => false,
        )
		
	);
    tgmpa( $plugins );
}
?>