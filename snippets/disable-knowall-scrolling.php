<?php
/**
* Disable scrolling in KnowAll
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//disable smoothscroll
add_filter( 'ht_disable_scroll_features', '__return_true' );

//disable scrollspy
//add_filter( 'ht_disable_scrollspy_features', '__return_true' );
//dequeue scrollspy
//add_action( 'wp_print_scripts', 'ht_dequeue_scrollspy', 20 );
function ht_dequeue_scrollspy() {
   wp_dequeue_script( 'scrollspy' );
}

