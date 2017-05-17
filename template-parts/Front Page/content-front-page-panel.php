<article id="post-<?php the_ID(); ?>" <?php post_class( 'anp-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) : ?>
	
		<div class="panel-image" style="background-image: url( <?php the_post_thumbnail_url();?> );">

		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content container">
		<header class="entry-header">
			<h2 class="entry-title">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<span class="separator"></span>
		</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
	</div><!-- .panel-content container -->
</article><!-- #post-## -->