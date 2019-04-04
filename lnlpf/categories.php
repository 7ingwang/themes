<section class="widget border-bottom widget_categories">
	<h5 class="widget-title h6"><?php echo $catname; ?></h5>
	<ul>
	<?php wp_list_cats("sort_column=name&hierarchical=0&exclude=&child_of=$catid"); ?>
	</ul>
</section>
