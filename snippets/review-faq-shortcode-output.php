<?php
/**
* Code snippet to review and debug the FAQ shortcode output 
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_action( 'wp_footer', 'ht_code_snippets_review_faq_shortcode', 10 );

function ht_code_snippets_review_faq_shortcode( ){
	global $hfaq_unique_ID; 
    echo 'Test Code->';
    var_dump($hfaq_unique_ID);
}