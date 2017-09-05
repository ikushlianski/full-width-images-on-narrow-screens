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
			<div><?php pll_e('Theme IlyaOnline created by Ilya Kushlianski');?></div>
				<?php
				if ( date('Y') == 2017 ){
					echo '<div>&copy; ' . date('Y') . '</div>';
				} else {
					echo '<div>&copy; 2017-' . date('Y') . '</div>';
				};
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
