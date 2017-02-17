<?php
/**
* Search the ht_kb post type from only the Knowledge Base section
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'hkb_search_post_types', 'ht_code_snippets_kb_search_post_types', 10, 1 );

function ht_code_snippets_kb_search_post_types( $post_types ){
	$post_types = array('ht_kb');
    return $post_types;
}


/**
* Alternative method for hard-setting post types depending on where we are searching from
*/

/*
function custom_search_filter($query) {
	if ( $query->is_search && !is_admin() && ht_kb_is_ht_kb_search() ) {
		//heroic knowledge base search
		$query->set('post_type',array('ht_kb'));
	} elseif ( $query->is_search && !is_admin() && !ht_kb_is_ht_kb_search() ) {
		//non heroic knowledge base search
		$query->set('post_type',array('post', 'page'));
	}
	return $query;
}
add_filter('pre_get_posts','custom_search_filter', 15);
*/