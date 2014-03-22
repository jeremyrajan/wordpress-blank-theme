<?php
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('index-categories', 150, 150, true);
    add_image_size('page-single', 350, 350, true);
}

add_theme_support('widgets');

function InsertFeaturedImage($content) {
 
global $post;
 
$original_content = $content;
 
    if ( current_theme_supports( 'post-thumbnails' ) ) {
 
        if ((is_page()) || (is_single())) {
            $content = the_post_thumbnail('page-single');
            $content .= $original_content;
            } else {
            $content = the_post_thumbnail('index-categories');
            $content .= $original_content;
        }
 
    }
    return $content;
}
 
add_filter( 'the_content', 'InsertFeaturedImage' );

if (function_exists('register_sidebar')) {
     register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id'   => 'sidebar-widgets',
      'description'   => 'Widget Area',
      'before_widget' => '<div id="one" class="two">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
     ));
    }
    
?>