<?php
/**
* Hide Empty Categories using the settings filter
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'hkb_archive_hide_empty_categories', '__return_true' );