<?php
/*
* Template Name: Contact
*/

get_header(); ?>

<section class="full">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12">
				<div id="primary" class="content-area">
		            <main id="main" class="site-main">
		
		                <?php
		                while ( have_posts() ) : the_post();
		
		                    get_template_part( 'template-parts/content', 'page-full' );
		
		                    // If comments are open or we have at least one comment, load up the comment template.
		                    if ( comments_open() || get_comments_number() ) :
		                        comments_template();
		                    endif;
		
		                endwhile; // End of the loop.
		                ?>
		
		            </main><!-- #main -->
		        </div><!-- #primary -->

			</div><!-- .col.col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .full -->

<?php get_footer();
