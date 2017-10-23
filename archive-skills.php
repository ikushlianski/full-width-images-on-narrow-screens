<?php
/**
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ilyaonline
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-heading section">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="entries_wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				 ?>

					<div class="entry skill">
						<a class="entry__imageLink" href="<?php echo get_permalink(); ?>">
							<img class="entry__image entry__image_square" src="<?php the_field('skill_image'); ?>"/>
						</a>
						<div class="entry__details-wrapper">
							<h3 class="entry__title">
								<a href="<?php echo get_permalink(); ?>"
								title="<?php the_title(); ?>" rel="bookmark">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="entry__summary">
								<?php the_field('short_description'); ?>
							</div><!-- .entry-summary -->
						</div>
					</div>

			<?php
			endwhile;
			?>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
