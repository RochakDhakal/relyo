<?php
	/**
	 * Title: Testimonial
	 * Slug: relyo/testimonial
	 * Categories: relyo-testimonial
	 */

	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/comma.png',
		$relyo_url . 'assets/images/testimonial.png',
		$relyo_url . 'assets/images/award_0.png',
		$relyo_url . 'assets/images/award_1.png',
		$relyo_url . 'assets/images/award_2.png',
		$relyo_url . 'assets/images/award_3.png',
	);
	?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"26px","right":"26px"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:26px;padding-bottom:80px;padding-left:26px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%","layout":{"type":"constrained","contentSize":"135px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"geist"} -->
<p class="has-white-color-color has-text-color has-link-color has-geist-font-family" style="font-size:20px;text-transform:uppercase">
<?php
	esc_html_e( 'Testimonial', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":327,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[0] );
?>
" alt="" class="wp-image-327"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"white-color","fontSize":"jumbo"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:600">
<?php
	esc_html_e( 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"44px","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"34px"},"blockGap":"34px"},"border":{"bottom":{"color":"#ffffff33","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:#ffffff33;border-bottom-width:1px;margin-top:44px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:34px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"16px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"70px","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70px"><!-- wp:image {"id":360,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[1] );
?>
" alt="" class="wp-image-360"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<h2 class="wp-block-heading has-white-color-color has-text-color has-link-color">
<?php
	esc_html_e( 'Lily Bennett', 'relyo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<p class="has-white-color-color has-text-color has-link-color" style="margin-top:6px">
<?php
	esc_html_e( 'UI/UX Design', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"white-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-border-color has-white-color-border-color wp-element-button" style="border-style:solid;border-width:1px">
<?php
	esc_html_e( 'View All Reviews', 'relyo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"44px","margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","left":"0","right":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small","fontFamily":"geist"} -->
<p class="has-background-color has-text-color has-link-color has-geist-font-family has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">
<?php
	esc_html_e( 'Award-Winning Excellence in 2025 :', 'relyo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":369,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[2] );
?>
" alt="" class="wp-image-369"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":370,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[3] );
?>
" alt="" class="wp-image-370"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":371,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[4] );
?>
" alt="" class="wp-image-371"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":372,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[5] );
?>
" alt="" class="wp-image-372"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->