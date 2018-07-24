<?php
/**
* Remove the New > Post option in admin bar
* Remove Posts from admin menu
* Redirects edit post screens to the admin home
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add to wp_before_admin_bar_render action
add_action( 'wp_before_admin_bar_render', 'ht_code_snippets_remove_add_new_post_from_admin_bar', 10 );

function ht_code_snippets_remove_add_new_post_from_admin_bar(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-post');
}

//remove posts from admin menu
add_action( 'admin_menu', 'ht_code_snippets_remove_posts_from_admin_menu', 10 );

function ht_code_snippets_remove_posts_from_admin_menu() {
	remove_menu_page( 'edit.php' );
}

//add to current screen action
add_action( 'current_screen', 'ht_code_snippets_redirect_edit_post_screens', 10 );

function ht_code_snippets_redirect_edit_post_screens(){
	$screen = get_current_screen(); 
	if('post'==$screen->post_type){
		wp_redirect( admin_url() );
		exit;
	}
}