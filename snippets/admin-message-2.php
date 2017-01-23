<?php
/**
* Displays an admin notice (2), a nice example of the HeroThemes code snippet library
* This snippet demonstrates that multiple functions can exist, but they need to have unique names (namespacing)
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add to admin_notices action
add_action( 'admin_notices', 'ht_code_snippets_admin_message_2', 11 );

function ht_code_snippets_admin_message_2(){
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Another admin message, note these snippet functions must have unique names.', 'ht-code-snippets' ); ?></p>
    </div>
    <?php
}