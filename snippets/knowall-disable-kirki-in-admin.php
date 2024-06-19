<?php 
/**
* Disable the kirki font loader in the admin for certain ht_kb pages
*/

//add filter
add_filter( 'kirki_styles_action_handle', 'ht_code_snippets_kirki_disable_admin_styles' );

function ht_code_snippets_kirki_disable_admin_styles($handle) {

    if( is_admin() ){
        //remove the admin styles
        $screen = get_current_screen();
        $excluded_screens = [
            'ht_kb_page_' . 'ht_knowledge_base_settings_page',
            'ht_kb_page_' . 'ht-kb-reporting',
            'ht_kb_page_' . 'ht_kb_welcome_setup_page',
            'ht_kb_page_' . 'ht_kb_settings_page',
        ];
        $excluded_screens = apply_filters('ht_code_snippets_kirki_disable_admin_styles_exclude_screens', $excluded_screens);
        if ( isset($screen) && is_a($screen, 'WP_Screen') && in_array($screen->id, $excluded_screens )  ) {
            return false;
        }
    }
    //otherwise return the standard handle
    return $handle;
}
