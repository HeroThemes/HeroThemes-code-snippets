<?php
/**
* Change the knowledge base live search trigger string length
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_livesearch_trigger_length', 'ht_code_snippets_ht_kb_livesearch_trigger_length', 10, 1 );

function ht_code_snippets_ht_kb_livesearch_trigger_length( $length ){
    return 1;
}