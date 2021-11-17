<?php
/**
* Disable common css for the block
*/

if ( !is_admin() ) {   
	function ht_code_snippets_faq_dequeue_common_css() {     
		wp_deregister_style('common');  
	}
	add_action( 'wp_enqueue_scripts', 'ht_code_snippets_faq_dequeue_common_css');
}