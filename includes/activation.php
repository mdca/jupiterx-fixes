<?php

/**
 * Replace the LESS definition for headlines.
 */
function jxfix_typography_less_fix() {

	$filepath = get_theme_root() . '/jupiterx/lib/assets/less/bootstrap/type.less';
	if ( strtoupper( substr( PHP_OS, 0, 3 ) ) === 'WIN' ) {
		$filepath = str_replace( '/', '\\', $filepath );
	}

	if ( empty( $filepath ) )
		return;

	// read the entire file as string
	$file = file_get_contents( $filepath );

	// define problematic headings
	$headings = [ 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ];
	foreach ( $headings as $heading ) {
		$file = str_replace(
			$heading.', .'.$heading.' {',
			$heading.', .'.$heading.', .elementor-widget-heading '.$heading.'.elementor-heading-title, .elementor-widget-heading .'.$heading.'.elementor-heading-title {',
			$file );
	}

	// write the modified string into the original file
	file_put_contents( $filepath, $file );

	// clean up memory
	unset( $file );

}
jxfix_typography_less_fix();
