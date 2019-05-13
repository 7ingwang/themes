<?php
/**
 * The template for displaying Category Posts
 *
 * @package dfmd
 */
get_header(); ?>

	<section class="module-page-title bg-gray bg-img" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-6.jpg" data-overlay="0.1">
    	<div class="container">
    	    <div class="row align-items-center">
    	        <div class="col-md-6">
    	            <div class="page-title-desc">
    	                <h1 class="page-title-heading">产品中心</h1>
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
	

	<!-- Filter-->
	<section class="module p-t-35 p-b-0">
        <div class="container">
	        <div class="row">
		        <div class="col-md-12">
		        	<ul class="filter">
						<?php wp_list_categories('orderby=id&include=4,5,13&title_li='); ?> 
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Filter end-->
<script>
$(document).ready(function(){
    $(".filter").remove()
});
</script>

	<!-- Post Grid-->
    <section class="module p-t-35">
        <div class="container">
            <div class="row">      
	            <?php get_template_part('post-content-card'); ?>
            </div>
            <?php esc_html( wl_theme_get_the_pagination() ); ?>
        </div>
    </section>    
	<!-- Post Grid end-->
	


<?php get_footer(); ?>