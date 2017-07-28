<?php 
/**
* Change the title of Knowledge Base (H1 custom title method )
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('ht_knowledge_base_custom_title', 'ht_code_snippets_ht_knowledge_base_custom_title_filter', 10, 1);

function  ht_code_snippets_ht_knowledge_base_custom_title_filter( $title ){
	if( __( 'Knowledge Base', 'ht-knowledge-base' ) ==  $title ){
		return __( 'The Support Center', 'ht-code-snippets' );	
	} 
	return $title;
    
} 