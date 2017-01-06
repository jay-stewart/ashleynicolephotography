<?php
/*
Template Name: Portfolio Page
*/

get_header(); ?>

<section id="content" class="portfolio-index">
    
        <?php // get_template_part( 'includes/view/loop', 'page' ); ?>
    
            <section id="portfolio-preview-items" class="row">
                    <?php get_template_part('template-parts/loop', 'grid'); ?>
            </section>
    
        <?php //get_template_part( 'includes/view/loop', 'page' ); ?>
    
</section>

<?php get_footer(); ?>