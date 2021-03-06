<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */
add_filter( 'rwmb_meta_boxes', 'anp_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function anp_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'anp_';
	// 1st meta box
	
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'portfolio-images',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Select Portfolio Images', 'anp' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'anp_portfolio' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
		
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Slider Images', 'anp' ),
				'id'               => "{$prefix}imgadv",
				'type'             => 'image_advanced',
				'max_file_uploads' => 10,
			),


		),
	);
	
	
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'testimonial-entry',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => 'Testimonial Entry',
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'anp_testimonial' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
		
			
			array(
				'name'             => 'Name(s)',
				'id'               => $prefix . "testimonial-name",
				'type'             => 'text',
			),

			array(
				'name'             => 'Date',
				'id'               => $prefix . "testimonial-date",
				'type'             => 'date',
			),
			
			array(
				'name'             => 'Quick Quote',
				'id'               => $prefix . "testimonial-tagline",
				'type'             => 'textarea',
			),
			
			array(
				'name'             => 'Full Quote',
				'id'               => $prefix . "testimonial-content",
				'type'             => 'textarea',
			),
			
			array(
				'name'             => 'Type of Work',
				'id'               => $prefix . "testimonial-work",
				'type'             => 'text',
			),

		),
	);
	
	
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'page-subtitle',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => 'Page Subtitle',
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
		
			
			array(
				'name'             => 'Subtitle',
				'id'               => $prefix . "page-subtitle",
				'type'             => 'text',
			),

		),
	);
	
	
	
		$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'background-image',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Select Background Image', 'anp' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'anp_front-page-panel' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
		
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Background Image', 'anp' ),
				'id'               => "{$prefix}imgadv",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),


		),
	);
	
	
	
	
	
	
	
	
	
	return $meta_boxes;
}