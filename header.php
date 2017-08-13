<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ilyaonline
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ilyaonline' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="main-navigation-img">
				<a href="<?php echo get_home_url(); ?>">
					<img  src="<?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilyalogo_small.png" alt="Ilya Kushlianski website logo">
				</a>
				<div class="brand-author-name">
					<?php pll_e('Ilya Kushlianski'); ?>
				</div>
			</div>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ilyaonline' ); ?></button>
			<?php
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		<img class="site-branding-image" srcset="<?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilya_back_2048.jpg 1920w, <?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilya_back_960.jpg 960w, <?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilya_back_768.jpg 768w" alt="Ilya Kushlianski, web developer">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
		<!-- end of img tag -->
	</header><!-- #masthead -->

	<div id="content" class="container site-content">
