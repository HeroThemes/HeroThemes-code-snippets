<?php
/**
* Hide KnowAll theme activation reminder
* This snippet can be used to hide the activation reminder in KnowAll (https://herothemes.com/themes/knowall-wordpress-knowledge-base/)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hkb_data_cleaner_retention_cutoff_days', 'ht_code_snippets_hkb_data_cleaner_retention_cutoff_days', 10, 1 );

function ht_code_snippets_hkb_data_cleaner_retention_cutoff_days( $days ){
    return 5;
}