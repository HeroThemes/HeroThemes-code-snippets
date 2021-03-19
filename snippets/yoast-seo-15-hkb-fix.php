<?php
/**
* Examples of custom title and description filters that can be used with Yoast SEO 15
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/


/* title fixes (note use of late filter) */
add_filter( 'wpseo_opengraph_title', 'ht_code_snippets_fix_yoast_hkb_front_page_title', 50, 1 );
add_filter( 'pre_get_document_title', 'ht_code_snippets_fix_yoast_hkb_front_page_title', 50, 1 ); 

function ht_code_snippets_fix_yoast_hkb_front_page_title($title) { 
	if( ht_kb_is_ht_kb_front_page() ){
		return __('Knowledge Base Homepage');	
	}
	return $title; 
}

/* description fixes */
add_filter( 'wpseo_metadesc', 'ht_code_snippets_fix_yoast_hkb_front_page_description' );
add_filter( 'wpseo_opengraph_desc', 'ht_code_snippets_fix_yoast_hkb_front_page_description' );

function ht_code_snippets_fix_yoast_hkb_front_page_description( $description){
	if( ht_kb_is_ht_kb_front_page() ){
		return __('This is a description of the Knowledge Base Homepage');
	}
	return $description;
}

/* sample wpseo filters */
//wpseo_metadesc
//wpseo_opengraph_desc
//wpseo_opengraph_title
//wpseo_opengraph_url
//wpseo_opengraph_type

/**
* A concept to get the title from the wpseo_titles
* Needs additional work
*/
function ht_code_snippets_fix_yoast_hkb_front_page_title_concept($title) { 
	if( ht_kb_is_ht_kb_front_page() ){
		$titles = get_option( 'wpseo_titles' );
		$yoast_seo_title_key = 'title-ptarchive-ht_kb';
		if( is_array($titles) && array_key_exists( $yoast_seo_title_key, $titles && function_exists('wpseo_replace_vars') ) ){
			$title  = $titles[ $yoast_seo_title_key ];
			$title = apply_filters( 'the_title', $title );
			//replace the variables
			if( function_exists('wpseo_replace_vars' ) ){
				remove_filter( 'wpseo_opengraph_title', 'ht_code_snippets_fix_yoast_hkb_front_page_title', 50, 1 );
				remove_filter( 'pre_get_document_title', 'ht_code_snippets_fix_yoast_hkb_front_page_title', 50, 1 ); 
				$title = wpseo_replace_vars( $title, $post );	
			}			
		} else {
			$title = __('Knowledge Base Homepage');
		}
		return $title;
			
	}
	return $title; 
}