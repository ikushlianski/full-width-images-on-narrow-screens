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
		<div class="site-branding-image-div">
			<div class="site-branding">
				<div class="brand-person">
					<span class="brand-person-first-name">
						<?php pll_e('Ilya'); ?>
					</span>
					<span class="brand-person-last-name">
						<?php pll_e('Kushlianski'); ?>
					</span>
				</div>
				<div class="brand-person-title">
					<?php pll_e('Beginner developer'); ?>
				</div>
			</div><!-- .site-branding -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="container site-content">
