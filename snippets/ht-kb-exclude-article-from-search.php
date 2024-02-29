<?php
/**
* Exclude articles from the inbuilt search (ht-kb-search=1)
*/

//array of post ids to exclude
define( 'HT_KB_EXCLUDE_POSTS_FROM_LIVE_SEARCH', [6879, 10919] );

function ht_code_snippets_exclude_articles_from_search( $query ) {

    //don't do anything if not a ht-kb-search (this section can be commented out to work on sitewide search)
    $ht_kb_search = isset( $_REQUEST['ht-kb-search'] );
    if( !$ht_kb_search ){
        return $query;
    }
    
    //check the query is the main query and a search query
    if ($query->is_main_query() && $query->is_search) {
        //get any existing excluded post ids
        $existing_post__not_in = $query->get('post__not_in') ;
        //hard set to empty array if false
        $existing_post__not_in = empty($existing_post__not_in) ? $existing_post__not_in : array();
        //merge the existing posts not in and exclude posts constant
        $new_post__not_in = array_merge($existing_post__not_in, HT_KB_EXCLUDE_POSTS_FROM_LIVE_SEARCH );
        //set the new query variable
        $query->set('post__not_in', $new_post__not_in);
    }

    //return the query to the filter
	return $query;

}

//late filter, the embed anchor is loaded in the footer
add_filter( 'pre_get_posts', 'ht_code_snippets_exclude_articles_from_search', 500 );