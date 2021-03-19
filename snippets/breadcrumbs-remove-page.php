<?php
/**
* Remove or remove label from the kb_current_page from each of the ancestor paths
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//example to remove the current page (note the knowall removes the link from the last item, see 2 for alternative)
//add_action( 'ht_kb_get_ancestors', 'ht_code_snippets_ht_kb_get_ancestors', 10 );

function ht_code_snippets_ht_kb_get_ancestors( $ancestors ){
    
    //loop the ancestor paths
    foreach ($ancestors as $keyx => $path) {
    	foreach ($path as $keyy => $path_item) {
    		if( 'kb_current_page' == $path_item['type'] ){
    			//remove
    			unset($ancestors[$keyx][$keyy]);
    		}
    	}
    }

    return $ancestors;
}


//remove the label and link for the last item
add_action( 'ht_kb_get_ancestors', 'ht_code_snippets_ht_kb_get_ancestors_2', 10 );

function ht_code_snippets_ht_kb_get_ancestors_2( $ancestors ){
    
    //loop the ancestor paths
    foreach ($ancestors as $keyx => $path) {
    	foreach ($path as $keyy => $path_item) {
    		if( 'kb_current_page' == $path_item['type'] ){
    			//empty link
    			$ancestors[$keyx][$keyy] = array(	'label'=> '' , 
													'link' => '#' , 
													 'title'=> $path_item['title'], 
													 'type'=>'kb_current_page'
													);
    		}
    	}
    }

    return $ancestors;
}



