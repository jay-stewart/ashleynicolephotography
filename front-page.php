<?php get_header(); ?>


<?php /*
in the following order:
1.HELLO & WELCOME
2.MY LATEST CAPTURES
3.LOVE FROM MY CLIENTS
4.GET IN TOUCH
*/ ?>





<?php get_template_part('template-parts/Front Page/welcome', 'panel'); ?>
<?php get_template_part('template-parts/Front Page/recent-posts', 'panel'); ?>
<?php get_template_part('template-parts/Front Page/testimonials', 'panel'); ?>
<?php get_template_part('template-parts/Front Page/contact', 'panel'); ?>



	


<?php get_footer(); ?>