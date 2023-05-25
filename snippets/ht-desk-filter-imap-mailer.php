<?php 
/**
* Filters for SMTP connection
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//for a full list of available filters, see ht-desk/includes/mailer/generic-ht-desk-mailer.php


//apply_filters( 'generic_ht_desk_mailer_imap_host', $this->config->imap_host, $mailbox_id );
//apply_filters( 'generic_ht_desk_mailer_imap_port', '993', $mailbox_id );
//apply_filters( 'generic_ht_desk_mailer_imap_flags', '/imap/ssl/validate-cert', $mailbox_id );
//apply_filters( 'generic_ht_desk_mailer_imap_parameters', [], $mailbox_id );
//apply_filters( 'generic_ht_desk_mailer_imap_options', 0, $mailbox_id );
//apply_filters( 'generic_ht_desk_mailer_imap_retries', 1, $mailbox_id );

//add filter for the connection port settings
add_filter('generic_ht_desk_mailer_imap_port', 'ht_code_snippets_generic_ht_desk_mailer_imap_port', 10, 2);

/**
 * @param $port (String) Initial port
 * @param $mailbox_id (Int) The id of the mailbox being operated on
 * @return $port (String)
*/
function ht_code_snippets_generic_ht_desk_mailer_imap_port( $port, $mailbox_id ){
    //default is '993', so we can try 994

    return '994';
} 