<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 

 
 */

/**
 * https://codex.wordpress.org/Content_Width
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 *
 * snippet from Twenty Sixteen theme

 
 not sure yet if i need this
 
 
 
function anp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'anp_content_width', 555 );
}
add_action( 'after_setup_theme', 'anp_content_width', 0 );
 */


/**
 * Enqueue scripts and styles.
 */
function anp_scripts() {
	
    wp_enqueue_style( 'google-raleway-css', 'https://fonts.googleapis.com/css?family=Raleway' );
    wp_enqueue_style( 'google-opensans-css', 'https://fonts.googleapis.com/css?family=Open+Sans');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
    
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style( 'bootstrap-custom-css', get_template_directory_uri() . '/css/bootstrap-custom.css');
	wp_enqueue_style( 'skeleton-custom-css', get_template_directory_uri() . '/css/skeleton-custom.css');
	wp_enqueue_style( 'wordpress-styles-css', get_template_directory_uri() . '/css/wordpress-styles.css');
	wp_enqueue_style( 'all-styles-css', get_template_directory_uri() . '/css/all-style.css');
    
	wp_enqueue_script( 'anp-script', get_template_directory_uri() . '/js/main.js', array('jquery'), 1, true);
	
	/* localize script outputs variable to html as <script> */
 		wp_localize_script( 'anp-script', 'php_vars', array( 	get_theme_mod ('anp_slider_one_image'),
																get_theme_mod ('anp_slider_two_image'),
																get_theme_mod ('anp_slider_three_image'),
																get_theme_mod ('anp_slider_four_image'),
																get_theme_mod ('anp_slider_five_image'), )
							);
							
							
	wp_enqueue_script( 'backstretch-js', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), 1, true );

}
add_action( 'wp_enqueue_scripts', 'anp_scripts' );





/* https://codex.wordpress.org/Theme_Features */

function anp_theme_support(){
	
    add_theme_support( 'post-thumbnails' );
	
	/*  This feature adds RSS feed links to HTML <head>.
		https://codex.wordpress.org/Automatic_Feed_Links	
    add_theme_support( 'automatic-feed-links' );
	*/
	
    add_theme_support( 'menus' );

    //add_theme_support( 'post-formats', array( 'quote', 'gallery','video', 'audio' ) ); 
	add_theme_support( 'title-tag' );
}



function anp_images_sizes(){
    
    add_image_size( 'featured', 825, 340, true );

}




function anp_navigation_menus(){
	
	register_nav_menu( 'main-nav', 'Main Navigation' ); 
}



function anp_theme_setup(){
    anp_theme_support();
    anp_images_sizes();
    anp_navigation_menus();
}

add_action( 'after_setup_theme', 'anp_theme_setup' );








/* Register Sidebars (Widget Areas) */

function anp_register_sidebars(){
        
        register_sidebar(array(
            'id'=>'sidebar-1',
            'name' => 'Sidebar Blog',
            'before_widget' => '<div id="%1$s" class="widget %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h5 class="widget-title">', 
            'after_title' => '</h5>'
        ));


		register_sidebar(array(
            'name' => 'Footer Single Column',
            'id' => 'footer-1-column',
            'before_widget' => '<div id="%1$s" class="widget %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h5 class="widget-title">', 
            'after_title' => '</h5>', 
        ));

}

add_action( 'widgets_init', 'anp_register_sidebars' );
	
/* End Register Sidebars */






/* -------------------- End Setup Theme --------------------------------- */




/* -------------------- WP TITLE Filter ------------------------------

function anp_wp_title_filter( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
    
    global $page, $paged;

    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }

    return $title;
}

add_filter( 'wp_title', 'anp_wp_title_filter', 10, 2 );

 -------------------- End WP Title Filter -------------------------- */








/* -------------------- Allow SVG in media uploader ------------------ */
function anp_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'anp_mime_types');
/* ----------------- End allow SVG in media uploader ------------------ */




/* ----------  make all images responsive to adhere to containers, etc. -------------
copied from https://gist.github.com/mkdizajn/7352469

note: may not want this done for all images so i will comment it out for now



function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'
  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );

 ----------------- End make all images responsive ------------------ */




/*  
remove_filter('the_content', 'wptexturize');
remove_filter('the_content', 'wpautop');
*/





if(!function_exists('anp_image_by_id'))
{

	/**
	 * anp_image_by_id()
	 * originally from codeless
	 *
	 *
	 *
	 * @param mixed $thumbnail_id
	 * @param mixed $size
	 * @param string $output
	 * @param string $data
	 * @return
	 */
	function anp_image_by_id($thumbnail_id, $size = array('width'=>800,'height'=>800), $output = 'image', $data = "")
	{	
		if(!is_numeric($thumbnail_id)) return false;


		
		if(is_array($size)) 
		{
			$size[0] = $size['width'];
			$size[1] = $size['height'];
		}

		$image_src = wp_get_attachment_image_src($thumbnail_id, $size);
		
		if(!$image_src){
			$image_src = array();
			$image_src[0] = CODELESS_BASE_URL.'img/default.jpg';
			if($output == 'image')
				return "<img src='".$image_src[0]."' ".$data."/>";
		
		}
		if ($output == 'url') return $image_src[0];
		
		
		


		$attachment = get_post($thumbnail_id);
		
		if(is_object($attachment))
		{
			
			$image_description = $attachment->post_excerpt == "" ? $attachment->post_content : $attachment->post_excerpt;
			$image_description = trim(strip_tags($image_description));
			$image_title = trim(strip_tags($attachment->post_title));
			
			return "<img src='".$image_src[0]."' title='".$image_title."' alt='".$image_description."' ".$data."/>";
		}	
	}
}






/**
 * Customizer additions.
 *
 */
require get_template_directory() . '/inc/customizer.php';




/**
 * Portfolio post type.
 *
 */
require get_template_directory() . '/inc/portfolio-post-type.php';



/**
 * Testimonial post type.
 *
 */
require get_template_directory() . '/inc/testimonial-post-type.php';


/**
 * Custom Metaboxes (requires Plugin).
 *
 */
require get_template_directory() . '/inc/metaboxes.php';






?>