<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function abisko_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'abisko_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function abisko_styles() {
	wp_enqueue_style( 'abisko-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'abisko' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'abisko_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function abisko_register_block_patterns() {

	// The block pattern categories included in Abisko.
	$abisko_block_pattern_categories = apply_filters( 'abisko_block_pattern_categories', array(
		'abisko'  => array(
			'label'			=> esc_html__( 'Abisko - All', 'abisko' ),
		),
		'abisko-blog'  => array(
			'label'			=> esc_html__( 'Abisko - Blog', 'abisko' ),
		),
		'abisko-cta'  => array(
			'label'			=> esc_html__( 'Abisko - Call to Action', 'abisko' ),
		),
		'abisko-general' => array(
			'label'			=> esc_html__( 'Abisko - General', 'abisko' ),
		),
		'abisko-hero' => array(
			'label'			=> esc_html__( 'Abisko - Hero', 'abisko' ),
		),
		'abisko-media' => array(
			'label'			=> esc_html__( 'Abisko - Media', 'abisko' ),
		),
		'abisko-page' => array(
			'label'			=> esc_html__( 'Abisko - Page Layouts', 'abisko' ),
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
	return array_merge( $defaults, array(
		'title_reply_before' 	=> '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after' 	=> '</h2>',
		'title_reply' 			=> __( 'Reply', 'abisko' )
	) );
}
add_filter( 'comment_form_defaults', 'abisko_comment_form_defaults' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function abisko_register_block_styles() {

	// Column: -90° Contents On Desktop
	register_block_style( 'core/column', array(
		'name'  	=> 'abisko-minus-90-deg-column-content-desktop',
		'label' 	=> esc_html__( '-90° Contents On Desktop', 'abisko' ),
	) );

	// Cover: Background Blur
	register_block_style( 'core/cover', array(
		'name'  	=> 'abisko-bg-blur',
		'label' 	=> esc_html__( 'Overlay Blur', 'abisko' ),
	) );

	// Featured Image: Ratio: 1/1
	register_block_style( 'core/post-featured-image', array(
		'name'  	=> 'abisko-ar-1x1',
		'label' 	=> esc_html__( 'Ratio: 1/1', 'abisko' ),
	) );

	// Featured Image: Ratio: 4/3
	register_block_style( 'core/post-featured-image', array(
		'name'  	=> 'abisko-ar-4x3',
		'label' 	=> esc_html__( 'Ratio: 4/3', 'abisko' ),
	) );

	// Heading, Paragraph: Tabular Numerals
	foreach( array( 'core/heading', 'core/paragraph' ) as $block_name ) {
		register_block_style( $block_name, array(
			'name'  	=> 'abisko-tabular-nums',
			'label' 	=> esc_html__( 'Tabular Numerals', 'abisko' ),
		) );
	}

	// Post Comments Form: Rotated Title to the Right on Desktop
	register_block_style( 'core/post-comments-form', array(
		'name'  	=> 'abisko-rotated-title',
		'label' 	=> esc_html__( 'Rotated Title to the Right on Desktop', 'abisko' ),
	) );

	// Term: Buttons
	register_block_style( 'core/post-terms', array(
		'name'  	=> 'abisko-terms-buttons',
		'label' 	=> esc_html__( 'Buttons', 'abisko' ),
	) );

}
add_action( 'init', 'abisko_register_block_styles' );
