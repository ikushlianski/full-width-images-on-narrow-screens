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
	<header class="entry-header page-heading section" <?php if( get_field('work_large_background') ) : ?> style="background-image:url(<?php the_field('work_large_background');  ?>)" <?php endif; ?>>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

		<?php if (get_field('work_short_description')) : ?>
			<div class="flexrow">
				<div class="short-description">
					<b><?php _e('Work summary', 'ilyaonline') ?>:</b> <?php the_field('work_short_description') ?>
				</div>
				<div class="work-date">
					<?php the_field('work_months'); ?>
				</div>
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
		<?php	if ( get_field('work_url') ) : ?>
		<a class="see-project-live-link" target="_blank" href="<?php the_field('work_url'); ?>">
			<button class="btn btn-success see-project-live" role="button">
				<?php _e('See project live', 'ilyaonline')?>
				<i class="fa fa-external-link" aria-hidden="true"></i>
			</button>
		</a>
		<?php endif; ?>

		<div class="tech_and_image">
		<?php

		$posts = get_field('technologies_involved_in_work');
		if( $posts ): ?>
			<div class="tech_wrapper">
				<h4 class=""><?php _e('Technologies used', 'ilyaonline')?></h4>
		    <ul class="technologies_involved">
		    <?php foreach( $posts as $post): ?>
		        <?php setup_postdata($post); ?>
		        <li class="technology_involved">
		            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        </li>
		    <?php endforeach; ?>
		    </ul>
				<?php if (get_field('work_github_link')) :  ?>
				<div class="github_link"><a href="<?php the_field('work_github_link') ?>">See it on GibHub</a></div>
				<?php endif; ?>
			</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
			<img class="work_image" src="<?php the_field('work_image') ?>" alt="">
		</div>
		<?php if (get_field('goals_of_work')) : ?>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><?php _e('Project goals', 'ilyaonline')?></h3>
				</div>
				<div class="panel-body">
					<?php the_field('goals_of_work') ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if (get_field('work_long_description')) : ?>
		<div class="work-long-description">
			<?php the_field('work_long_description') ?>
		</div>
		<?php endif; ?>

		<?php if (get_field('challenges_in_work')) : ?>
			<div class="panel panel-warning">
				<div class="skill-future-header panel-heading">
					<h3 class="panel-title"><?php _e('Challenges during project', 'ilyaonline')?> </h3>
				</div>
				<div class="panel-body">
					<?php the_field('challenges_in_work') ?>
				</div>
			</div>
		<?php endif; ?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php
		// make more related works here
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
