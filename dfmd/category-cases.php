<?php
/**
 * The template for displaying Category Posts
 *
 * @package dfmd
 */
get_header(); ?>

	<!-- Hero-->
	<section class="module-cover parallax text-center" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-8.jpg" data-overlay="0.1">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
					<h2>工程案例</h2>
	                <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>">首页</a></li>
                        <li class="breadcrumb-item active">工程案例</li>
                    </ol>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Hero end-->

    <!-- Post Grid -->
    <section class="module divider-top">
         <div class="container">
            <div class="row row-portfolio gallery-group" data-columns="3">    
	            <div class="grid-sizer"></div>
	            <?php get_template_part('post-content-cases'); ?>
            </div>
        </div>
    </section>    
	<!-- Post Grid end-->



<?php get_footer(); ?>