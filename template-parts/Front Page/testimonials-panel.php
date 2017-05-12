
        <?php $new_query = array(
                                    'posts_per_page' => -1,
                                    'post_type' 	 => 'anp_testimonial');

        query_posts($new_query);

        if ( have_posts() ) : ?>
			<article id="post-6" class="anp-panel about">
				<div class="panel-content container">

					
					<div class="row">
						<div class="col-6">
							<div class="entry-featured-image on-left">
								<img src="http://www.ashleynicolephotography.ca/wp-content/uploads/2017/01/ANP-Headshot-2.jpg">
							</div><!-- .entry-featured-image -->
						</div>
						<div class="col-6">
							<header class="entry-header">
								<h2 class="entry-title">Love From My Clients</h2>
								<span class="separator"></span>
							</header><!-- .entry-header -->
							<div class="entry-content">
								<div class="testimonial-wrapper">
									<div class="slider">
										<ul class="">
		
											<?php while (have_posts()) : the_post(); ?>
												<li class="testimonial-entry">
													<div class="testimonial-tagline">
														<?php echo rwmb_meta( 'anp_testimonial-tagline' ); ?>
													</div>
													<blockquote class="testimonial-content">
														<? echo rwmb_meta( 'anp_testimonial-content' ); ?>
													</blockquote>
													
													<span class="testimonial-author"><?php echo rwmb_meta( 'anp_testimonial-name' ); ?></span>
													<span class="testimonial-work"><?php echo rwmb_meta( 'anp_testimonial-work' ); ?></span>
													<span class="testimonial-date"><?php echo rwmb_meta( 'anp_testimonial-date' ); ?></span>
												</li>
											<?php endwhile; ?>
										</ul>
									</div>
								</div>
							</div>
							                                        <a href="#" class="page-link">Read More About Ashley<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</article>
		<?php endif;
        wp_reset_query(); ?>