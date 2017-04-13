<?php
/**
* Search additional post type, See https://codex.wordpress.org/Post_Types
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hkb_search_post_types', 'ht_code_snippets_add_posts_to_hkb_search', 10, 1 );

function ht_code_snippets_add_posts_to_hkb_search( $search_post_types ){
    //add the post post type (you can add post, page etc)
    $search_post_types[] = 'post';
    return $search_post_types;
}