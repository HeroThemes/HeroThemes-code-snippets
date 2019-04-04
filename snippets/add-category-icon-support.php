<?php
/**
* Add support for category icons in the knowledge base (note this should ideally be placed in your themes
* functions.php file)
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'init', 'ht_code_snippets_add_kb_category_icons_theme_support' );

function ht_code_snippets_add_kb_category_icons_theme_support($supports){
	add_theme_support( 'ht-kb-category-icons' );
}