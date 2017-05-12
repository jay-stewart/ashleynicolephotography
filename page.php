<?php get_header(); ?>


<?php /* if ( !is_home() && is_front_page ()) : ?>

		<div id="backstretch">
		<?php $images = rwmb_meta( 'anp_imgadv' );
			if ( !empty( $images ) ) {
				foreach ( $images as $image ) {
					echo "<img src='{$image['url']}' alt='{$image['alt']}' width='{$image['width']}' height='{$image['height']}' srcset='{$image['srcset']}' />";
				}
			}

		?>
		</div>
    <?php else: */ ?>
	

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <section class="content container">
                    <div class="row">
                        <?php get_template_part( 'content', 'none' ); ?>
                    </div>
                </section>
            <?php endif; ?>

    <?php //endif; ?>

<?php if ( !is_home() && is_front_page ()) : ?>

	<section class="testimonials container">
		<div class="row">
			<h5 class="textcenter">Some kind words from past clients:</h5>
			<?php get_template_part('template-parts/content', 'testimonial'); ?>
		</div>
	</section>
	
<?php  endif; ?>	

<?php get_footer(); ?>