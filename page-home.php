<?php
/**
 * Template Name: Ilya Online Front Page
 *
 */

get_header(); ?>
	<div class="site-branding-image-div">
		<div class="site-branding">
			<div class="brand-person-image">
				<img class="brand-person-image-src" src="<?php echo get_stylesheet_directory_uri(); ?>/__dist/img/ilya_img_small.jpg" alt="Ilya Kushlianski">
			</div>
			<div class="brand-person">
				<span class="brand-person-first-name">
					<?php pll_e('Ilya'); ?>
				</span>
				<span class="brand-person-last-name">
					<?php pll_e('Kushlianski'); ?>
				</span>
			</div>
			<div class="brand-person-title">
				<?php pll_e('Beginner developer. Fast learner'); ?>
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
					<h3 class="header"><?php pll_e('Skills') ?></h3>
					<div class="skills-list">
						<ul class="frontend-skills-list">
							<div class="skill-label">Frontend</div>
							<div class="frontend-skills">
								<div class="skills-list__skill-detail">
									<li class="skill-name">JavaScript<small class="skill-description">Solid theory, some hands-on experience</small></li>
								</div>
							</div>
							<a class="skills-list-more" href="#">All frontend skills</a>
						</ul>
						<ul class="backend-skills-list">
							<div class="skill-label">Backend</div>
							<div class="backend-skills">
								<li class="skill-name">PHP<small class="skill-description">Basic</small></li>
								<li class="skill-name">Laravel<small class="skill-description">Basic</small></li>
								<li class="skill-name">WordPress<small class="skill-description">Good</small></li>
								<li class="skill-name">NodeJS & Express<small class="skill-description">Basic theory</small></li>
								<li class="skill-name">MySQL<small class="skill-description">Fair</small></li>
								<li class="skill-name">MongoDB<small class="skill-description">Basic</small></li>
							</div>
							<a class="skills-list-more" href="#">All backend skills</a>
						</ul>
						<ul class="misc-skills-list">
							<div class="skill-label">Other skills & knowledge</div>
							<div class="misc-skills">
								<li class="skill-name">English<small class="skill-description">Advanced. Sufficient for reading docs and communication with customers</small></li>
								<li class="skill-name">SASS<small class="skill-description">Fair</small></li>
								<li class="skill-name">Ajax<small class="skill-description">Fair</small></li>
								<li class="skill-name">Gulp<small class="skill-description">Enough for development automation</small></li>
								<li class="skill-name">BEM methodology<small class="skill-description">Familiar, trying to implement in projects</small></li>
								<li class="skill-name">RegEx<small class="skill-description">Solid knowledge</small></li>
							</div>
							<a class="skills-list-more" href="#">My other skills</a>
						</ul>
					</div>
				</div>
			</div>
			<div class="section why-me">
				<h3 class="header">Why hire me</h3>
				<ul class="why-me-list">
					<li class="why-me-reason">Ready to hire a beginner but don't want to waste time training them?</li>
					<li class="why-me-reason">Looking for a reliable guy who will easily fit into your dev team?</li>
					<li class="why-me-reason">Need a team member who won't stop improving skills and learning?</li>
				</ul>
				<a href="" class="cta-button"><?php pll_e('Contact me') ?></a>
				<a class="why-me-list-more" href="#">How else I can benefit you</a>
			</div>
			<div class="section portfolio">
				<h3 class="header"><?php pll_e('Portfolio')?></h3>
				<div class="portfolio-items-container">
					<div class="portfolio-item">
						<img class="portfolio-item__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/friends.jpg" alt="">
						<div class="portfolio-item__meta">
							<h4 class="portfolio-item__name">Ilya.online</h4>
							<div class="portfolio-item__short-desc">Lorem ipsum dolor sit amet and more words here to fill the space.</div>
						</div>
					</div>
					<div class="portfolio-item">
						<img class="portfolio-item__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events-minsk-img.jpg" alt="">
						<div class="portfolio-item__meta">
							<h4 class="portfolio-item__name">Score simulator</h4>
							<div class="portfolio-item__short-desc">Lorem ipsum dolor sit amet and more words here to fill the space.</div>
						</div>
					</div>
					<div class="portfolio-item">
						<img class="portfolio-item__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events-minsk-img.jpg" alt="">
						<div class="portfolio-item__meta">
							<h4 class="portfolio-item__name">Perevodim.online</h4>
							<div class="portfolio-item__short-desc">Lorem ipsum dolor sit amet and more words here to fill the space.</div>
						</div>
					</div>
					<div class="portfolio-item">
						<img class="portfolio-item__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events-minsk-img.jpg" alt="">
						<div class="portfolio-item__meta">
							<h4 class="portfolio-item__name">Perevodim.online</h4>
							<div class="portfolio-item__short-desc">Lorem ipsum dolor sit amet and more words here to fill the space.</div>
						</div>
					</div>
				</div>
				<a href="" class="cta-button"><?php pll_e('All works') ?></a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
