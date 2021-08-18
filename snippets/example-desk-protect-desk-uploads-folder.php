<?php
/**
* Protect Desk Uploads folder (not for live use)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/
add_action( 'admin_init', 'ht_code_snippets_protect_desk_uploads_folder');

function ht_code_snippets_protect_desk_uploads_folder(){
	/**
	 * Add filter to write htaccess rules
	 */
	add_filter( 'mod_rewrite_rules', 'ht_code_snippets_htaccess_example_contents' );
	flush_rewrite_rules();
}

function ht_code_snippets_htaccess_example_contents( $rules ){

	$direct_access_path = str_replace( trailingslashit( site_url() ), '', 'index.php' ) . "?index.php?noaccess=$1&is_direct_access=true&file_type=$2 [QSA,L]" . PHP_EOL;
	// eg. RewriteRule wp-content/uploads(/[a-zA-Z_\-\s0-9\.]+)+\.([a-zA-Z0-9]+)$ index.php?pre_dir_acc_61co625547=$1&is_direct_access=true&file_type=$2 [QSA,L]
	$upload_dir_url = str_replace( "https", "http", wp_upload_dir()['baseurl'] );
	$site_url       = str_replace( "https", "http", site_url() );
	$new_rule        .= "RewriteRule " . str_replace( trailingslashit( $site_url ), '', $upload_dir_url ) . "/desk" . "(\/[A-Za-z0-9_@.\/&+-]+)+\.([A-Za-z0-9_@.\/&+-]+)$ " . $direct_access_path;

	return $new_rule . $rules . PHP_EOL;

}