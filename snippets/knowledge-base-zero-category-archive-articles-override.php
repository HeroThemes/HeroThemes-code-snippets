<?php
/**
* Set the number of category articles (does not work when set to 0)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hkb_category_articles', 'hkb_category_articles_override', 10 );

function hkb_category_articles_override($current){
	return 1;
}