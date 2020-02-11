<?php
/**
* Always output the FAQ Page schema where required
*/

add_filter( 'ht_faq_schema_hfaqwrapper', 'ht_code_snippets_always_output_schema', 999, 1 );

function ht_code_snippets_always_output_schema($schema){
	return 'itemscope itemtype="https://schema.org/FAQPage"';
}
