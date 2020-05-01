<?php
/**
* Adds FAQs scripts for the AMP plugin
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_action('amp_post_template_data', 'ht_faq_amp_component_scripts');

function ht_faq_amp_component_scripts( $data ) {
	//todo AMP doesn't work with script!?
	//this needs reworking as it's currently a dead end with the lack of availability of script in amp
	$data['amp_component_scripts']['amp-ht-faq-script'] = '';
	return $data;
}