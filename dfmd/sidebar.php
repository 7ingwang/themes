<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dfmd
 */
?>
<div class="col-lg-4">
	<div class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-primary' ) ) {
		dynamic_sidebar ( 'sidebar-primary' );
	} ?>
	</div>
</div>