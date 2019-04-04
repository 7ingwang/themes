<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dfmd
 */
 get_header(); ?>
 
 
 	<!-- Hero-->
	<section class="module-cover parallax text-center" data-background="assets/images/module-17.jpg" data-overlay="1">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                <?php get_breadcrumbs(); ?>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Hero end-->
 
 
 	<!-- Blog-->
    <section class="module">
        <div class="container">
            <div class="row">
	 			<div class="col-lg-12 m-auto">
	 	        
		 	        <?php 
		 				if( have_posts() ) { 
		 				while ( have_posts() ) { the_post();
		 			?>
		 			<!--post-->
		 
		 			<?php if ( has_post_thumbnail() ) { ?>
		 			<div class="post-preview">
		 			    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
		 			</div>
		 			<?php } ?>
		 			<div class="post-wrapper">
		 				<p class="mb-4"><?php the_content(); ?></p>
		 			</div>
		 
		 			<?php 
		 				} 
		 			} ?>
	                
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end-->

<?php get_footer(); ?>