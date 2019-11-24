<?php
/**
* Allows access to analytics screen, support for this functionality is for valid license holders
* Useful for offline, testing and debug purposes
*/

//access check filter, plugins at 20-30, themes at 30-40, overrides 50+
add_action( 'ht_analytics_functions', 'ht_code_snippets_hkba_check_analytics_functions_access' , 50 );

function ht_code_snippets_hkba_check_analytics_functions_access($allow){
	return true;
}