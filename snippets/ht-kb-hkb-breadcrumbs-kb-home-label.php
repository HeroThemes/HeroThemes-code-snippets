<?php
/**
* Modify hkb_breadcrumbs_kb_home_label
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hkb_breadcrumbs_kb_home_label', 'ht_code_snippets_modify_kb_home_breadcrumb_label' );

function ht_code_snippets_modify_kb_home_breadcrumb_label( $label  ){
	return __('Knowledge Base Home Page', 'ht-code-snippets');	
}