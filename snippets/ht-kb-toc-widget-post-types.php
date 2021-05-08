<?php
/**
* Example of how to remove all the posts types the widget will extract / inject heading IDs
*/

add_filter( 'ht_kb_toc_content_filter_post_types', 'ht_code_snippets_ht_kb_toc_disable_all_toc_post_types' );

function ht_code_snippets_ht_kb_toc_disable_all_toc_post_types( $post_types ){
    return array('');
}