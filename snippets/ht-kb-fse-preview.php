<?php
/**
* Full Site Editing Preview Code Snippet
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/



//filter for pagetemplate
add_filter( 'page_template', array( $this, 'ht_code_snipppets_ht_kb_page_template' ), 5, 3 );
function ht_code_snipppets_ht_kb_page_template( $template ) {
    //remove any later filters
    remove_all_filters( 'page_template' );
    return $template;
}

//filter for taxonomy template
add_filter( 'taxonomy_template', array( $this, 'ht_code_snipppets_ht_kb_taxonomy_template' ), 5, 3 );
function ht_code_snipppets_ht_kb_taxonomy_template( $template ) {
    //remove any later filters
    remove_all_filters( 'taxonomy_template' );
    return $template;
}

//filter for single template
add_filter( 'single_template', array( $this, 'ht_code_snipppets_ht_kb_single_template' ), 5, 3 );
function ht_code_snipppets_ht_kb_single_template( $template ) {
    //remove any later filters
    remove_all_filters( 'single_template' );
    return $template;
}

//search results template
add_filter( 'search_template', array( $this, 'ht_code_snipppets_ht_kb_search_template' ), 5, 3 );
function ht_code_snipppets_ht_kb_search_template( $template ) {
    //remove any later filters
    remove_all_filters( 'search_template' );
    return $template;
}

//This function needs to be true to enable the archive in the WordPress template editor
add_filter('ht_kb_cpt_has_archive', '__return_true');