<?php 
/**
* Append to the ht_kb title tag
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('ht_kb_wp_title_suffix', 'ht_code_snippets_ht_kb_wp_title_suffix_filter', 10, 3);

function  ht_code_snippets_ht_kb_wp_title_suffix_filter( $title_suffix, $post_type, $page_type  ){
    return __( ' -- MYSITE', 'ht-code-snippets' );
} 