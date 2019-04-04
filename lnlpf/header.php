<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icons.css?0112">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?></a>

	<header id="masthead" class="site-header sticky-top">
		<div class="container">
			<div class="site-logo">
				<?php the_custom_logo(); ?>
	
				<div class="site-branding-text">
					<?php
						if ( is_front_page() && is_home() ) : ?>
			                <h1 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h1>
			            <?php else : ?>
			                <h2 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h2>
			            <?php
						endif;
	
						if ( get_theme_mod( 'show_site_description', 1 ) ) {
			                $description = get_bloginfo( 'description', 'display' );
			                if ( $description || is_customize_preview() ) : ?>
			                    <p class="site-description"><?php echo esc_html( $description ); ?></p>
			                <?php
			                endif;
			            }
					?>
				</div>
			</div>
			<a class="navbar-toggler" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
					<i class="oi oi-menu"></i>
				</a>
		</div>
		
		
		
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
			<div class="container">

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'primary-menu-wrap',
						'menu_class'      => 'navbar-nav ml-auto',
			            'fallback_cb'     => '__return_false',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 2,
			            'walker'          => new WP_bootstrap_4_walker_nav_menu()
					) );
				?>
				<div class="mask"></div>
			</div>
		</nav><!-- #site-navigation -->
		<script>
			$(document).ready(function(){
				//导航下拉菜单滑过展开
			    $(document).off('click.bs.dropdown.data-api');
			    $(".dropdown").mouseover(function() {
			    	$(this).addClass("show");
			  	});
			  	$(".dropdown").mouseleave(function(){
				    $(this).removeClass("show");
			  	})
			  	$(".current-menu-item").parents(".dropdown").addClass("current-menu-item");
			
			
			  	//移动端右侧点击滑出菜单
				$(".navbar-toggler").on('click', function() {
					$(".mask").toggleClass("show");
				});
			    $(".mask").on('click', function(){
				    $(".navbar-toggler").click();  
			    });
		    
		    });
		</script>

	</header><!-- #masthead -->

	<div class="breadcrumbs">
		<div class="container"><?php get_breadcrumbs(); ?></div>
	</div>

	<div id="content" class="site-content">
