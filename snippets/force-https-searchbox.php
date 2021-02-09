<?php
/**
* Force SSL on the searchbox
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter('ht_kb_search_home_url', 'force_ssl_ht_kb_search_home_url');

function force_ssl_ht_kb_search_home_url($url){
	return get_home_url( null, '', 'https' );
}