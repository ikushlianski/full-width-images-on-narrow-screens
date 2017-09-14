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
				<b><?php _e('Skill summary', 'ilyaonline') ?>:</b> <?php the_field('short_description') ?>
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
					<h3 class="panel-title"><?php the_title() ?><?php _e(': what I already know', 'ilyaonline')?></h3>
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
					<h3 class="panel-title"><?php the_title() ?><?php _e(': further learning plans', 'ilyaonline')?> </h3>
				</div>
				<div class="skill-future panel-body">
					<?php the_field('what_i_want_to_learn') ?>
				</div>
			</div>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<?php
	// ilyaonline_entry_footer();
	$technology = wp_get_post_terms( get_the_ID(), 'skill_tag' );
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

	$currentlyViewedSkillLoop = new WP_Query( $args ); ?>
	<footer class="entry-footer">
		<?php if ( $currentlyViewedSkillLoop->have_posts() ) : ?>
			<div class="related-list">
				<h3 class="related-list__header">
					<?php if ( !has_term([223, 225], 'skill_tag') ) echo pll_e('My other')?>
					<?php if ( !has_term([223, 225], 'skill_tag') ) :
							echo mb_strtolower($technology[0]->name);
						else :
							echo $technology[0]->name;
						endif; ?>
				</h3>
				<ul class="related-items-list">
				<?php while ( $currentlyViewedSkillLoop->have_posts() ) : $currentlyViewedSkillLoop->the_post(); ?>
						<li class="related-item-wrapper">
							<a href="<?php the_permalink(); ?>" >
								<h4 class="related-item__title"><?php the_title(); ?></h4>
							</a>
							<div class="related-item__short-description">
								<?php the_field('short_description') ?>
							</div>
						</li>
				<?php	endwhile; ?>
				</ul>
			</div>
		<?php endif;
		wp_reset_postdata(); ?>

		<?php
		// Begin loop for three other skill fields: for instance, if on 'other skills', then these three loops will show backend and frontend as well as future skills
		$termsForSkills = get_terms( 'skill_tag', array(
	    'hide_empty' => false,
			'orderby' => 'term_id'
		) );
		foreach ($termsForSkills as $termForSkill) {
			$termID = $termForSkill->term_id;
			$term_link = get_term_link( $termForSkill );
			if ($termForSkill->name != $technology[0]->name)
			{
				// create a new loop for each of the remaining sets of technologies and output them
				$args = array(
					'post_type' => 'skills',
					'posts_per_page' => 4,
					'orderby' => 'rand',
					'tax_query' => array(
						array(
							'taxonomy' => 'skill_tag',
							'field' => 'name',
							'terms' => $termForSkill->name
						)
					)
				);

				$currentlyViewedSkillLoop = new WP_Query( $args );
				if ( $currentlyViewedSkillLoop->have_posts() ) : ?>
				<div class="related-list">
					<h3 class="related-list__header">
						<?php
								echo $termForSkill->name;
						 ?>
					</h3>
					<ul class="related-items-list">
						<?php while ( $currentlyViewedSkillLoop->have_posts() ) : $currentlyViewedSkillLoop->the_post(); ?>
							<?php if( $termID != 250 && $termID != 252 ) :?>
								<li class="related-item-wrapper">
									<a href="<?php  the_permalink(); ?>">
										<h4 class="related-item__title current-skill"><?php the_title(); ?></h4>
									</a>
									<div class="related-item__short-description">
										<?php the_field('short_description') ?>
									</div>
								</li>
							<?php else: ?>
								<?php // if this is a future skill ?>
								<li class="related-item-wrapper future-skill">
									<h4 class="related-item__title future-skill"><?php the_title(); ?></h4>
									<div class="related-item__short-description future-skill">
										<?php the_field('short_description') ?>
									</div>
								</li>
								<?php endif; ?>
						<?php	endwhile; ?>
					</ul>
						<?php if ( $args['posts_per_page'] < $currentlyViewedSkillLoop->found_posts ) : ?>
							<div class="seeAllRelatedLink">
								<a href="<?php echo $term_link ?>">
							<?php printf( esc_html__( 'See all %d', 'ilyaonline' ), $currentlyViewedSkillLoop->found_posts );?>
								</a>
							</div>
						<?php endif; ?>
				</div>
			<?php endif;
			wp_reset_postdata();
			}
		}
		?>

		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
