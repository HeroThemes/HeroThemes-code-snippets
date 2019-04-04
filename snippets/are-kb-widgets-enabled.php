<?php
/**
* Tests whether KB widgets are enabled (ht-kb-exit-widget or ht-kb-toc-widget)
*
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add action
add_action( 'init', 'ht_code_snippets_ht_kb_widgets_active', 10);


function ht_code_snippets_ht_kb_widgets_active(){
	$widgets = array('ht-kb-exit-widget', 'ht-kb-toc-widget');
	$sidebar_id = 'sidebar-article';
	$in = ht_is_widget_in_sidebar($widgets, $sidebar_id);
	return $in;
}



function ht_is_widget_in_sidebar($widget_id=array(), $sidebar_id){
	$sidebars_widgets = wp_get_sidebars_widgets();
	//cast to array if not already
	$widget_id = (array)$widget_id;
	foreach ($sidebars_widgets as $key => $sidebar) {
		if($sidebar_id != $key){
			continue;
		} else {
			foreach ($sidebar as $key => $widget) {
				$widget_base =  _get_widget_id_base($widget);
				if(in_array($widget_base, $widget_id)){
					return true;
				}
			}
		}
	}
	return false;
}