<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ilyaonline
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

		<?php if (get_field('short_description')) : ?>
			<div class="skill-short-description">
				<b><?php pll_e('Skill summary') ?>:</b> <?php the_field('short_description') ?>
			</div>
		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ilyaonline_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ilyaonline' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ilyaonline' ),
				'after'  => '</div>',
			) );
		?>
		<?php	if ( get_field('skill_notice') ) : ?>
			<div class="skill-notice alert alert-warning" role="alert">
				<b><?php pll_e('Notice')?>:</b> <?php the_field('skill_notice'); ?>
			</div>
		<?php endif; ?>

		<?php if (get_field('long_description')) : ?>
			<div class="panel panel-success">
				<div class="how-well-skill panel-heading">
					<h3 class="panel-title"><?php pll_e('What I already know about')?> <?php the_title() ?></h3>
				</div>
				<div class="this-skill-now panel-body">
					<img class="skillBackground" src="<?php the_field('skill_image') ?>" alt="">
					<?php the_field('long_description') ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if (get_field('what_i_want_to_learn')) : ?>
			<div class="panel panel-default">
				<div class="skill-future-header panel-heading">
					<h3 class="panel-title"> <?php pll_e('Further plans to learn')?> <?php the_title() ?></h3>
				</div>
				<div class="skill-future panel-body">
					<?php the_field('what_i_want_to_learn') ?>
				</div>
			</div>
		<?php endif; ?>
	</div><!-- .entry-content -->
	<?php $technology = wp_get_post_terms( get_the_ID(), 'skill_tag' ); ?>
	<footer class="entry-footer">
		<div class="related-technologies-list">
			<h3 class="related-technologies-list__header">
				<?php if ( !has_term([223, 225], 'skill_tag') ) echo pll_e('My other')?>
				<?php if ( !has_term([223, 225], 'skill_tag') ) :
						echo mb_strtolower($technology[0]->name);
					else :
						echo $technology[0]->name;
					endif; ?>
			</h3>
			<?php
			// ilyaonline_entry_footer();
			$args = array(
				'post_type' => 'skills',
				'posts_per_page' => 6,
				'post__not_in' => array( get_the_ID() ),
				'tax_query' => array(
					array(
						'taxonomy' => 'skill_tag',
						'field' => 'name',
						'terms' => $technology[0]->name
					)
				)
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<a href="<?php the_permalink(); ?>" >
				<h4><?php the_title(); ?></h4>
			</a>
			<div class="related-technologies-list__skill-description">
				<?php the_field('short_description') ?>
			</div>
			<?php

					// echo '<img src="' . get_field('field_name') . '" alt="" />';

					// echo '<span class="speaker-title">';
					// 	the_field('title'); echo ' / '; the_field('company_name');
					// echo '</p>';

					// the_content();
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
