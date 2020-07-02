<?php
/**
* Displays the ID of the KB archive dummy
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add to admin_notices action
add_action( 'admin_notices', 'ht_code_snippets_display_id_of_kb_archive_dummy', 12 );

function ht_code_snippets_display_id_of_kb_archive_dummy(){
		if(function_exists('get_ht_kb_dummy_page_id')):
    ?>
	    <div class="notice notice-warning is-dismissible">
	        <p><?php printf( __( 'The Knowledge Base archive dummy has an ID of %s. You can <a href="%s">edit this page here</a> (but for most cases you should not as it won\'t do anything)', 'ht-code-snippets' ), get_ht_kb_dummy_page_id(), admin_url('post.php?post=' . get_ht_kb_dummy_page_id() . '&action=edit') ); ?></p>
	    </div>
    <?php
		else:
	?>
			<div class="notice notice-warning is-dismissible">
	        <p><?php _e( 'Please activate the Heroic Knowledge Base or disable the display ht kb archive dummy page code snippet', 'ht-code-snippets' ); ?></p>
	    </div>
		?>
	<?php
		endif;

}