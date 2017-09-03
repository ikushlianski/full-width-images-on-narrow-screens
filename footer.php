<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ilyaonline
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<?php
				pll_e('Theme Ilya Online created by Ilya Kushlianski');
				if ( date('Y') == 2017 ){
					echo '<p>&copy; ' . date('Y') . '</p>';
				} else {
					echo '<p>&copy; 2017-' . date('Y') . '</p>';
				};
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
