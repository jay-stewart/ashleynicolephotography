<?php get_header(); ?>


<?php /*
in the following order:
1.HELLO & WELCOME
2.MY LATEST CAPTURES
3.LOVE FROM MY CLIENTS
4.GET IN TOUCH
*/ ?>


        <?php $new_query = array(
                                    'posts_per_page' => -1,
                                    'post_type' 	 => 'anp_front-page-panel');

        query_posts($new_query); ?>
		
		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/Front Page/content', 'front-page-panel' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>


<?php // get_template_part('template-parts/Front Page/welcome', 'panel'); ?>
<?php // get_template_part('template-parts/Front Page/recent-posts', 'panel'); ?>
<?php // get_template_part('template-parts/Front Page/testimonials', 'panel'); ?>
<?php // get_template_part('template-parts/Front Page/contact', 'panel'); ?>



	
     <?php   wp_reset_query(); ?>

<?php get_footer(); ?>