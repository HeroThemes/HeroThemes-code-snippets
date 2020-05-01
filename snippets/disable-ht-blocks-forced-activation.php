<?php
/**
* Disable forced activation of the blocks
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_heroic_blocks_plugin_force_activation', '__return_false');

