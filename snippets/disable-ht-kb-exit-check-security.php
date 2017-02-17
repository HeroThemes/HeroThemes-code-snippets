<?php
/**
* Disable the ht kb exits security check
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_exits_check_nonce', 'ht_kb_exits_check_nonce_snippet' );

function ht_kb_exits_check_nonce_snippet($enabled){
    return false;
}