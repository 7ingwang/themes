<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dfmd
 */

get_header(); ?>

	<!-- Hero-->
	<section class="module-cover parallax text-center" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-6.jpg" data-overlay="0.1">
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

			<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- 特色图片
	        	<?php if ( has_post_thumbnail() ) { ?>
	        	    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
	        	<?php } ?>
			-->
	   			
	        	<div class="row">
		        	<div class="col-lg-12 m-auto">
		    	    	<?php the_content(); ?>
		    	    </div>
		    	</div>

			<?php endwhile; endif; ?>

	    </div>
	</section>
	<!-- Blog end-->
	
<!--blogo-page-cont-->
<div class="page-blog main-container">
    <div class="blog-post-all container animate" data-anim-type="fadeInLeft" data-anim-delay="400">
        <!--blogo-post-->
        <div class="row">
            
        </div>
        
    </div>
<?php get_footer(); ?>