<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package Ilyaonline
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ilyaonline_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'ilyaonline_body_classes' );


// Show backgrounds on skills
function showSkillBackground() {
	$bgimg = get_field('skill_image');
	if ($bgimg) {
		return $bgimg;
	} else {
		return false;
	}
}
