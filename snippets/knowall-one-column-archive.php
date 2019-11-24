<?php
/**
* Override archive columns setting in knowledge base archive
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'theme_mod_ht_setting__kbarchivecols', 'ht_code_snippets_override_archive_columns' );

//this works but knowall does not support single column layout as ul.hkb-archive--1cols not implemented
//see issue https://bitbucket.org/herothemes/knowall/issues/254/support-one-column-kb-archive-f
function ht_code_snippets_override_archive_columns( $previous_columns_string ){
	return '1';
}

