<?php
/**
* Disable  public posts for HT FAQ items
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'ht_faq_cpt_public', 'ht_code_snippets_ht_faq_cpt_public' );
add_filter( 'ht_faq_cpt_publicly_queryable', 'ht_code_snippets_ht_faq_cpt_public' );

function ht_code_snippets_ht_faq_cpt_public($enabled){
    return false;
}