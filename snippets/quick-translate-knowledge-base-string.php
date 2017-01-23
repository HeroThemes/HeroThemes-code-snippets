<?php
/**
* An example of how to quickly change a single phrase on your site with the gettext calls
* This is not a substitution for proper translations and may impact on the performance of your site
* If this method doesn't work, the word/phrase may be a setting in the plugin or option in the Theme Customizer
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add filters to gettext and ngettext call
add_filter('gettext', 'quick_translate_knowledge_base_string_example'); 
add_filter('ngettext', 'quick_translate_knowledge_base_string_example');

function quick_translate_knowledge_base_string_example( $translated ) { 
	//change Knowledge Base to Help
	$translated = str_ireplace( 'Knowledge Base', 'Help', $translated ); 
	//if you're doing more than one quick translation add them here, eg.
	$translated = str_ireplace( 'Another Phrase to Translate', 'What the new phrase should be', $translated ); 
	return $translated; 
}