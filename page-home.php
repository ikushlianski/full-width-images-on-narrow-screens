<?php

 /**
  * The template for displaying front page
  * Template Name: Ilya Online Front Page
  *
  *
  * @package Ilyaonline
  */

get_header(); ?>
	<div class="site-branding-image-div">
		<div class="site-branding">
			<div class="brand-person-image">
				<img class="brand-person-image-src" src="<?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilya_img_small.jpg" alt="Ilya Kushlianski">
			</div>
			<div class="brand-person">
				<span class="brand-person-first-name">
					<?php _e('Ilya', 'ilyaonline'); ?>
				</span>
				<span class="brand-person-last-name">
					<?php _e('Kushlianski', 'ilyaonline'); ?>
				</span>
			</div>
			<div class="brand-person-title">
				<?php _e('Beginner developer. Fast learner', 'ilyaonline'); ?>
			</div>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'brand-menu',
					'container_class'     => 'site-branding__brand-menu ',
					// 'before'				 => '<button class="site-branding__brand-menu__button">',
					// 'after' 				 => '</button>',
					'items_wrap'		 => '%3$s'
				) );
			?>
		</div><!-- .site-branding -->
	</div><!-- .site-branding-img-div -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="section about-shortly-wrapper">
				<div class="subsection all-skills">
					<h3 class="header"><?php _e('Skills', 'ilyaonline') ?></h3>
					<div class="skills-list">
						<?php
						$skillTerms = get_terms( array(
						    'taxonomy' => 'skill_tag',
						    'hide_empty' => true,
								'orderby' => 'term_id'
						) );
						foreach ($skillTerms as $skillTerm) {
							$termID = $skillTerm->term_id;
							$term_link = get_term_link( $skillTerm );
							$args = array(
								'post_type' => 'skills',
								'posts_per_page' => 4,
								'orderby' => 'menu_order',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'skill_tag',
										'field' => 'name',
										'terms' => $skillTerm->name
									)
								)
							);
							if ($termID == 250 || $termID == 252) {
								$args['meta_key']	= 'skill_completion_status';
								$args['orderby']  = 'meta_value';
								$args['order']    = 'DESC';
							}
							$currentlyViewedSkillLoop = new WP_Query( $args );
							if ( $currentlyViewedSkillLoop->have_posts() ) : ?>
						<ul class="skill-kind-list">
							<div class="skill-label"><?php echo $skillTerm->name ?></div>
								<div class="skill-kind">
									<div class="skills-list__skill-detail">
										<?php while ( $currentlyViewedSkillLoop->have_posts() ) : $currentlyViewedSkillLoop->the_post(); ?>
										<li class="skill-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small class="skill-description"><?php the_field('short_description') ?></small></li>
										<?php endwhile; ?>
									</div>
								</div>
							<a class="skills-list-more" href="<?php echo $term_link ?>">
								<?php
								$skillSet = $skillTerm->name;
								printf( esc_html__( 'All %s', 'ilyaonline' ), mb_strtolower($skillSet) ); ?>
							</a>
						</ul>
						<?php endif; wp_reset_postdata(); } ?>
					</div>
				</div>
			</div>
			<div class="section why-me">
				<!-- <h3 class="header"><?php esc_html_e('Why hire me', 'ilyaonline') ?></h3> -->
				<ul class="why-me-list">
					<div class="why-me-list-wrapper_primary">
						<li class="why-me-reason item-primary"><?php _e('Ready to hire a beginner but don\'t want to waste time training them?', 'ilyaonline')?></li>
						<li class="why-me-reason item-primary"><?php _e('Looking for a reliable guy who will easily fit into your dev team?', 'ilyaonline')?></li>
						<li class="why-me-reason item-primary"><?php _e('Need a team member who won\'t stop improving skills and learning?', 'ilyaonline')?></li>
					</div>
					<div class="why-me-list-wrapper_secondary">
						<li class="why-me-reason item-secondary"><?php _e('Having freelance experience myself, I always care about what clients want', 'ilyaonline')?></li>
						<li class="why-me-reason item-secondary"><?php _e('I look at your business as if it was mine and try to find ways to streamline processes', 'ilyaonline')?></li>
						<li class="why-me-reason item-secondary"><?php _e('Self-taught, I believe that you can achieve what you want if you work hard', 'ilyaonline')?></li>
					</div>
				</ul>
				<a href="<?php
				if (pll_current_language() == "en") :
					echo get_page_link(1786);
				endif;
				if (pll_current_language() == "ru") :
					echo get_page_link(1788);
				endif;
				?>" class="cta-button"><?php _e('Contact me', 'ilyaonline') ?></a>
				<a class="why-me-list-more" href="<?php
				if (pll_current_language() == "en") :
					echo get_page_link(1799);
				endif;
				if (pll_current_language() == "ru") :
					echo get_page_link(1801);
				endif;
				?>"><?php _e('How else I can benefit you', 'ilyaonline') ?></a>
			</div>
			<div class="section portfolio">
				<h3 class="header"><?php _e('Portfolio', 'ilyaonline')?></h3>
				<div class="portfolio-items-container">
					<div class="portfolio-item">
						<div class="portfolio-item__meta">
							<h4 class="portfolio-item__name">Ilya.online</h4>
							<div class="portfolio-item__short-desc">Lorem ipsum dolor sit amet and more words here to fill the space.</div>
						</div>
					</div>
				</div>
				<a href="" class="cta-button"><?php _e('All works', 'ilyaonline') ?></a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
