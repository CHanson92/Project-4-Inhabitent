<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<?php if( is_page('about-us')) { ?>
				<h1 class="about">ABOUT</h1>
				<?php } ?>
				<img class="logo" src='/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg'>
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php if( is_page('find-us')) { ?>
					<h1 class="homelogo"><a href="<?php echo esc_url( home_url() ); ?>" 
					rel="home"><img class="home" src='/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent.svg'></a></h1>
					<?php } else { ?>
					<h1 class="homelogo"><a href="<?php echo esc_url( home_url() ); ?>" 
					rel="home"><img class="home" src='/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent-white.svg'></a></h1>
					<?php } ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content"></div>