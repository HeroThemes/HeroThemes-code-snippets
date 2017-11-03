<?php
/**
* Add featured image support to ht_kb post type
* Note that this only allows you to add featured images to articles in the backend
* Theme support must be declared with add_theme_support( 'post-thumbnails' )
* See https://codex.wordpress.org/Post_Thumbnails
* You also need to modify your template(s) to display featured images on the frontend
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_cpt_supports', 'ht_code_snippets_add_featured_image_support_to_ht_kb' );

function ht_code_snippets_add_featured_image_support_to_ht_kb($supports){
	$supports[] = 'thumbnail';
	return $supports;
}