<?php
/**
* Test rest url removal, used for debug
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter( 'rest_url', 'ht_code_snippets_rest_url', 10, 4 );

function ht_code_snippets_rest_url($url, $path, $blog_id, $scheme){
	return '';
}