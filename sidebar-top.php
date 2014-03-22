<div id="nav">
	<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>

	<ul class="pages">
		<a href="<?php echo get_option('home'); ?>">Home</a>
		<?php wp_list_pages('title_li='); ?>
	</ul>
</div>