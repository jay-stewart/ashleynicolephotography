<article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial' ); ?>>

	<div class="entry-content">

        <?php $new_query = array(
                                    'posts_per_page' => 1,  
                                    'post_type' 	 => 'testimonial'); 

        query_posts($new_query);

        if ( have_posts() ) :

            while (have_posts()) : the_post();

                the_content();

            endwhile;
        endif;
        wp_reset_query(); ?>
        
    </div>
    
</article><!-- #post-## -->