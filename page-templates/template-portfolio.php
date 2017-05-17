<?php
/*
Template Name: Portfolio Page
*/

get_header(); ?>


<?php 
	$new_query = array(	'paged' 		 => get_query_var( 'paged' ),  
						'posts_per_page' => -1,  
						'post_type' 	 => 'anp_portfolio');

	$portfolio_posts = query_posts($new_query); ?>



	<div class="row">
				<?php foreach( $portfolio_posts as $portfolio ){
						if($portfolio['post_status']=="publish"){ ?>
							<div class="col-6 portfolio-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/10/DelaquisMcIntosh-Wedding-Web-478-460x275.jpg" alt="">
								<?php the_post_thumbnail( 'blog' ); ?>
							</div>
							<div class="image-overlay-full">
								<div class="image-overlay-middle">
									<h6 class="overlay-text"><?php the_title();?></h6>
								</div>
							</div>
						<?php 
						}
					} ?>
				<?php wp_reset_query(); ?>

	</div><!-- .row -->
<?php get_footer(); ?>