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
				<?php pll_e('Beginner developer'); ?>
			</div>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'brand-menu',
					'container_class'     => 'site-branding__brand-menu',
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
								<li class="skill-name">JavaScript<br><small class="skill-description">Solid theory, some hands-on experience</small></li>
								<li class="skill-name">Angular<br><small class="skill-description">Familiar</small></li>
								<li class="skill-name">HTML<br><small class="skill-description">Solid</small></li>
								<li class="skill-name">CSS3<br><small class="skill-description">Solid</small></li>
								<li class="skill-name">jQuery<br><small class="skill-description">Good</small></li>
								<li class="skill-name">Bootstrap<br><small class="skill-description">Fair</small></li>
							</div>
							<a class="skills-list-more" href="#">All frontend skills</a>
						</ul>
						<ul class="backend-skills-list">
							<div class="skill-label">Backend</div>
							<div class="backend-skills">
								<li class="skill-name">PHP<br><small class="skill-description">basic</small></li>
								<li class="skill-name">NodeJS & Express<br><small class="skill-description">basic theory</small></li>
								<li class="skill-name">MySQL<br><small class="skill-description">fair</small></li>
								<li class="skill-name">MongoDB<br><small class="skill-description">basic</small></li>
							</div>
							<a class="skills-list-more" href="#">All backend skills</a>
						</ul>
						<ul class="misc-skills-list">
							<div class="skill-label">Other skills & technologies</div>
							<div class="misc-skills">
								<li class="skill-name">English<br><small class="skill-description">Advanced.<br>Sufficient for reading docs and take part in negotiations</small></li>
								<li class="skill-name">Gulp<br><small class="skill-description">Enough for development automation</small></li>
								<li class="skill-name">BEM methodology<br><small class="skill-description">Familiar, trying to implement in projects</small></li>
								<li class="skill-name">RegEX<br><small class="skill-description">Solid knowledge</small></li>
							</div>
							<a class="skills-list-more" href="#">My other skills</a>
						</ul>
					</div>
				</div>
				<div class="subsection why-me">
					<h3 class="header"><?php pll_e('Why me?') ?></h3>
					<ul class="why-me-list">
						<li class="why-me-reason">Reliable<br><small class="reason-description">If you tell me to do something by a certain date, this will be done no matter what. Why? Because it's my job!</small>
						</li>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
