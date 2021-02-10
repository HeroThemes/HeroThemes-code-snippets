<?php 
/**
* Disable the download attribute, where this is incorrectly handled/configured
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'hkb_attachment_download', '__return_false' );
