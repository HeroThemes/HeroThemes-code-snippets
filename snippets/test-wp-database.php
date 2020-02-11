<?php
/**
* Test WP Database (exit table exists)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter( 'admin_notices', 'ht_code_snippets_test_exit_table_exists', 10 );

function ht_code_snippets_test_exit_table_exists(){
	global $wpdb;
    $exits_table_exists = false;
    $exits_table_name = $wpdb->prefix.HT_KB_EXITS_TABLE;
    var_dump($wpdb->prefix);
    if($wpdb->get_var("SHOW TABLES LIKE '$exits_table_name'") != $exits_table_name) {
        //exits table does not exist
        //do nothing
    } else {
        //table exists
        $exits_table_exists = true;
    }
	var_dump($wpdb->get_var("SHOW TABLES LIKE '$exits_table_name'"));
	var_dump($exits_table_name);
	var_dump(md5($wpdb->get_var("SHOW TABLES LIKE '$exits_table_name'")));
	var_dump(md5($exits_table_name));
	if(!function_exists('mb_detect_encoding')){
		return 'MB not enabled';
	}
	var_dump(mb_detect_encoding( $wpdb->get_var("SHOW TABLES LIKE '$exits_table_name'") ) );
	var_dump(mb_detect_encoding( $exits_table_name ) );
	var_dump(strval($wpdb->get_var("SHOW TABLES LIKE '$exits_table_name'")) == strval($exits_table_name));
	var_dump(1 == 1);
}