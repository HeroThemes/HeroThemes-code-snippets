<?php
/**
* Adds an Edit Knowledge Base Articles and Read Knowledge Base Articles roles and associated capabilities
* @requires Heroic Knoweldge Base 3.4+ 
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//levergage the map meta cap, this is the easiest way to implement and manage additional roles just for the knowledge base
add_filter( 'ht_kb_cpt_map_meta_cap', '__return_true' );

//give the capability type a name (otherwise it will assume post)
add_filter( 'ht_kb_cpt_capability_type', 'ht_kb_cpt_capability_type' );

//create roles on ht kb plugin activation
add_action( 'ht_kb_activate', 'ht_kb_create_roles', 10 );

//filter ht_kb_category_capabilities
add_filter( 'ht_kb_category_capabilities', 'ht_kb_category_capabilities' );

//filter ht_kb_tag_capabilities
add_filter( 'ht_kb_tag_capabilities', 'ht_kb_tag_capabilities' );


/**
 * Return a capability type to use as a base
 */
function ht_kb_cpt_capability_type( $type ){
	return 'ht_kb_article';
}

/**
 * Create a read and edit role
 */
function ht_kb_create_roles(){
	ht_kb_create_kb_role('read');
	ht_kb_create_kb_role('edit');

	//assign the current user edit role?
	//this is handled by map_meta_cap
}

/**
 * Create new ht_kb_category taxonomy capabilities
 */
function ht_kb_category_capabilities( $caps ){
	return array(
				'manage_terms'  =>  'manage_'.'ht_kb_category',
				'edit_terms'    =>  'edit_'.'ht_kb_category',
				'delete_terms'  =>  'delete'.'ht_kb_category',
				'assign_terms'  =>  'assign_'.'ht_kb_category',
			);
}

/**
 * Create new ht_kb_tag taxonomy capabilities
 */
function ht_kb_tag_capabilities( $caps ){
	return array(
				'manage_terms'  =>  'manage_'.'ht_kb_tag',
				'edit_terms'    =>  'edit_'.'ht_kb_tag',
				'delete_terms'  =>  'delete'.'ht_kb_tag',
				'assign_terms'  =>  'assign_'.'ht_kb_tag',
			);
}

/**
 * Create a KB Role
 */
function ht_kb_create_kb_role( $role = 'edit' ){
	$capabilities = ht_kb_get_capabilities_for_role( $role );

	//remove existing role(s)
	remove_role( $role . '_ht_kb' );
	
	$role_create = add_role(
						$role . '_ht_kb',
						sprintf( '%s Knowledge Base Articles', ucfirst( $role) ),
						$capabilities
					);
}

/**
 * Get a list of capabilities for a KB role
 */
function ht_kb_get_capabilities_for_role( $role ){
	$capabilities = array();

	//note we're using default capabilities, so there is no 'read' capability 

	switch ($role) {
		case 'read':
			$capabilities['publish_ht_kb_articles'] = true;
			break;
		case 'edit':
			//valid CPT caps
			$capabilities['delete_ht_kb_articles'] = true;
			$capabilities['delete_others_ht_kb_articles'] = true;
			$capabilities['delete_private_ht_kb_articles'] = true;
			$capabilities['delete_published_ht_kb_articles'] = true;
			$capabilities['edit_ht_kb_articles'] = true;
			$capabilities['edit_others_ht_kb_articles'] = true;
			$capabilities['edit_private_ht_kb_articles'] = true;
			$capabilities['edit_published_ht_kb_articles'] = true;
			$capabilities['publish_ht_kb_articles'] = true;
			$capabilities['read_private_ht_kb_articles'] = true;

			//valid category taxonomy cap
			$capabilities['manage_ht_kb_category'] = true;
			$capabilities['edit_ht_kb_category'] = true;
			$capabilities['delete_ht_kb_category'] = true;
			$capabilities['assign_ht_kb_category'] = true;

			//valid tag taxonomy cap
			$capabilities['manage_ht_kb_tag'] = true;
			$capabilities['edit_ht_kb_tag'] = true;
			$capabilities['delete_ht_kb_tag'] = true;
			$capabilities['assign_ht_kb_tag'] = true;
			break;
		default:
			//no capabilities
			break;
	}

	//this is filterable to allow for more roles to be added later
	$capabilities = apply_filters( 'ht_kb_get_capabilities_for_role', $capabilities, $role );
	return $capabilities;
}