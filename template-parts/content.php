<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-article' ); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-featured-image">
                <?php if ( !is_single() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'blog' ); ?>
                        <div class="overlay">
                            <div class="post_type_circle">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                <?php else : 
                    the_post_thumbnail( 'blog' ); ?>
                <?php endif; ?>
            </div>
        <?php endif;
        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
        
        if ( 'post' === get_post_type() ) : ?>
            <ul class="entry-meta">
                <li><i class="fa fa-user"></i>Posted by:<?php echo get_the_author() ?></li> 
                <li><i class="fa fa-calendar"></i>On<?php echo get_the_date() ?></li>                           
            </ul><!-- .entry-meta -->
		<?php endif; ?>
    </header>
        
        

	<div class="entry-content">

        <?php   
            if(is_single()){
                the_content();
            }else{
                the_excerpt();
            }
        ?>
        
    </div>
        
	<footer class="entry-footer">
        
        
		<?php if(!is_single()): ?>
		  <a href="<?php echo get_permalink() ?>" class="button"><span>Read More</span><i class="fa fa-arrow-right"></i></a>
		<?php endif; ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->