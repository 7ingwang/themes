	<!-- Shop Grid-->

	<?php 
	if ( have_posts() ): 
	    $count = 0;
	    while ( have_posts() ): the_post();
	?> 
    
        <div class="col-md-6">
            <div class="shop-grid-item blog-post">
	 		<?php if ( has_post_thumbnail() ) { ?>
	         
	         <div class="shop-item-thumb">
	                <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image();?>" class="img-fluid" alt="<?php the_title(); ?>"></a>
                    <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">我要购买</a></div>
                </div>
                
                <div class="shop-item-captions">
                    <h6 class="shop-item-title"><?php the_title(); ?></h6><span class="shop-item-price"><?php the_excerpt(); ?></span>
                </div>
                
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
	
	<div class="col-md-12">
    <?php esc_html( wl_theme_get_the_pagination() ); ?>
    </div>
    

	<!-- Shop Grid end-->
