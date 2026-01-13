<?php
	/**
	 * Title: Call To Action
	 * Slug: relyo/cta
	 * Categories: relyo-cta
	 */

	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/brand_1.png',
		$relyo_url . 'assets/images/brand_2.png',
	);
	?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-heading-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:26px;padding-bottom:0;padding-left:26px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"padding":{"top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#ffffff26","style":"solid","width":"1px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#ffffff26;border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:80px;padding-bottom:80px"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"840px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"light-color","fontFamily":"oswald"} -->
<h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-oswald-font-family" style="font-size:54px;font-style:normal;font-weight:500;text-transform:uppercase">
<?php
	esc_html_e( 'Let’s make your dream address a reality — reach out today.', 'relyo' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}},"fontFamily":"inter"} -->
<div class="wp-block-buttons has-custom-font-size has-inter-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-relyo-button-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} -->
<div class="wp-block-button is-style-relyo-button-arrow"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button">
<?php
	esc_html_e( 'Contact Us', 'relyo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->