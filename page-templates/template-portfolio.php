<?php
/*
Template Name: Portfolio Page
*/

get_header(); ?>


<?php 
	$new_query = array(	'paged' 		 => get_query_var( 'paged' ),  
						'posts_per_page' => -1,  
						'post_type' 	 => 'portfolio');

	query_posts($new_query);
?>



		<div class="col-6 portfolio-thumbnail">
			<a href="http://www.ashleynicolephotography.ca/portfolio/wedding/">
				<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/10/DelaquisMcIntosh-Wedding-Web-478-460x275.jpg" alt="">
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Weddings</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->





		
		
		




	<div class="row">

		<div class="col-6 portfolio-thumbnail">
			<a href="http://www.ashleynicolephotography.ca/portfolio/wedding/">
				<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/10/DelaquisMcIntosh-Wedding-Web-478-460x275.jpg" alt="">
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Weddings</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->
		
		<div class="col-6 portfolio-thumbnail">
			 <a href="http://www.ashleynicolephotography.ca/portfolio/engagement/">
				<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2017/02/KumarAlberts-E-Oct2016-HighRes-331-460x275.jpg" alt="">
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Engagements</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->

		<div class="col-6 portfolio-thumbnail">
			 <a href="http://www.ashleynicolephotography.ca/portfolio/wedding-details/">
				<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2017/02/Prendegast-Conway-Wedding-2016-Web-666-460x275.jpg" alt="">
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Wedding Details</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->
		
		<div class="col-6 portfolio-thumbnail">
			<a href="http://www.ashleynicolephotography.ca/portfolio/newborn/">
			<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/02/Baby-Plas-WEB-174-460x275.jpg" alt="">	
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Newborns</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->
		
		<div class="col-6 portfolio-thumbnail">
			<a href="http://www.ashleynicolephotography.ca/portfolio/maternity/">
				<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2017/02/Ashleigh-Maternity-2016-Web-158-460x275.jpg" alt="">	
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Maternity</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->
		
		<div class="col-6 portfolio-thumbnail">
			<a href="http://www.ashleynicolephotography.ca/portfolio/lifestyle/">
			<img class="with-overlay" src="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/02/Dyer-Family-November2016-Web-81-460x275.jpg" alt="">
				<div class="image-overlay-full">
					<div class="image-overlay-middle">
						<h6 class="overlay-text">Lifestyle</h6>
					</div>
				</div>
			</a>
		</div><!-- .post-thumbnail -->
	</div><!-- .row -->
<?php get_footer(); ?>