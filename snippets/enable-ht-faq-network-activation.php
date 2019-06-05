<?php
/**
* Enable network activation on the Heroic FAQ plugin
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_faq_prevent_multisite_network_activation', '__return_false');