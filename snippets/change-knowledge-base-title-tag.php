<?php
/**
* Change the knowledge base title
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add the filter hook to change the <title>
add_filter( 'ht_kb_wp_title_tag_filter', 'modify_ht_kb_title_tag_snippet', 10, 3 );

function modify_ht_kb_title_tag_snippet($title='', $sep=' ', $seplocation=null, $post_type='ht_kb', $page_type='ht_kb_category'){
   
   return $title;
}