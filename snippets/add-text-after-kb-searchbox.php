<?php
/**
* Add text after kb searchbox using new after_hkb_get_template_part_$slug functionality
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_action( 'after_hkb_get_template_part_hkb-searchbox', 'ht_code_snippets_after_searchbox' );

function ht_code_snippets_after_searchbox(){
	echo 'hola';
}