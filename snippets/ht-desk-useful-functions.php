<?php 
/**
* Useful functions documented for Heroic Inbox
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//show the log menu when WP_DEBUG is false
//add_filter( 'ht_desk_show_log_menu', '__return_true', 100 );

//show message log when WP_DEBUG is false
//add_filter( 'ht_desk_show_ticket_log', '__return_true', 100);

//show ticket cpt when WP_DEBUG is false
//add_filter( 'ht_desk_show_ticket_cpt_menu', '__return_true', 100);


//hide the log menu when WP_DEBUG is false
add_filter( 'ht_desk_show_log_menu', '__return_false', 100 );

//hide message log when WP_DEBUG is false
add_filter( 'ht_desk_show_ticket_log', '__return_false', 100);

//hide ticket cpt when WP_DEBUG is false
add_filter( 'ht_desk_show_ticket_cpt_menu', '__return_false', 100);
