	<!-- Shop Grid-->

	<?php 
	if ( have_posts() ): 
	    $count = 0;
	    while ( have_posts() ): the_post();
	?> 
    	
        <div class="portfolio-item">
            <div class="portfolio-item-wrapper">
	            
	            <?php if ( has_post_thumbnail() ) { ?>
                <div class="portfolio-item-img">
	                <a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>"></a>
                </div>
                <div class="portfolio-item-caption"><h6 class="portfolio-item-title"><?php the_title(); ?></h6><span class="portfolio-item-subtitle serif"><?php the_excerpt(); ?></span></div>
	  			<?php } ?>
	  			
            </div>
        </div>
	

	<?php
	    $count++;
	    endwhile;
	    else:    
	        esc_html_e( '哎呀，还没有内容！', 'dfmd' );
	    endif;
	?>

    <?php esc_html( wl_theme_get_the_pagination() ); ?>
    

	<!-- Shop Grid end-->
