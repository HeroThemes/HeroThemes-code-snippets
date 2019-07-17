<?php
/**
* Remove the ht_faq from the Jetpack publicize feature
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'ht_faq_cpt_supports', 'ht_code_snippets_ht_faq_cpt_supports', 10, 1 );

function ht_code_snippets_ht_faq_cpt_supports( $supports ){
	//search and remove publicize from the supports array
    if ( ( $key = array_search( 'publicize', $supports ) ) !== false ) {
	    unset( $supports[$key] );
	}
    return $supports;
}