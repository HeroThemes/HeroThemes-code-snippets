<?php
/**
* Yoast SEO 14.0+ Heroic Knowledge Base shiv/fix
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_filter( 'stop_ht_knowledge_base_custom_content', 'ht_code_snippets_stop_ht_knowledge_base_custom_content', 10 );

function ht_code_snippets_stop_ht_knowledge_base_custom_content($state){
	if( doing_filter( 'get_the_excerpt' ) ){
		return true;
	} else {
		return $state;
	}
}

