<?php
/**
* Redirect front page to knowledge base archive
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'template_redirect', 'ht_redirect_front_page_to_kb', 1 );

function ht_redirect_front_page_to_kb(){
	if( is_front_page() ){
		$kb_default_url = site_url( '/knowledge-base/' );
		wp_redirect( $kb_default_url, 302 );
   } 
}