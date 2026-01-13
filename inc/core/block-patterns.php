<?php

/**
 * relyo: Block Patterns
 *
 * @since relyo 1.0.0
 */

/**
 * Registers pattern categories for relyo
 *
 * @since relyo 1.0.0
 *
 * @return void
 */
function relyo_register_pattern_category() {
	$block_pattern_categories = array(
		'relyo-header'         => array( 'label' => __( 'Header Layout', 'relyo' ) ),
		'relyo-footer'         => array( 'label' => __( 'Footer Layout', 'relyo' ) ),
		'relyo-about-us'       => array( 'label' => __( 'About / Content', 'relyo' ) ),
		'relyo-services'       => array( 'label' => __( 'Services Section', 'relyo' ) ),
		'relyo-team'           => array( 'label' => __( 'Teams', 'relyo' ) ),
		'relyo-testimonial'    => array( 'label' => __( 'Testimonials & Reviews', 'relyo' ) ),
		'relyo-faqs'           => array( 'label' => __( 'FAQs', 'relyo' ) ),
		'relyo-portfolio'      => array( 'label' => __( 'Portfolio & Showcase Gallery', 'relyo' ) ),
		'relyo-blogs'          => array( 'label' => __( 'Posts / Blog', 'relyo' ) ),
		'relyo-cta'            => array( 'label' => __( 'CTA: Call To Action', 'relyo' ) ),
		'relyo-how-we-work'    => array( 'label' => __( 'How We Work', 'relyo' ) ),
		'relyo-why-choose-us'  => array( 'label' => __( 'Why Choose Us', 'relyo' ) ),
		'relyo-brand-showcase' => array( 'label' => __( 'Brand Showcase', 'relyo' ) ),
		'relyo-extra'          => array( 'label' => __( 'Extra Patterns', 'relyo' ) ),
	);

	$block_pattern_categories = apply_filters( 'relyo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'relyo_register_pattern_category', 9 );
