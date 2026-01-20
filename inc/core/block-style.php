<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package relyo
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function relyo_register_block_styles() {
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'relyo-navigation-primary',
				'label' => __( 'Hover: Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'relyo-navigation-secondary',
				'label' => __( 'Hover: Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'relyo-button-arrow',
				'label' => __( 'Arrow ↗', 'relyo' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'relyo-hover-zoom-in',
				'label' => __( 'Hover: Zoom In', 'relyo' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'relyo-hover-zoom-out',
				'label' => __( 'Hover: Zoom Out', 'relyo' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'relyo-hover-overlay',
				'label' => __( 'Hover: Overlay', 'relyo' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'relyo-hover-zoom-in',
				'label' => __( 'Hover: Zoom In', 'relyo' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'relyo-hover-zoom-out',
				'label' => __( 'Hover: Zoom Out', 'relyo' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'relyo-hover-color-primary',
				'label' => __( 'Hover - Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'relyo-hover-color-secondary',
				'label' => __( 'Hover - Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'relyo-hover-color',
				'label' => __( 'Greyscale - Color', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'relyo-hover-zoom-in',
				'label' => __( 'Hover - Zoom In', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'relyo-hover-zoom-out',
				'label' => __( 'Hover - Zoom Out', 'relyo' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'relyo-boxshadow',
				'label' => __( 'Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'relyo-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'relyo-overflow-hidden',
				'label' => __( 'Overflow: Hidden', 'relyo' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'relyo-hover-primary',
				'label' => __( 'Hover: Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'relyo-hover-secondary',
				'label' => __( 'Hover: Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'relyo-boxshadow',
				'label' => __( 'Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'relyo-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'relyo-hover-primary',
				'label' => __( 'Hover: Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'relyo-hover-secondary',
				'label' => __( 'Hover: Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'relyo-boxshadow',
				'label' => __( 'Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'relyo-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'relyo' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'relyo-overflow-hidden',
				'label' => __( 'Overflow: Hidden', 'relyo' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'relyo-hover-primary',
				'label' => __( 'Hover: Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'relyo-hover-secondary',
				'label' => __( 'Hover: Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'relyo-pagination-primary',
				'label' => __( 'Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'relyo-pagination-secondary',
				'label' => __( 'Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'relyo-categories-no-list',
				'label' => __( 'List Style : None', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'relyo-category-primary',
				'label' => __( 'Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'relyo-category-secondary',
				'label' => __( 'Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-navigation-link',
			array(
				'name'  => 'relyo-post-link-primary',
				'label' => __( 'Hover: Primary', 'relyo' ),
			)
		);
		register_block_style(
			'core/post-navigation-link',
			array(
				'name'  => 'relyo-post-link-secondary',
				'label' => __( 'Hover: Secondary', 'relyo' ),
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'relyo-no-radius',
				'label' => __( 'Border Radius: None', 'relyo' ),
			)
		);
	}
	add_action( 'init', 'relyo_register_block_styles' );
}
