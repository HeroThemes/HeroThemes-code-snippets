<?php
/**
* Add a related article using the ht_kb_related_articles filter
* This requires do_action('ht_kb_related_articles') (not filter)
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_action( 'ht_kb_related_articles', 'ht_code_snippets_ht_kb_related_articles', 10, 3 );

function ht_code_snippets_ht_kb_related_articles( $related_articles, $orig_post = null, $ht_kb_related_articles_category_ids = array() ){
	//can only modify WP_Query object? So can remove posts with post__not_in, but how best to add posts?
	if(is_a($related_articles, 'WP_Query')){
		//set to remove other posts that should not appear in related
		$post__not_in = 9963;
		$args = array_merge( $related_articles->query_vars, array( 'post__not_in' => array($post__not_in, $orig_post->ID) ) );
		$related_articles = new wp_query( $args );	
	}	
	
	return $related_articles;
}