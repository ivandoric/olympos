<?php

function olympos_enqueue_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'olympos_enqueue_scripts');


/* Add menu support */

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add post image support */

add_theme_support( 'post-thumbnails' );


/*=== Custom thumbnail sizes ===*/

if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'news-thumbs', 79, 72, true );
}

/* Add widget support */

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarOne',
	'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarTwo',
	'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));


/*=== EXCERPT ===*/
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
