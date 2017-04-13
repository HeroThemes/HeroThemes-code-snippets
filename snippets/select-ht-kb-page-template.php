<?php
/**
* Override the theme compat page template
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
add_filter( 'hkb_compat_templates', 'ht_code_snippets_hkb_compat_templates', 10, 1 );

function ht_code_snippets_hkb_compat_templates( $templates ){
    //just use single.php
    return array('single.php');
}