<?php
/**
 * The template for displaying Category Posts
 *
 * @package dfmd
 */
get_header(); ?>

	<!-- Hero-->
	<section class="module-cover parallax text-center" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-6.jpg" data-overlay="0.1">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
					<h2>产品中心</h2>
	                <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>">首页</a></li>
                        <li class="breadcrumb-item active">产品中心</li>
                    </ol>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Hero end-->
	

	<!-- Filter-->
	<section class="module p-t-35 p-b-0">
        <div class="container">
	        <div class="row">
		        <div class="col-md-12">
		        	<ul class="filter">
						<?php wp_list_categories('include=4,5,6&title_li='); ?>
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
        </div>
    </section>    
	<!-- Post Grid end-->



<?php get_footer(); ?>