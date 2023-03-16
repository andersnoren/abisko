<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function gatewood_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'gatewood_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function gatewood_styles() {

	wp_enqueue_style( 'gatewood-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'gatewood' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'gatewood_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function gatewood_register_block_patterns() {

	// The block pattern categories included in Gatewood.
	$gatewood_block_pattern_categories = apply_filters( 'gatewood_block_pattern_categories', array(
		'gatewood-blog'  => array(
			'label'			=> esc_html__( 'Gatewood Blog', 'gatewood' ),
		),
		'gatewood-cta'  => array(
			'label'			=> esc_html__( 'Gatewood Call to Action', 'gatewood' ),
		),
		'gatewood-general' => array(
			'label'			=> esc_html__( 'Gatewood General', 'gatewood' ),
		),
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $gatewood_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $gatewood_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'gatewood_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'gatewood_register_block_styles' ) ) :
	function gatewood_register_block_styles() {

		// Shared: Torn Edge
		$torn_edge_block_styles_args = array( 
			array( 
				'label'	=> esc_html__( 'Torn Edge Top', 'gatewood' ),
				'name'	=> 'gatewood-torn-edge-top'
			),
			array( 
				'label'	=> esc_html__( 'Torn Edge Bottom', 'gatewood' ),
				'name'	=> 'gatewood-torn-edge-bottom'
			),
			array( 
				'label'	=> esc_html__( 'Torn Edge Vertical', 'gatewood' ),
				'name'	=> 'gatewood-torn-edge-vertical'
			),
		);

		$torn_edge_block_styles_blocks = apply_filters( 'gatewood_torn_edge_block_styles_blocks', array( 
			'core/columns', 
			'core/group', 
			'core/image', 
			'core/media-text',
			'core/post-featured-image',
		) );

		foreach ( $torn_edge_block_styles_args as $block_style_args ) {
			foreach ( $torn_edge_block_styles_blocks as $block_name ) {
				register_block_style( $block_name, $block_style_args );
			}
		}

		// Separator: Dashed Separator
		register_block_style( 'core/separator', array(
			'name'  	=> 'gatewood-dashed',
			'label' 	=> esc_html__( 'Dashed', 'gatewood' ),
		) );

		// Group: Topography Pattern Dark
		register_block_style( 'core/group', array(
			'name'  	=> 'gatewood-topography-bg-dark',
			'label' 	=> esc_html__( 'Topography Pattern Dark', 'gatewood' ),
		) );

		// Group: Topography Pattern Light
		register_block_style( 'core/group', array(
			'name'  	=> 'gatewood-topography-bg-light',
			'label' 	=> esc_html__( 'Topography Pattern Light', 'gatewood' ),
		) );
		
	}
	add_action( 'init', 'gatewood_register_block_styles' );
endif;
