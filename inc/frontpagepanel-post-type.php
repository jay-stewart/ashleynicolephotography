<?php

// Register Custom Post Type
function frontpagepanel_pt_register() {

	$labels = array(
		'name'                  => 'Front Page Panels', 'Post Type General Name',
		'singular_name'         => 'Front Page Panel', 'Post Type Singular Name',
		'menu_name'             => 'Front Page Panels',
		'name_admin_bar'        => 'Front Page Panel',
		'archives'              => 'Front Page Panel Archives',
		'attributes'            => 'Front Page Panel Attributes',
		'parent_item_colon'     => '',
		'all_items'             => 'All Front Page Panels',
		'add_new_item'          => 'Add New Front Page Panel',
		'add_new'               => 'Add New',
		'new_item'              => 'New Front Page Panel',
		'edit_item'             => 'Edit Front Page Panel',
		'update_item'           => 'Update Front Page Panel',
		'view_item'             => 'View Front Page Panel',
		'view_items'            => 'View Front Page Panels',
		'search_items'          => 'Search Front Page Panels',
		'not_found'             => 'No Front Page Panels Found',
		'not_found_in_trash'    => 'No Front Page Panels found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Front Page Panel',
		'uploaded_to_this_item' => 'Uploaded to this Front Page Panel',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Front Page Panels',
		'description'           => 'Shown on Front Page',
		'labels'                => $labels,
		'supports'              => array('title','editor','thumbnail','excerpt'),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'anp_front-page-panel', $args );

}
add_action( 'init', 'frontpagepanel_pt_register', 0 );






































?>