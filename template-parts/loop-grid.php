<?php $new_query = array(
				            'posts_per_page' => -1,  
				            'post_type' 	 => 'portfolio'); 

query_posts($new_query);
		
if ( have_posts() ) :

    $the_id = 0;
	$counter = 1;
	
    while (have_posts()) : the_post();
	
    	$the_id = get_the_ID();
        $link = get_permalink(); ?>
		
		
			<div class="col-sm-6">              
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>

                <h5 class="textcenter"><a href="<?php echo $link ?>"><?php echo get_the_title() ?></a></h5>       
			</div>
			
			<?php if (  $counter % 2  == 0 ) : ?>
				<div class="clearfix"></div>
			<?php endif; ?>
			<?php $counter++; ?>
			
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>