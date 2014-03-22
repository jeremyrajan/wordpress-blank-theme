<h2>Categories</h2>
<ul id="categories">
<?php wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1'); ?>
</ul>

<h2>Widgets</h2>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> <!--check functions.php-->
<?php endif; ?>