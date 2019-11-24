<?php
/**
* Disable packaged plugins install
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add_filter( 'ht_knowall_allow_hkb_install', '__return_false' );

add_filter( 'ht_knowall_allow_shortcodes_install', '__return_false' );

add_filter( 'ht_knowall_allow_heroic_blocks_install', '__return_false' );

add_filter( 'ht_knowall_allow_integrations_install', '__return_true' );