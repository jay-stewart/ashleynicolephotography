
        <?php $new_query = array(
                                    'posts_per_page' => 1,
                                    'post_type' 	 => 'anp_testimonial');

        query_posts($new_query);

        if ( have_posts() ) :

            while (have_posts()) : the_post(); ?>

				<p><? echo rwmb_meta( 'anp_testimonial-quote' ); ?></br>
				~ <?php echo rwmb_meta( 'anp_testimonial-name' ); ?></p>
				<p><?php echo rwmb_meta( 'anp_testimonial-work' ); ?></p>
				
            <?php endwhile;
        endif;
        wp_reset_query(); ?>