<?php 
/**
* Override the mailbox limit in Heroic Inbox
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('ht_desk_authorized_mailboxes_count', 'ht_code_snippets_ht_desk_authorized_mailboxes_count', 10, 1);

function ht_code_snippets_ht_desk_authorized_mailboxes_count( $limit  ){
    return 100;
} 