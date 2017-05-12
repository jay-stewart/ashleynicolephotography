<?php
	$args = array( 'numberposts' => '4' );
	$recent_posts = wp_get_recent_posts( $args );
?>
	


<article id="post-6" class="anp-panel recent-posts">
	<div class="panel-content container">
		<header class="entry-header">
			<h2 class="entry-title">My Latest Work</h2>
			<span class="separator"></span>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<div class="row">
				<?php foreach( $recent_posts as $recent ){
						if($recent['post_status']=="publish"){
							if ( has_post_thumbnail($recent["ID"])) {
								echo '<div class="col-3"><a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail($recent["ID"], 'small') . '</a> </div>';
							}
						}
					}
				wp_reset_query(); ?>
			</div>
		</div>
		<div class="entry-footer ">
			<a class="page-link button" href="http://localhost/blog/">View All Posts</a>
		</div><!-- .entry-footer -->
	</div><!-- .panel-content container -->
</article>