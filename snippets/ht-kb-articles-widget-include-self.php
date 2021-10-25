<?php
/**
* Shows current article in articles widget
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_articles_widget_exclude_self', '__return_false' );
