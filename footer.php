<a href="#" class="scrollup">Scroll</a> 
</section><!-- .site-content -->





<!-- Footer -->
<footer id="footer" class="site-footer">
	<!-- The below widget area should be an aside -->
	<aside id="tertiary" class="widget-area container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
					<?php if ( is_active_sidebar( 'footer-1-column' ) ) {
							 dynamic_sidebar( 'footer-1-column' );
					}?>
				<div class="widget">
					<ul class="social-icon-group">
						<li class="social-icon"><a href="https://www.facebook.com/ashleynicolephotographywpg"><i class="fa fa-facebook"></i></a></li>
						<li class="social-icon"><a href="mailto:info@ashleynicolephotography.ca"><i class="fa fa-envelope"></i></a></li>
						<li class="social-icon"><a href="http://instagram.com/ashleynicolephotographywpg"><i class="fa fa-instagram"></i></a></li>
						<li class="social-icon"><a href="http://pinterest.com/ashleynicoles13"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>                                
			</div>
		</div>
	</aside>

<?php
/**   moving the testimonials to the front page only.

    <aside id="tertiary" class="widget-area container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
                <?php get_template_part('template-parts/content', 'testimonial'); ?>
			</div>
		</div>
	</aside>
*/
?>
    
    
    
	<div id="copyright" class="site-info container-fluid">
		<div class="copyright-text pull-left">
			<?php echo get_theme_mod('anp_footer_copyrights', 'this is just some default-ass text' ); ?>
		</div>
		<div class="copyright-social-icons pull-right">
			<ul class="social-icon-group">
				<li class="social-icon"><a href="https://www.facebook.com/ashleynicolephotographywpg"><i class="fa fa-facebook"></i></a></li>
				<li class="social-icon"><a href="mailto:info@ashleynicolephotography.ca"><i class="fa fa-envelope"></i></a></li>
				<li class="social-icon"><a href="http://instagram.com/ashleynicolephotographywpg"><i class="fa fa-instagram"></i></a></li>
				<li class="social-icon"><a href="http://pinterest.com/ashleynicoles13"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>
	</div><!-- #copyright -->
</footer>
<!-- #footer -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>