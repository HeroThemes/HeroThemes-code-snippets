<?php
/**
* Code snippets Admin page
*/

if( !class_exists( 'HT_Code_Snippets_Admin' ) ){

    class HT_Code_Snippets_Admin {

        private $page_id;
        private $registered_snippets;

        /**
        * Constructor - Used to initialize the plugin
        */
        function __construct(){
            //initialize registered snippets array
            $this->registered_snippets = array();

            //register menu
            add_action('admin_menu', array( $this, 'add_menu_page' ) );

            //call register settings function
            add_action( 'admin_init', array( $this, 'register_ht_code_snippets_settings' ) );

            //hook onto ht_code_snippets_register to load
            add_action('ht_code_snippets_register', array( $this, 'register_ht_code_snippets_action' ) );

            //hook onto ht_code_snippets_load
            add_filter( 'ht_code_snippets_load', array( $this, 'ht_code_snippets_load_filter' ), 10, 2 );

            //unique page identifier
            $this->page_id = 'ht-code-snippets';
        }

        /**
        * Filter the loading of snippets based on user option
        * @param (Bool) $load Existing load value
        * @param (String) $name The name of the snippet, eg admin-message
        * @return (Bool) Load the snippet?
        */
        function ht_code_snippets_load_filter( $load, $name ){
            //get current active snippets
            $active_snippets = get_option('ht_code_snippets_active_snippets');

            if(isset($active_snippets[$name])){
                //do nothing, keep load value
            } else {
                $load = false;
            }

            return $load;
        }

        /**
        * Register the snippets 
        * @param (String) $snippet_name Name of the snippet to register
        */
        function register_ht_code_snippets_action( $snippet_name ){
            //add the snippet name to registered snippets
            $this->registered_snippets[] = $snippet_name;
        }

        /**
        * Add the code snippets page to the admin menu
        */
        function add_menu_page(){
            add_menu_page( 'ht-code-snippets', __( 'Code Snippets Settings', 'ht-code-snippets' ), 'manage_options', $this->page_id, array( $this, 'render_admin_page' ) );
        }

        /**
        * Render the admin page
        */
        function render_admin_page(){
            ?>
            <div class="wrap">
                <h1><?php _e('HeroThemes Code Snippets - Active Snippets', 'ht-code-snippets'); ?></h1>

                <form method="post" action="options.php">
                    <?php 
                        settings_fields( 'ht_code_snippets_settings' ); 
                        do_settings_sections( 'ht_code_snippets_settings' ); 
                        $active_snippets = get_option( 'ht_code_snippets_active_snippets' ); 
                        //populate and sort the registered snippets
                        $registered_snippets = $this->registered_snippets;
                        asort( $registered_snippets );
                    ?>

                    <table class="form-table">
                        <thead>
                            <tr>            
                                <th style="width: 20px"><?php _e('Enabled', 'ht-code-snippets'); ?></th>
                                <th style="width: 2000px"><?php _e('Snippet Name', 'ht-code-snippets'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($registered_snippets as $key => $name): ?>
                                <?php $checked = (isset($active_snippets[$name])) ? checked( $active_snippets[$name], 1, false ) : ''; ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ht_code_snippets_active_snippets[<?php echo $name; ?>]" 
                                            value="1"  <?php echo $checked; ?> />
                                    </td>
                                    <td>
                                         <?php echo esc_attr($name); ?>
                                    </td>                                
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                    <?php submit_button(); ?>

                </form>
            </div>
            <?php
        }

        /**
        * Register code snippets settings with WP
        */
        function register_ht_code_snippets_settings(){
            register_setting( 'ht_code_snippets_settings', 'ht_code_snippets_active_snippets' );
        }

    }

}


if( class_exists( 'HT_Code_Snippets_Admin' ) ){
    $ht_code_snippets_admin_init = new HT_Code_Snippets_Admin();
}