<?php
/**
* Displays an admin notice, a nice example of the HeroThemes code snippet library
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add to admin_notices action
add_action( 'admin_notices', 'ht_code_snippets_admin_message', 10 );

function ht_code_snippets_admin_message(){
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Congratulations! HeroThemes code snippets is live.', 'ht-code-snippets' ); ?></p>
    </div>
    <?php
}