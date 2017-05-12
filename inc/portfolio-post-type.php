<?php

function portfolio_register() {

	$labels = array(

		'name' => 'Portfolios', 'post type general name',

		'singular_name' => 'Portfolio Entry', 'post type singular name',

		'add_new' => 'Add New', 'portfolio',

		'add_new_item' => 'Add New Portfolio Entry',

		'edit_item' => 'Edit Portfolio Entry',

		'new_item' => 'New Portfolio Entry',

		'view_item' => 'View Portfolio Entry',

		'search_items' => 'Search Portfolio Entries',

		'not_found' =>  'No Portfolio Entries found',

		'not_found_in_trash' => 'No Portfolio Entries found in Trash', 

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

		'supports' => array('title','thumbnail')

	);


	register_post_type( 'portfolio' , $args );

}


add_action('init', 'portfolio_register', 1);


?>