<?php

function testimonial_register() {

	$labels = array(

		'name' => 'Testimonials', 'post type general name',

		'singular_name' => 'Testimonial Entry', 'post type singular name',

		'add_new' => 'Add New', 'testimonial',

		'add_new_item' => 'Add New Testimonial Entry',

		'edit_item' => 'Edit Testimonial Entry',

		'new_item' => 'New Testimonial Entry',

		'view_item' => 'View Testimonial Entry',

		'search_items' => 'Search Testimonial Entries',

		'not_found' =>  'No Testimonial Entries found',

		'not_found_in_trash' => 'No Testimonial Entries found in Trash', 

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

		'supports' => array('title','thumbnail','excerpt','editor','comments','page-attributes')

	);


	register_post_type( 'testimonial' , $args );

}


add_action('init', 'testimonial_register', 1);


?>