<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function abisko_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'abisko_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function abisko_styles() {

	wp_enqueue_style( 'abisko-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'abisko' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'abisko_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function abisko_register_block_patterns() {

	// The block pattern categories included in Abisko.
	$abisko_block_pattern_categories = apply_filters( 'abisko_block_pattern_categories', array(
		'abisko-blog'  => array(
			'label'			=> esc_html__( 'Abisko Blog', 'abisko' ),
		),
		'abisko-cta'  => array(
			'label'			=> esc_html__( 'Abisko Call to Action', 'abisko' ),
		),
		'abisko-general' => array(
			'label'			=> esc_html__( 'Abisko General', 'abisko' ),
		),
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $abisko_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $abisko_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'abisko_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'abisko_register_block_styles' ) ) :
	function abisko_register_block_styles() {

		// Featured Image: Aspect Ratio: Square
		register_block_style( 'core/post-featured-image', array(
			'name'  	=> 'abisko-ar-1x1',
			'label' 	=> esc_html__( 'Aspect Ratio: Square', 'abisko' ),
		) );

	}
	add_action( 'init', 'abisko_register_block_styles' );
endif;
