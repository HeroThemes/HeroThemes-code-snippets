<?php 
/**
* Adjust article excerpt length (note this relies on filters available in Heroic Knowledge Base >= 2.11.4)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('hkb_custom_excerpt_length', 'ht_code_snippets_hkb_custom_excerpt_length', 10, 1);

function ht_code_snippets_hkb_custom_excerpt_length( $no_of_words ){
	$no_of_words = 5;
	return $no_of_words;
}