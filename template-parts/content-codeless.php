<div class="container <?php  echo esc_attr($layout) ?>" id="blog">
	<div class="row">
	<?php if($layout == 'sidebar_left' || $layout == 'dual') get_sidebar() ?>   
		<div class="span<?php echo $spancontent ?>">
			
			<?php get_template_part( 'includes/view/loop', 'page' ); ?>

		</div>
		<?php
		
		wp_reset_query();    

		if($layout == 'sidebar_right' || $layout == 'dual') if($layout != 'dual') get_sidebar(); else get_sidebar('dual');

		?>

	</div>
</div>