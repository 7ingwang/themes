<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_4
 */

if ( ! function_exists( 'wp_bootstrap_4_setup' ) ) :
	function wp_bootstrap_4_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'wp-bootstrap-4', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-bootstrap-4' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_4_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


//获取文章内的首张图片
function catch_that_image() {

global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
 
//获取文章中第一张图片的路径并输出
$first_img = $matches [1] [0];
 
//如果文章无图片，获取自定义图片
 
if(empty($first_img)){ //Defines a default image
$first_img = get_template_directory_uri()."/assets/images/default.jpg";
 
//请自行设置一张default.jpg图片
}
 
return $first_img;
}


//前端自定义posts排序
function get_home_posts( $args = null ) {
     $defaults = array(
         'numberposts' => 5,
         'category' => 0, 'orderby' => 'date',
         'order' => '', 'include' => array(),
         'exclude' => array(), 'meta_key' => '',
         'meta_value' =>'', 'post_type' => 'post',
         'suppress_filters' => true
     );

     $r = wp_parse_args( $args, $defaults );
     if ( empty( $r['post_status'] ) )
         $r['post_status'] = ( 'attachment' == $r['post_type'] ) ? 'inherit' : 'publish';
     if ( ! empty($r['numberposts']) && empty($r['posts_per_page']) )
         $r['posts_per_page'] = $r['numberposts'];
     if ( ! empty($r['category']) )
         $r['cat'] = $r['category'];
     if (empty($r['order']))
         $r['order'] = 'DESC';
     if ( ! empty($r['include']) ) {
         $incposts = wp_parse_id_list( $r['include'] );
         $r['posts_per_page'] = count($incposts);  // only the number of posts included
         $r['post__in'] = $incposts;
     } elseif ( ! empty($r['exclude']) )
         $r['post__not_in'] = wp_parse_id_list( $r['exclude'] );

     $r['ignore_sticky_posts'] = true;
     $r['no_found_rows'] = true;

     $get_posts = new WP_Query;
     return $get_posts->query($r);

 }
 
 

//小工具：文章文类 by xiao
function mb_categories() {
    $catid = 0;
    $catname = '分类栏目';
    if ( is_category() ) { 
        $term = get_queried_object();
        if ($term->parent > 0) {
            $catid = $term->parent;
        } else {
            $catid = $term->cat_ID;
            $catname = $term->cat_name;
        }   
    } elseif(is_single()) {
        $cat = get_the_category();
        $cat = $cat[0];
        if ($cat->parent > 0) {
            $catid = $cat->parent;
        } else {
            $catid = $cat->term_id;
            $catname = $cat->cat_name;
        }   
    }   
    if ($catid > 0) {
        if ($catname == '分类栏目') {
            $catname = get_the_category_by_ID($catid);
        }   
        include(TEMPLATEPATH . '/categories.php'); 
    }   
}
if( function_exists( 'register_sidebar_widget' ) ) {   
    register_sidebar_widget('文章分类','mb_categories');   
}
 


// 面包屑导航 
function get_breadcrumbs()
{
global $wp_query;

if ( !is_home() ){

// Start the UL
echo '<ul class="breadcrumbs">';
// Add the Home link
echo '<li><a href="'. get_settings('home') .'">网站	首页</a></li>';

if ( is_category() )
{
$catTitle = single_cat_title( "", false );
$cat = get_cat_ID( $catTitle );
echo "<li> &raquo; ". get_category_parents( $cat, TRUE, " &raquo; " ) ."</li>";
}
elseif ( is_archive() && !is_category() )
{
echo "<li> &raquo; Archives</li>";
}
elseif ( is_search() ) {

echo "<li> &raquo; Search Results</li>";
}
elseif ( is_404() )
{
echo "<li> &raquo; 404 Not Found</li>";
}
elseif ( is_single() )
{
$category = get_the_category();
$category_id = get_cat_ID( $category[0]->cat_name );

echo '<li> &raquo; '. get_category_parents( $category_id, TRUE, " &raquo; " );
echo the_title('','', FALSE) ."</li>";
}
elseif ( is_page() )
{
$post = $wp_query->get_queried_object();

if ( $post->post_parent == 0 ){

echo "<li> &raquo; ".the_title('','', FALSE)."</li>";

} else {
$title = the_title('','', FALSE);
$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
array_push($ancestors, $post->ID);

foreach ( $ancestors as $ancestor ){
if( $ancestor != end($ancestors) ){
echo '<li> &raquo; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
} else {
echo '<li> &raquo; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
}
}
}
}

// End the UL
echo "</ul>";
}
}
