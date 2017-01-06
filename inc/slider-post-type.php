<?php

function sliders_register() {

	$labels = array(

		'name' => 'Sliders', 'post type general name',

		'singular_name' => 'Slider', 'post type singular name',

		'add_new' => 'Add New', 'Slider',

		'add_new_item' => 'Add New Slider Entry',

		'edit_item' => 'Edit Slider Entry',

		'new_item' => 'New Slider Entry',

		'view_item' => 'View Slider Entry',

		'search_items' => 'Search Slider Entries',

		'not_found' =>  'No Slider Entries found',

		'not_found_in_trash' => 'No Sliders found in Trash', 

		'parent_item_colon' => '',

	);


	$args = array(

		'labels' => $labels,

		'public' => true,

		'show_ui' => true,

		'capability_type' => 'page',

		'hierarchical' => false,

		'query_var' => true,

		'show_in_nav_menus'=> false,

		'supports' => array('title')

	);


	register_post_type( 'slider' , $args );

}


add_action('init', 'sliders_register', 1);


?>