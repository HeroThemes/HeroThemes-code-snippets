<?php
/**
* Add text after kb breadcrumbs using new after_hkb_get_template_part_$slug functionality
* Example of the new {before|after}_hkb_get_template_part_{page template slug} filter in hkb 2.16.0
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_action( 'after_hkb_get_template_part_hkb-breadcrumbs', 'ht_code_snippets_after_breadcrumbs' );

function ht_code_snippets_after_breadcrumbs(){
	echo 'Top Searches:';
	hkb_get_template_part('hkb-topsearches');
}