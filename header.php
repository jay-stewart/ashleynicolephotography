<!DOCTYPE html>

<html <?php language_attributes(); ?>>

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

<link rel="icon" href="http://www.ashleynicolephotography.ca/wp-content/uploads/2016/02/favicon.ico" type="image/x-icon">

<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>

<div class="page">

<?php if ( !is_home() && is_front_page ()) : //needed for full front page slider ?> 
<header id="masthead" class="site-header overlay">
<?php else :?>
    <header id="masthead" class="site-header">
<?php endif; ?>
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="site-branding">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if (get_theme_mod( 'anp_logo_image' )) : ?>
						<img src="<?php echo( get_theme_mod( 'anp_logo_image') ); ?>"/>
					<?php else : ?>
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description'); ?><h2>
				<?php endif; ?>
			</a>
			<button type="button" class="menu-toggle"><i class="fa fa-bars"></i>Menu</button>
		</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
						
		<nav id="site-navigation" class="main-navigation toggled">
			<?php wp_nav_menu( array( 	'theme_location' => 'main-nav',
										'container' => false, ) ); ?>
		</nav><!-- /#site-navigation -->
	</div><!-- /.container -->
</header>

<?php if (!is_home() && is_front_page()) : ?>
<section id="content" class="site-content front-page">
    <?php else: ?>
<section id="content" class="site-content container">
        <?php endif; ?>