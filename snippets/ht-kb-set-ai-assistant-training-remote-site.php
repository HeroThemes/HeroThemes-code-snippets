<?php
/**
* Set a remote site for AI Assistant training URL
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//filter to set the remote site URL for AI Assistant training
add_filter( 'ht_ai_search_get_all_posts_from_site_url', 'ht_code_snippets_filter_remote_site_url'  );

function ht_code_snippets_filter_remote_site_url( $url ) {
    //this must be the full url to the wordpress site hosting the knowledge base
    return 'https://kb.example.com';
}