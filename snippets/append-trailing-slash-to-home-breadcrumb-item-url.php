<?php
/**
* Add a trailing slash to home_url breadcrumb home item
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//filter hkb_breadcrumbs_blog_home_url
add_filter( 'hkb_breadcrumbs_blog_home_url', 'ht_code_snippets_hkb_breadcrumbs_blog_home_url', 99, 1 );

function ht_code_snippets_hkb_breadcrumbs_blog_home_url( $url ){
	return home_url('/');
}