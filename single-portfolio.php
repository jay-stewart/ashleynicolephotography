<?php get_header(); ?>
this is single-portfolio.php
<div id="portfolio-gallery">
		 <? $images = rwmb_meta( 'anp_imgadv' );
			if ( !empty( $images ) ) {
				foreach ( $images as $image ) {
					echo "<img src='{$image['url']}' alt='{$image['alt']}' width='{$image['width']}' height='{$image['height']}' srcset='{$image['srcset']}' />";
				}
			} ?>

		
		</div>

<?php get_footer(); ?>