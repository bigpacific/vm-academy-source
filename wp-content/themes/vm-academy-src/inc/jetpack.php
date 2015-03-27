<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package violetminded Academy Source
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function vm_academy_src_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'vm_academy_src_jetpack_setup' );
