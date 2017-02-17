<?php
/**
* Enable hierarchical slugs for the ht_kb_category taxonomy
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_category_rewrite_hierachical', 'ht_kb_category_rewrite_hierachical_snippet' );

function ht_kb_category_rewrite_hierachical_snippet($enabled){
    return true;
}