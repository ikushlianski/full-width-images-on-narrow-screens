<?php
/**
 * The template for displaying all pages
 * Template Name: Ilya Online Contacts Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ilyaonline
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header page-heading entry-header_contacts">
					<h1 class="page-title"><?php _e('Get in touch', 'ilyaonline'); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">

				</div><!-- .entry-content -->


					<footer class="entry-footer">

					</footer><!-- .entry-footer -->

			</article><!-- #post-<?php the_ID(); ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
