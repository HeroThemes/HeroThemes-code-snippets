<?php
/**
* Display hide category settings
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_action( 'admin_notices', 'ht_code_snippets_show_hide_category_settings', 10 );

function ht_code_snippets_show_hide_category_settings(  ){
	echo 'Hello Admin Notices';
	var_dump(hkb_archive_hide_empty_categories());
	var_dump(get_theme_mod( 'ht_setting__kbarchivehideemptycats', false ));
}