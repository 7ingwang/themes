<?php 
/**
 * Template for displaying search forms in Theme
 *
 * @package dfmd
 */
 ?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row m-0">
		<div class="form-group">
			<input type="text" class="form-control" name="s" id="s" placeholder="Type Your Search Here">
			<input type="submit" class="btn btn-brand btn-sm" id="searchsubmit" value="Search">
		</div>
	</div>
</form>