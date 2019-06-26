<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dfmd
 */
?>
<!Doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body <?php body_class(); ?> >

	<!-- Header-->
    <header class="header">
        <div class="container-fluid">
            <!-- Brand-->
            <div class="inner-header"><a class="inner-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a></div>
            <span class="pin"><i class="icon-whatsapp"></i>400 005 8857</span>
            <!-- Navigation-->
            <div class="inner-navigation collapse">
                <div class="inner-nav">
					<?php wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu_class'     => '',
                      'container'      => false,
                      'menu_id'        => false,
                      'fallback_cb'    => 'wl_fallback_page_menu',
                      'walker'         => new wl_nav_walker(),
                      )
                    ); 
                ?>
                </div>
            </div>
            <div class="extra-nav">
                <ul>
                    <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="menu-item-span"><i class="icon-navicon"></i></span></a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header end-->
    
    <!-- Wrapper-->
        <div class="wrapper">
