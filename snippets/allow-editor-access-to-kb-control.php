<?php
/**
* Allows editors to access various hkb controls
*/

function ht_code_snippets_editor_capability($capability){
	return 'edit_posts';
}

//add filter for article ordering
add_filter( 'ht_kb_article_ordering_page_capability', 'ht_code_snippets_editor_capability' );
//add filter for category ordering
add_filter( 'ht_kb_category_ordering_page_capability', 'ht_code_snippets_editor_capability' );
//add filter for analytics
add_filter( 'hkba_analytics_page_capability', 'ht_code_snippets_editor_capability' );
//add filter for settings page
//add_filter( 'ht_knowledge_base_settings_page', 'ht_code_snippets_editor_capability' );