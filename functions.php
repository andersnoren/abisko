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
	FILTER COMMENT FORM DEFAULTS
	Modify the heading and title of the comments form.
--------------------------------------------------------------------------------------------------- */

function abisko_comment_form_defaults( $defaults ) {

	$defaults = array_merge( $defaults, array(
		'title_reply_before' 	=> '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after' 	=> '</h2>',
		'title_reply' 			=> __( 'Reply', 'abisko' )
	) );

	return $defaults;

}
add_filter( 'comment_form_defaults', 'abisko_comment_form_defaults' );


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

		// Term: Buttons
		register_block_style( 'core/post-terms', array(
			'name'  	=> 'abisko-terms-buttons',
			'label' 	=> esc_html__( 'Buttons', 'abisko' ),
		) );

		// Column: -90° Contents On Desktop
		register_block_style( 'core/column', array(
			'name'  	=> 'abisko-minus-90-deg-column-content-desktop',
			'label' 	=> esc_html__( '-90° Contents On Desktop', 'abisko' ),
		) );

		// Post Comments Form: Rotated Title to the Right on Desktop
		register_block_style( 'core/post-comments-form', array(
			'name'  	=> 'abisko-rotated-title',
			'label' 	=> esc_html__( 'Rotated Title to the Right on Desktop', 'abisko' ),
		) );

	}
	add_action( 'init', 'abisko_register_block_styles' );
endif;
