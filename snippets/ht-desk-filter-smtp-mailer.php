<?php 
/**
* Filters for SMTP connection
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//for a full list of available filters, see ht-desk/includes/mailer/generic-ht-desk-mailer.php

//add filter for the connection port settings
add_filter('generic_ht_desk_mailer_smtp_port', 'ht_code_snippets_generic_ht_desk_mailer_smtp_port', 10, 1);

/**
 * @param $port (Int) Initial port
 * @return $port (Int)
*/
function ht_code_snippets_generic_ht_desk_mailer_smtp_port( $port ){
    //default is 465, switch to 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    return 587;
} 

/**
 * @param $phpmailer (Object) Original phpmailer object
 * @param $message (Array) Current message
 * @return $phpmailer (Object) Modified phpmailer object
*/
//its also possible to filter the phpmailer object, prior to the send command with generic_ht_desk_mailer_send_message filter
//add_filter('generic_ht_desk_mailer_send_message', 'ht_code_snippets_generic_ht_desk_mailer_send_message', 10, 2);
function ht_code_snippets_generic_ht_desk_mailer_send_message( $phpmailer, $message ){
    $phpmailer->Subject = 'This was only a test, normal service will resume shortly';
    return $phpmailer;
}