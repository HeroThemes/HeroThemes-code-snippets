<?php
/**
* Change the knowledge base title tag 
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add the filter hook to change the <title>
//@deprecated - use ht_kb_wp_title_tag_filter instead!
add_filter( 'ht_kb_wp_title', 'modify_ht_kb_title_snippet', 10, 2 );

function modify_ht_kb_title_snippet($title='', $post_type='ht_kb'){
	if( 'Knowledge Base' == trim( $title ) ){
		return __( 'Your KB title here', 'ht-code-snippets' );;
   } 
}