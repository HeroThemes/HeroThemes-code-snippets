<?php 
/**
* Test to implement multiple knowledge bases in a single install
* Note this is a work-in-progress and currently does not work in any meaningful way
*/

//add filter
add_filter('register_post_type_args', 'ht_code_snippets_hkb_register_post_type_args', 10, 2);

function  ht_code_snippets_hkb_register_post_type_args( $args, $post_type ){
    if ( 'ht_kb' !== $post_type ) {
		return $args;
	}


	$temp_args = $args;
	$args['labels']['name'] = 'Knowledge Base 2';
	$args['labels']['menu_name'] = 'Knowledge Base 2';
	$args['rewrite']['slug'] = 'knowledge-base-2'; 
	$args['rest_base'] = 'ht-kb-2';
	register_post_type( 'ht_kb_2', $args );
	$args['labels']['name'] = 'Knowledge Base 3';
	$args['labels']['menu_name'] = 'Knowledge Base 3';
	$args['rewrite']['slug'] = 'knowledge-base-3';
	$args['rest_base'] = 'ht-kb-3';
	register_post_type( 'ht_kb_3', $args );

	//restore args
	$args = $temp_args;
	return $args;
} 


add_filter( 'register_taxonomy_args', 'ht_code_snippets_hkb_register_taxonomy_args', 10, 3 );

function ht_code_snippets_hkb_register_taxonomy_args( $args, $taxonomy, $object_type ) {

	if ( 'ht_kb_category' !== $taxonomy ) {
		return $args;
	}
	$temp_args = $args;
	
    register_taxonomy( 'ht_kb_category_2', 'ht_kb_2', $args );
    register_taxonomy( 'ht_kb_category_3', 'ht_kb_3', $args );

    //restore args
	$args = $temp_args;
    return $args;
}
