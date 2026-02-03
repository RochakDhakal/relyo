<?php

/**
 * Title: Header with Cover
 * Slug: relyo/header-with-cover
 * Description: Default header layout for the relyo
 * Categories: relyo-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header-with-cover
 * Post Types: wp_template
 * Inserter: true
 */
	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/hero.png',
	);
	?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php	echo esc_url( $relyo_img[0] ); ?>","id":14,"isUserOverlayColor":true,"minHeight":950,"gradient":"primary-gradient","contentPosition":"top center","sizeSlug":"large","style":{"spacing":{"padding":{"right":"26px","left":"26px","top":"0","bottom":"80px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:26px;padding-bottom:80px;padding-left:26px;min-height:950px"><img class="wp-block-cover__image-background wp-image-14 size-large" alt="" src="<?php echo esc_url( $relyo_img[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"},"blockGap":"24px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-bottom:24px"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"10px"},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-default" style="font-size:24px;font-style:normal;font-weight:600">
<!-- wp:site-logo {"width":45,"shouldSyncIcon":true} /-->
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontFamily":"geist"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"is-style-relyo-navigation-primary","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:home-link /-->
<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"16px"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:16px"><!-- wp:button {"className":"is-style-relyo-button-arrow"} -->
<div class="wp-block-button is-style-relyo-button-arrow"><a class="wp-block-button__link wp-element-button">
<?php
	esc_html_e( 'Get Started', 'relyo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"300px"}}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:300px"><!-- wp:heading {"style":{"typography":{"fontSize":"90px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"oswald"} -->
<h2 class="wp-block-heading has-oswald-font-family" style="font-size:90px;font-style:normal;font-weight:700;text-transform:uppercase">
<?php
	esc_html_e( 'Guided By Experts, Designed For Your Dream Lifestyle.', 'relyo' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px","bottom":"0"},"blockGap":{"top":"34px","left":"34px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:45px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-relyo-button-arrow","style":{"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-relyo-button-arrow"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-width:1px">
<?php
	esc_html_e( 'Book A Consultation', 'relyo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"24px"}},"textColor":"foreground-alt","fontFamily":"inter"} -->
<p class="has-foreground-alt-color has-text-color has-link-color has-inter-font-family" style="font-size:24px">
<?php
	esc_html_e( 'But because athose who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves.', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->