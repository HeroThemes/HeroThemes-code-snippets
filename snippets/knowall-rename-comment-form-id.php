<?php
/**
* Rename KnowAll's comment form id. This is a placeholder as the current method does not work, see below.
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add  filter
//note this currently doesn't work as the comment_form_field_* filter does not run on id_form field, will be reimplemented differently
//in a later version of KnowAll with a dedicated filter
//add_filter( 'comment_form_field_id_form', 'ht_code_snippets_rename_knowall_comment_form_id' );

//https://developer.wordpress.org/reference/hooks/comment_form_field_name/
//note this currently doesn't work as the comment_form_field_* filter does not run on id_form field, will be reimplemented differently
//in a later version of KnowAl with a dedicated filter
function ht_code_snippets_rename_knowall_comment_form_id( $form_id ){
	return 'commentform';
}

