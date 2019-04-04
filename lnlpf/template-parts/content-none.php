<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<section class="no-results not-found card mt-3r">
	<div class="card-body">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( '没有内容', 'wp-bootstrap-4' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp-bootstrap-4' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
				?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( '抱歉，没有任何内容符合您的搜索字词。 请使用一些不同的关键字再试一次。', 'wp-bootstrap-4' ); ?></p>
				<?php
					get_search_form();

			else : ?>

				<p><?php esc_html_e( '我们似乎无法找到您正在寻找的东西，也许搜索可以帮助您	。', 'wp-bootstrap-4' ); ?></p>
				<?php
					get_search_form();

			endif; ?>
		</div><!-- .page-content -->
	</div>
	<!-- /.card-body -->
</section><!-- .no-results -->
