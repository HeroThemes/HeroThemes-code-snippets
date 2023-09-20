<?php
/**
* Overide ht_kb_settings_is_license_status_valid filter
*/

//late filer
add_action( 'ht_kb_settings_is_license_status_valid', 'ht_code_snippets_ht_kb_settings_is_license_status_valid' , 50 );

function ht_code_snippets_ht_kb_settings_is_license_status_valid($allow){
	return true;
}