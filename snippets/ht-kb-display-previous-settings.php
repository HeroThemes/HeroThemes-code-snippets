<?php
/**
* Display previous settings 
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'admin_notices', 'ht_code_snippets_display_deprecated_hkb_settings' );

function ht_code_snippets_display_deprecated_hkb_settings(  ){
	//get the previous settings made during plugin activation
	$previous_kb_settings = get_option('ht_knowledge_base_settings_bak_' . HT_KB_VERSION_NUMBER);
	?>

	<?php if(empty($previous_kb_settings)): ?>
		<div class="notice is-dismissible">
			<p><?php _e( 'No previous settings detected', 'ht-code-snippets' ); ?></p>
		</div>
	<?php else: ?>
		<div class="notice is-dismissible">
			<h3><?php _e( 'Displaying deprecated Heroic Knowledge Base 3.0 settings', 'ht-code-snippets' ); ?></h3>
			<p><?php _e( 'These settings should now be implemented at the theme template level', 'ht-code-snippets' ); ?></p>

			<p>
				<?php foreach ($previous_kb_settings as $key => $value): ?>
					
					<strong><?php esc_attr_e( $key ) ?></strong>
					<?php var_dump( $value ); ?>
					<br/>

				<?php endforeach; ?>				
			</p>
		</div>

	<?php endif; ?>

	<?php
}

