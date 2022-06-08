<?php
/**
* Disable HKB Search in terms
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//remove voting meta box
add_filter( 'hkb_search_terms', '__return_false' );

