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

					<div class="entry work">
						<a class="entry__imageLink" href="<?php echo get_permalink(); ?>">
							<img class="entry__image entry__image_square" src="<?php the_field('work_image'); ?>"/>
						</a>
						<div class="entry__details-wrapper">
							<h3 class="entry__title">
								<a href="<?php echo get_permalink(); ?>"
								title="<?php the_title(); ?>" rel="bookmark">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="entry__summary">
								<?php the_field('work_short_description'); ?>
							</div><!-- .entry-summary -->
						</div>
					</div>

			<?php
			endwhile;
			the_posts_navigation();
			?>
			</div>
			<?php

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
			<div class="section portfolio">
				<?php
				$args = array(
					'post_type' => 'smallworks',
					'posts_per_page' => 6,
					'orderby' => 'rand',
					'order' => 'DESC'
				);
				$smallWorksLoop = new WP_Query( $args );
				if ($smallWorksLoop->have_posts()) : ?>
				<h3 class="header"><?php _e('Small examples', 'ilyaonline')?></h3>
				<div class="portfolio-items-container smallWorks-container">
					<?php while( $smallWorksLoop->have_posts() ) : $smallWorksLoop->the_post();
					?>
					<div class="portfolio-item smallWork" style="background-image:url(<?php the_field('work_image'); ?>)">
						<div class="portfolio-item__meta">
							<a><h4 class="portfolio-item__name"><?php the_title(); ?></h4></a>
							<div class="portfolio-item__short-desc"><?php the_field('work_short_description'); ?></div>

							<?php	if ( get_field('work_url') ) : ?>
							<a class="see-project-live-link" target="_blank" href="<?php the_field('work_url'); ?>">
								<button class="btn btn-success see-project-live" role="button">
									<?php _e('See live', 'ilyaonline')?>
									<i class="fa fa-external-link" aria-hidden="true"></i>
								</button>
							</a>
							<?php endif; ?>

						</div>
					</div>
					<?php
					endwhile; wp_reset_postdata();
					?>
				</div>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
