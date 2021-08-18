<?php
/**
* Display deprecated Heroic Knowledge Base settings removed in 3.0, see ht-kb-display-previous-settings  snippet to retrieve these settings if missing
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filter
add_filter( 'admin_notices', 'ht_code_snippets_display_deprecated_hkb_settings' );

function ht_code_snippets_display_deprecated_hkb_settings(  ){
	?>
	<div class="notice is-dismissible">
        <h3><?php _e( 'Displaying deprecated Heroic Knowledge Base 3.0 settings', 'ht-code-snippets' ); ?></h3>
        <p><?php _e( 'These settings should now be implemented at the theme template level', 'ht-code-snippets' ); ?></p>

        <p>
        	<strong><?php _e( 'display-sub-cats', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_archive_display_subcategories' ) ? hkb_archive_display_subcategories() : 'hkb_archive_display_subcategories() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'sub-cat-depth', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_archive_subcategory_depth' ) ? hkb_archive_subcategory_depth() : 'hkb_archive_subcategory_depth() does not exist ' ); ?>
        	<br/>
        	<strong><?php _e( 'display-sub-cat-articles', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_archive_display_subcategory_articles' ) ? hkb_archive_display_subcategory_articles() : 'hkb_archive_display_subcategory_articles() does not exist '  ); ?>
        	<br/>
        	<strong><?php _e( 'display-article-usefulness', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_show_usefulness_display' ) ? hkb_show_usefulness_display() : 'hkb_show_usefulness_display() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'display-article-views-count', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_show_viewcount_display' ) ? hkb_show_viewcount_display() : 'hkb_show_viewcount_display() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'enable-article-comments', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_show_comments_display' ) ? hkb_show_comments_display() : 'hkb_show_comments_display() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'display-live-search', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_show_knowledgebase_search' ) ? hkb_show_knowledgebase_search() : 'hkb_show_knowledgebase_search() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'custom-kb-styling-content', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_get_custom_styles_css' ) ? hkb_get_custom_styles_css() : 'hkb_get_custom_styles_css() does not exist' ); ?>
        	<br/>
        	<strong><?php _e( 'enable-kb-styling-sitewide', 'ht-code-snippets' ); ?></strong>
        	<?php var_dump( function_exists( 'hkb_custom_styles_sitewide' ) ? hkb_custom_styles_sitewide(): 'hkb_custom_styles_sitewide() does not exist' ); ?>
        	<br/>
        	
        	
        	
        </p>
    </div>
    <?php
}

