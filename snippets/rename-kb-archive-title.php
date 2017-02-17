<?php 
/**
* Change the name of the support center (useful for SEO?)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('ht_kb_dummy_page_title', 'ht_code_snippets_ht_kb_dummy_page_title_filter', 10, 1);

function  ht_code_snippets_ht_kb_dummy_page_title_filter( $title ){
    return __( 'My Support Center', 'ht-code-snippets' );
} 