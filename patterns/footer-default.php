<?php

/**
 * Title: Footer Default
 * Slug: relyo/footer-default
 * Description: Default footer layout for the relyo
 * Categories: relyo-footer
 * Keywords: footer, nav, links, button
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/footer_0.png',
		$relyo_url . 'assets/images/footer_1.png',
		$relyo_url . 'assets/images/footer_2.png',
	);
	?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"26px","right":"26px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"backgroundColor":"heading-color","textColor":"foreground-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-foreground-alt-color has-heading-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:26px;padding-bottom:0;padding-left:26px"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"34px","left":"24px"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"470px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":45} /-->
<!-- wp:site-title {"level":2,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontFamily":"geist"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"24px"}}},"textColor":"foreground-alt"} -->
<p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:24px">
<?php
	esc_html_e( 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.', 'relyo' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FEFFFF","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white-color","fontFamily":"geist"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color has-geist-font-family" style="font-size:24px;font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Useful Links', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
<p style="margin-top:20px"><a href="#">
<?php
	esc_html_e( 'Home', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'About Us', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Features', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Projects', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Awards', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white-color","fontFamily":"geist"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color has-geist-font-family" style="font-size:24px;font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Inner Pages', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
<p style="margin-top:20px"><a href="#">
<?php
	esc_html_e( 'Services', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Contact Us', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Reviews', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'Pricing', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}}} -->
<p style="margin-top:12px"><a href="#">
<?php
	esc_html_e( 'FAQs', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white-color","fontFamily":"geist"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color has-geist-font-family" style="font-size:24px;font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Contact Us', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:image {"id":1197,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[0] );
?>
" alt="" class="wp-image-1197"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
<p style="margin-top:0px">
<?php
	esc_html_e( '+1(000) 0123-4567', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:image {"id":1199,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[1] );
?>
" alt="" class="wp-image-1199"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<p style="margin-top:0">
<?php
	esc_html_e( 'sample@example.com', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:image {"id":1200,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="
<?php
	echo esc_url( $relyo_img[2] );
?>
" alt="" class="wp-image-1200"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<p style="margin-top:0">
<?php
	esc_html_e( 'T657 LA Street, California, USA', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"bottom":"34px"}}}} -->
<p class="has-text-align-center" style="padding-bottom:34px">
<?php
	esc_html_e( '© 2025 - CozyThemes, All rights reserved.', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->