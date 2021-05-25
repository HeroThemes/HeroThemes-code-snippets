<?php
/**
*   Plugin Name: HeroThemes Code Snippets
*   Plugin URI:  http://herothemes.com
*   Description: Public code snippets by HeroThemes
*   Author: HeroThemes
*   Version: 0.20
*   Author URI: https://herothemes.com/
*   Text Domain: ht-code-snippets
*/

if( !class_exists( 'HT_Code_Snippets' ) ){

    class HT_Code_Snippets {

        /**
        * Constructor - Used when the plugin is initialized
        */
        function __construct(){
            //load snippets using the init call
            add_action( 'init', array( $this, 'ht_load_code_snippets' ), 0 );
            //add ht_code_snippets_load filter, this can be used to include/exclude specific snippets
            add_filter( 'ht_code_snippets_load', array( $this, 'ht_load_code_snippets_load_filter' ), 10, 2 );

            //load the admin menu
            include_once('php/ht-code-snippets-admin.php');
        }

        /**
        * Load the Code Snippets from the /snippets folder
        * Individual snippets can either be loaded by this plugin or copied and pasted in your (child) theme's functions.php file
        * Snippets are provided for information/reference only, we're unable to offer support for the use of these snippets
        */
        function ht_load_code_snippets(){
            $directory = new RecursiveDirectoryIterator( plugin_dir_path( __FILE__ ) . 'snippets' );
            $iterator = new RecursiveIteratorIterator( $directory );
            //only iterate over php files
            $regex_iterator = new RegexIterator( $iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH );
            foreach ( $regex_iterator as $key => $file ) {
                if( array_key_exists( 0, $file ) ){
                    $include_file = $file[0];
                    $base_name = basename( $include_file, '.php' );
                    //do actions to register snippet
                    do_action('ht_code_snippets_register', $base_name);
                    //apply filters and then load snippet
                    if( apply_filters( 'ht_code_snippets_load', true, $base_name ) ){
                        include_once( $include_file );
                    }                    
                }
            }
        }

        /**
        * Example how to filter filter to exclude a snippet
        * @param (Bool) $load Existing load value
        * @param  (String) $name The name of the snippet, eg admin-message
        * @return (Bool) Load the snippet?
        */
        function ht_load_code_snippets_load_filter( $load, $name ){
            //eg. exclude old-snippet-101
            switch ( $name ) {
                case 'old-snippet-101':
                    $load = false;
                    break;
                
                default:
                    //don't do anything by default
                    break;
            }

            return $load;
        }
        
    }

}

//Initialize the plugin
if( class_exists( 'HT_Code_Snippets' ) ){
    $ht_code_snippets_init = new HT_Code_Snippets();
}