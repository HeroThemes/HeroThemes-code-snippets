<?php 
/**
* Limit mailbox cron to certain mailboxes
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter('ht_desk_mailbox_cron', 'ht_code_snippets_ht_desk_mailbox_cron', 10, 2);

function ht_code_snippets_ht_desk_mailbox_cron( $allow, $mailbox_id ){
    //example - don't run the mailbox cron for mailbox 468
    if( 468 == $mailbox_id ){
        return true;
    } else {
        return false;
    }
} 