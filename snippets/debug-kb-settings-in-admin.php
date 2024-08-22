<?php
/**
* Display ht kb settings in admin notices
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'admin_notices', 'ht_code_snippets_show_ht_kb_settings');

function ht_code_snippets_show_ht_kb_settings(){

    if(class_exists('HT_KB_Settings_Controller')){

        $ht_kb_settings = HT_KB_Settings_Controller::get_settings();

        echo '<pre>';
        print_r($ht_kb_settings);
        echo '</pre>';
    } else {
        echo 'HT_KB_Settings_Controller class not found';
    }
}

