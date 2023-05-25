<?php
/**
* Disable HKB Search in terms
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//disable hkb search terms with filter
add_filter( 'hkb_search_terms', '__return_false' );

