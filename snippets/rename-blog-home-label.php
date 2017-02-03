<?php 
/**
* Change the name of the Home label in the breadcrumbs to Support Center
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('hkb_breadcrumbs_blog_home_label', 'ht_code_snippets_hkb_breadcrumbs_blog_home_label_filter', 10, 1);

function  ht_code_snippets_hkb_breadcrumbs_blog_home_label_filter( $title ){
    return __( 'Support Center', 'ht-code-snippets' );
} 