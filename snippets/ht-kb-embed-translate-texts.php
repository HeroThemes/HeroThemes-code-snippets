<?php
/**
* Translate the texts for the knowledge base embed
*/

/* This is the traditional way, which does not work inside the React components */
function ht_code_snippets_replace_embed_strings($translated) { 

	$translated = str_ireplace( 'What can we help with?', 'Wobei können wir helfen?', $translated ); 
	$translated = str_ireplace( 'Search the Knowledge Base', 'Durchsuche die Wissensbank', $translated ); 
	$translated = str_ireplace( 'Popular Articles', 'Populäre Artikel', $translated ); 
	$translated = str_ireplace( 'Loading Articles', 'Laden von Artikeln', $translated );

	return $translated; 
}

add_filter('gettext', 'ht_code_snippets_replace_embed_strings'); 
add_filter('ngettext', 'ht_code_snippets_replace_embed_strings');

/* This is the method required for the React Components */
function ht_code_snippets_replace_embed_js_strings(){

	$data = "
		//callback function
		function hkbEmbedReplaceTexts( translation, text, domain ) {
		    if ( text === 'What can we help with?' ) {
		        return 'Wobei können wir helfen?';
		    }
		    if ( text === 'Search the Knowledge Base' ) {
		        return 'Durchsuche die Wissensbank';
		    }
		    if ( text === 'Popular Articles' ) {
		        return 'Populäre Artikel';
		    }
		    if ( text === 'Loading Articles' ) {
		        return 'Laden von Artikeln';
		    }
		    return translation;
		}
		 
		// Adding the filter
		wp.hooks.addFilter(
		    'i18n.gettext',
		    'heroic-knowledge-base/embed-filters',
		    hkbEmbedReplaceTexts
		);

	";
	wp_add_inline_script( 'ht-kb-page-embed-js', $data );
}

add_action( 'wp_print_scripts', 'ht_code_snippets_replace_embed_js_strings', 200 );


