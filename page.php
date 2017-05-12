<?php get_header(); ?>

	<?php if ( have_posts() ) : ?

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <section class="content">
                    <div class="row">
                        <?php get_template_part( 'content', 'none' ); ?>
                    </div>
                </section>
            <?php endif; ?>

    <?php //endif; ?>

<?php get_footer(); ?>
