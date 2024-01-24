<?php
/**
* Control Help Assistant display
*/

function ht_code_snippets_display_front_end_help_assistant($display = false) {

	//default to not display
	$display = false;

	//display on knowledge base articles and taxonomies
	if( function_exists('get_post_type') && 'ht_kb' == get_post_type() ){
		$display = true;
	}


	//display on knowledge base homepage 
	if( function_exists('ht_kb_get_kb_archive_page_id') && 
		function_exists('get_queried_object_id') && 
		ht_kb_get_kb_archive_page_id() == get_queried_object_id()
	){
		$display = true;
	}
	return $display; 

}

//late filter, the embed anchor is loaded in the footer
add_filter('kb_fe_embed_get_embed_enabled', 'ht_code_snippets_display_front_end_help_assistant', 500);