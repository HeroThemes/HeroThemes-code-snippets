<?php
/**
* Remove voting metabox in the editor screens
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//remove voting meta box
add_action( 'add_meta_boxes_ht_kb', 'ht_code_snippets_remove_voting_metabox', 20 );

function ht_code_snippets_remove_voting_metabox(){
    remove_meta_box( 'ht-voting-display', 'ht_kb', 'normal' );
}