<?php
/**
* Disable the HeroThemes formatting blocks module in the HeroThemes Knowledge Base
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//disable ht formatting blocks module
add_filter( 'ht_formatting_blocks_enabled', '__return_false' );

