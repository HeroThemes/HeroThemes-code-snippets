<?php 
/**
* Filter the HKB categories using the master tax term filter
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('hkb_master_tax_terms', 'ht_code_snippets_ht_kb_filter_tax_terms', 10, 1);

function  ht_code_snippets_ht_kb_filter_tax_terms( $terms ){
	//declare term ids to remove, these will need to match the term id (tip - edit a category to quickly find the ID)
	$terms_to_remove = array(6900, 1114);

	//loop through the current terms
	foreach ($terms as $key => $term) {
		if(is_a($term, 'WP_Term')){
			//if the current term id is in our list of terms to remove, remove it from the terms array
			if(in_array($term->term_id, $terms_to_remove)){
				//unset term
				unset($terms[$key]);
			}
		}
	}
	
	//reindex
	$terms = array_values($terms);
	//return the new terms
    return $terms;
} 