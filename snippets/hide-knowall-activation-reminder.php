<?php
/**
* Hide KnowAll theme activation reminder
* This snippet can be used to hide the activation reminder in KnowAll (https://herothemes.com/themes/knowall-wordpress-knowledge-base/)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hide_knowall_activation_reminder', 'ht_code_snippets_hide_knowall_activation_reminder', 10, 1 );

function ht_code_snippets_hide_knowall_activation_reminder( $hide ){
    return true;
}