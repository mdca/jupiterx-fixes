<?php


/**
 * Add class within Customizer.
 */
function jxfix_typography_h1() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h1', [
		'output'     => [
			[
				'element' => 'h1, .h1, .elementor-widget-heading h1.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h1_after_field', 'jxfix_typography_h1' );

/**
 * Add class within Customizer.
 */
function jxfix_typography_h2() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h2', [
		'output'     => [
			[
				'element' => 'h2, .h2, .elementor-widget-heading h2.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h2_after_field', 'jxfix_typography_h2' );

/**
 * Add class within Customizer.
 */
function jxfix_typography_h3() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h3', [
		'output'     => [
			[
				'element' => 'h3, .h3, .elementor-widget-heading h3.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h3_after_field', 'jxfix_typography_h3' );

/**
 * Add class within Customizer.
 */
function jxfix_typography_h4() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h4', [
		'output'     => [
			[
				'element' => 'h4, .h4, .elementor-widget-heading h4.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h4_after_field', 'jxfix_typography_h4' );

/**
 * Add class within Customizer.
 */
function jxfix_typography_h5() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h5', [
		'output'     => [
			[
				'element' => 'h5, .h5, .elementor-widget-heading h5.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h5_after_field', 'jxfix_typography_h5' );

/**
 * Add class within Customizer.
 */
function jxfix_typography_h6() {

	JupiterX_Customizer::update_field( 'jupiterx_typography_h6', [
		'output'     => [
			[
				'element' => 'h6, .h6, .elementor-widget-heading h6.elementor-heading-title',
			],
		],
	] );

}
add_action( 'jupiterx_typography_h6_after_field', 'jxfix_typography_h6' );
