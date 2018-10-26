<?php
/**
* Disable Knowledge Base Archive Metabox from the Appearance > Menus page
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_knowledge_base_menu_metabox_allowed', '__return_false');

