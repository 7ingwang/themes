<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * Learn more: https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dfmd
 */
 
get_header(); ?>
<div class="page-blog main-container">
    <div class="container">
		<div class="margin-100"></div>
		<div class="section-heading text-center animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h2 class="section-description"><?php esc_html_e( 'Oops!', 'dfmd' ) ?></h2>
			<h4><?php esc_html_e( 'We can\'t seem to find the page you\'re looking for.', 'dfmd' ) ?></h4>
			<a class="btn main-btn" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Go Back To Home', 'dfmd' ) ?></a>
        </div>
	</div>
	<div class="margin-100"></div>
</div>
<?php get_footer(); ?>