<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Short description of the page (limit to 150 characters) -->
<!-- In *some* situations this description is used as a part of the snippet shown in the search results. -->
<!-- bloginfo('description') simply puts the side description into the tag, probably not enough -->
<meta name="description" content="<?php bloginfo('description'); ?>" />

<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<header id="masthead" class="site-header">
				<div class="top-navbar">
					<div class="site-branding">
						<?php the_custom_logo(); ?>

						<button class="menu-toggle">
							<svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use></svg>
							<svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use></svg>
						</button>
					</div><!-- .site-branding -->
					<?php if ( has_nav_menu( 'top-navbar' ) ) : ?>
						<nav id="site-navigation" class="main-navigation">
							<?php wp_nav_menu( array(
								'theme_location' => 'top-navbar',
								'menu_class'	 => 'menu',
								'menu_id'        => 'top-menu',
								'container'      => 'div',
								'container_class'=> 'site-navigation'
							) ); ?>
						</nav><!-- /#site-navigation -->
					<?php endif; ?>
				</div><!-- .top-navbar -->
			</header>

			
			<?php // If is front page, which is a "page", and has a featured image. ?>
			
			<?php if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) && has_post_thumbnail () ) { ?>
				<div class="custom-header">
					<div id="backstretch" class="custom-header-image">
						<?php // the_post_thumbnail (); ?>
						<?php /* <img src="<?php echo get_theme_mod( 'anp_slider_one_image'); ?>"> */ ?>
					</div>
					<div class="menu-scroll-down-container">
						<a href="#content" class="menu-scroll-down"><span class="screen-reader-text">Scroll down to content</span>
							<svg class="icon arrow-down" aria-hidden="true" role="img"> <use href="#arrow-down" xlink:href="#arrow-down"></use></svg>
						</a>
					</div>
				</div><!-- .custom-header -->
			
			<?php } ?>

			<div class="site-content-contain">
				<div id="content" class="site-content">