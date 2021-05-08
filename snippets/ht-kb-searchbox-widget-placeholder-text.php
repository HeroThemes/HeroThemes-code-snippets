<?php
/**
* Alter the knowledgebase searchbox placeholder text
*/

add_filter( 'hkb_get_knowledgebase_searchbox_placeholder_text', 'ht_code_snippets_hkb_get_knowledgebase_searchbox_placeholder_text' );

function ht_code_snippets_hkb_get_knowledgebase_searchbox_placeholder_text( $placeholder_text = '' ){
    return __('Enter your search here');
}