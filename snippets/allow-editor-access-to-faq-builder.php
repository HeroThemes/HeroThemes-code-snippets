<?php
/**
* Allows editors to access various ht faq
*/

function ht_code_snippets_editor_capability_for_ht_faq($capability){
	return 'edit_posts';
}

//add filter for faq builder page
add_filter( 'ht_faq_builder_page_capability', 'ht_code_snippets_editor_capability_for_ht_faq' );