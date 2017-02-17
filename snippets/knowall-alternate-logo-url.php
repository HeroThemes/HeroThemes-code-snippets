<?php
/**
* Use this snippet to change the KnowAll logo url to something else
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'ht_knowall_header_logo_url', 'ht_code_snippets_ht_knowall_header_logo_url', 10, 1 );

function ht_code_snippets_ht_knowall_header_logo_url( $url ){
    return 'https://herothemes.com';
}