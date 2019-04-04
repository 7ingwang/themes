<?php
/**
 * VW Education Academy functions and definitions
 *
 * @package dfmd
 */

defined( 'ABSPATH' ) or die();

require( get_template_directory() . '/inc/functions/breadcrumb/wl-custom-breadcrumb.php' );
require( get_template_directory() . '/inc/functions/comment/wl-comment.php' );
require( get_template_directory() . '/inc/functions/menu/wl-nav-walker.php' );
require( get_template_directory() . '/inc/functions/menu/default-menu-walker.php' );
require( get_template_directory() . '/inc/admin/controllers/wl-scripts.php' );
require( get_template_directory() . '/inc/functions/general-functions.php' );
require( get_template_directory() . '/inc/admin/controllers/theme-setup.php' );
require( get_template_directory() . '/inc/admin/admin.php' );
require( get_template_directory() . '/inc/admin/class-tgm-plugin-activation.php' );



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



// 面包屑导航 
function get_breadcrumbs()
{
global $wp_query;

if ( !is_home() ){

// Start the UL
echo '<ul class="breadcrumb justify-content-center">';
// Add the Home link
echo '<li class="breadcrumb-item"><a href="'. get_settings('home') .'">首页</a></li>';

if ( is_category() )
{
$catTitle = single_cat_title( "", false );
$cat = get_cat_ID( $catTitle );
echo "<li class='breadcrumb-item'>". get_category_parents( $cat, TRUE, "" ) ."</li>";
}
elseif ( is_archive() && !is_category() )
{
echo "<li class='breadcrumb-item'>Archives</li>";
}
elseif ( is_search() ) {

echo "<li class='breadcrumb-item'>Search Results</li>";
}
elseif ( is_404() )
{
echo "<li class='breadcrumb-item'>404 Not Found</li>";
}
elseif ( is_single() )
{
$category = get_the_category();
$category_id = get_cat_ID( $category[0]->cat_name );

echo '<li class="breadcrumb-item">'. get_category_parents( $category_id, TRUE, "</li>" );
echo "<li class='breadcrumb-item'>".the_title('','', FALSE)."</li>";
}
elseif ( is_page() )
{
$post = $wp_query->get_queried_object();

if ( $post->post_parent == 0 ){

echo "<li class='breadcrumb-item'>".the_title('','', FALSE)."</li>";

} else {
$title = the_title('','', FALSE);
$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
array_push($ancestors, $post->ID);

foreach ( $ancestors as $ancestor ){
if( $ancestor != end($ancestors) ){
echo '<li class="breadcrumb-item"><a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
} else {
echo '<li class="breadcrumb-item active">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
}
}
}
}

// End the UL
echo "</ul>";
}
}


?>

