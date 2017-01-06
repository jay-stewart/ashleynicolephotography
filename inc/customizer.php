<?php

function anp_customize_register($wp_customize) {

    $wp_customize->add_panel('anp_customizations', array(

        'priority'       => 65,

        'capability'     => 'edit_theme_options',

        'title'          => 'ANP Customizations',

        'description'    => 'This section allows you to customize ANP options',
    ));
	
	/* Settings */
	
	$wp_customize->add_section('anp_slider_settings', array(

        'priority' => 5,

        'title' => 'Slider Settings',

        'panel'  => 'anp_customizations',
    ));
	
	$wp_customize->add_setting( 'anp_slider_display_settings');

	
	$wp_customize->add_control('anp_slider_display_settings',array(

		'type' => 'checkbox',
		
		'label' => 'Disable Slider',
		
		'section' => 'anp_slider_settings',
		
		'priority' => 5,
	));

	/* Slide one */
	
    $wp_customize->add_section('anp_slider_one', array(

        'priority' => 10,

        'title' => 'Slide One',

        'panel'  => 'anp_customizations',
    ));
	
	$wp_customize->add_setting('anp_slider_one_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_slider_one_image', array(

        'label' => 'Slide Image',

        'section' => 'anp_slider_one',

        'priority' => 5,

        'settings' => 'anp_slider_one_image',

    )));

	
	/* Slide two */
	
    $wp_customize->add_section('anp_slider_two', array(

        'priority' => 15,

        'title' => 'Slide Two',
        
        'panel'  => 'anp_customizations',
    ));
	
	$wp_customize->add_setting('anp_slider_two_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_slider_two_image', array(

        'label' => 'Slide Image',

        'section' => 'anp_slider_two',

        'priority' => 5,

        'settings' => 'anp_slider_two_image',

    )));

	
	/* Slide three */
	
    $wp_customize->add_section('anp_slider_three', array(

        'priority' => 20,

        'title' => 'Slide Three',

        'panel'  => 'anp_customizations',
    ));
	
	$wp_customize->add_setting('anp_slider_three_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_slider_three_image', array(

        'label' => 'Slide Image',

        'section' => 'anp_slider_three',

        'priority' => 5,

        'settings' => 'anp_slider_three_image',

    )));
	
	/* Slide four */
	
    $wp_customize->add_section('anp_slider_four', array(

        'priority' => 25,

        'title' => 'Slide Four',

        'panel'  => 'anp_customizations',
    ));
	
	 $wp_customize->add_setting('anp_slider_four_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));
    

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_slider_four_image', array(

        'label' => 'Slide Image',

        'section' => 'anp_slider_four',

        'priority' => 5,

        'settings' => 'anp_slider_four_image',

    )));

	
	/* Slide five */
	
    $wp_customize->add_section('anp_slider_five', array(

        'priority' => 30,

        'title' => 'Slide Five',

        'panel'  => 'anp_customizations',
    ));
	
	 $wp_customize->add_setting('anp_slider_five_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_slider_five_image', array(

        'label' => 'Slide Image',

        'section' => 'anp_slider_five',

        'priority' => 5,

        'settings' => 'anp_slider_five_image',

    )));




	/* Logo */
	
    $wp_customize->add_section('anp_logo_section', array(

        'priority' => 35,

        'title' => 'Site Logo',
        
        'panel' => 'anp_customizations',

    ));
	
	$wp_customize->add_setting('anp_logo_image', array(

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anp_logo_image', array(

        'label' => 'Site Logo Image',

        'section' => 'anp_logo_section',

        'priority' => 5,

        'settings' => 'anp_logo_image',

    )));


    
	/* Footer */

    $wp_customize->add_section('anp_footer_section', array(

        'priority' => 80,

        'title' => 'Footer',
        
        'panel' => 'anp_customizations',

    ));
	

    $wp_customize->add_setting('anp_footer_copyrights', array(

        'default' => 'Awesome Photography. All Rights Reserved',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field',

    ));



    $wp_customize->add_control('anp_footer_copyrights', array(

        'label' => 'Footer Copyrights',

        'section' => 'anp_footer_section',

        'priority' => 50,

        'settings' => 'anp_footer_copyrights',

    ));

}

add_action('customize_register', 'anp_customize_register');



?>