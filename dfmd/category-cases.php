<?php
/**
 * The template for displaying Category Posts
 *
 * @package dfmd
 */
get_header(); ?>

	<section class="module-page-title bg-gray bg-img" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-5.jpg" data-overlay="0.1">
    	<div class="container">
    	    <div class="row align-items-center">
    	        <div class="col-md-6">
    	            <div class="page-title-desc">
    	                <h1 class="page-title-heading">工程案例</h1>
    	            </div>
    	        </div>
    	        <div class="col-md-6">
    	            <ol class="breadcrumb">
    	                <?php get_breadcrumbs(); ?>
    	            </ol>
    	        </div>
    	    </div>
    	</div>
    </section>

    <!-- Post Grid -->
    <section class="module divider-top">
         <div class="container">
            <div class="row row-portfolio gallery-group" data-columns="3">    
	            <div class="grid-sizer"></div>
	            <?php get_template_part('post-content-cases'); ?>
            </div>
            <?php esc_html( wl_theme_get_the_pagination() ); ?>
        </div>
    </section>    
	<!-- Post Grid end-->
	
	


<?php get_footer(); ?>