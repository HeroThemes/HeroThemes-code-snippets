<?php
/**
* Disable record user search
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter( 'ht_kb_record_user_search', '__return_false' );