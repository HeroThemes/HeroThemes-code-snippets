<?php
/**
* Translate and alter the for Heroic Inbox
*/


/* This is the method required for the React Components */
function ht_code_snippets_replace_embed_js_strings(){

	//send to output buffer
	ob_start();

	//echo the raw javascript
	echo "
		function htDeskTranslateTexts( translation, text, domain ) {
				if ( text === 'Inbox' ) {
					return 'Posteingang';
				}
				if ( text === 'Mine' ) {
					return 'Meins';
				}
				if ( text === 'Assigned' ) {
					return 'Zugewiesen';
				}
				if ( text === 'Closed' ) {
					return 'Geschlossen';
				}
				return translation;
			}
			 
			// Adding the filter
			wp.hooks.addFilter(
				'i18n.gettext',
				'ht-desk/text-filters',
				htDeskTranslateTexts
			);
	";

	$data = ob_get_clean();

	wp_add_inline_script( 'wp-i18n', $data );

}

add_action( 'wp_print_scripts', 'ht_code_snippets_replace_embed_js_strings', 200 );


