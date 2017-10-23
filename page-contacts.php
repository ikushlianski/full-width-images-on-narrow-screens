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

				<div class="entry-content entry-content_wide contacts">
					<div class="contact-detail">
						<div class="pre-contact">
							<div class="name-reminder"><?php _e('Ilya Kushlianski', 'ilyaonline') ?></div>
							<p><i><?php _e('I want to plunge into the world of the future, the world of smart and enterprising people, whose income directly depends on their skills and experience.', 'ilyaonline') ?></i></p>
						</div>
						<div class="way-to-contact"><i class="fa fa-2x fa-mobile" aria-hidden="true"></i> +375 29 608 8900</div>
						<div class="way-to-contact"><i class="fa fa-2x fa-envelope" aria-hidden="true"></i> <a target="_blank" href="mailto:kushliansky@gmail.com">kushliansky@gmail.com</a></div>
						<div class="way-to-contact"><i class="fa fa-2x fa-linkedin" aria-hidden="true"></i> <a href="https://www.linkedin.com/in/ilya-kushlianski-620242b8/" target="_blank">Ilya Kushlianski</a></div>
						<div class="way-to-contact"><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i> <?php _e('Uručča neighborhood, Minsk, Belarus', 'ilyaonline') ?></div>
					</div>
					<div class="contact-form-wrapper">
						<form class="contact-form" action="" method="post">
							<?php if (isset($_POST['submitButton'])) : ?>
								<p class="messageStatus"><?php _e('Your message has been sent successfully', 'ilyaonline') ?></p>
							<?php endif; ?>
							<p class="pre-contact" style="font-size: 14px; font-style: italic; text-align: center;"><?php _e('I am glad to hear from you! Hope for fruitful cooperation and positive experience. Have a nice week!', 'ilyaonline') ?></p>
							<label for=""><?php _e('Your name', 'ilyaonline') ?></label>
							<input type="text" name="authorName" value="" placeholder="" required>

							<label for=""><?php _e('Your mail', 'ilyaonline') ?></label>
							<input type="email" name="authorMail" value="" required>

							<label for=""><?php _e('Subject', 'ilyaonline') ?></label>
							<input type="text" name="subjectName" value="" placeholder="<?php _e('Awesome job offer for Ilya!', 'ilyaonline') ?>" required>

							<label for=""><?php _e('Your message', 'ilyaonline') ?></label>
							<textarea rows="4" cols="50" name="comment" placeholder="<?php _e('Please enter your text here...', 'ilyaonline') ?>" minlength="5"></textarea>

							<input class="submit-message" name="submitButton" type="submit" value="Send">

						</form>
					</div>
				</div><!-- .entry-content -->


					<footer class="entry-footer entry-footer_red">

					</footer><!-- .entry-footer -->

			</article><!-- #post-<?php the_ID(); ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
