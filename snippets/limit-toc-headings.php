<?php
/**
* Limit TOC headings  to H2
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_kb_toc_extract_headings_h_end_level', 'ht_code_snippets_toc_h_end_level', 10, 1 );


function ht_code_snippets_toc_h_end_level($level){
	return 3;
}
