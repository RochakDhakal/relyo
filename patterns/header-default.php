<?php

/**
 * Title: Header
 * Slug: relyo/header-default
 * Description: Default header layout for the relyo
 * Categories: relyo-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"26px","right":"26px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:24px;padding-right:26px;padding-bottom:24px;padding-left:26px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"24px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"10px"},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-default" style="font-size:24px;font-style:normal;font-weight:600">
<!-- wp:site-logo {"width":45,"shouldSyncIcon":true} /-->
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontFamily":"geist"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"light-color","className":"is-style-relyo-navigation-secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"}}} -->
	<!-- wp:home-link /-->
	<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"16px"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:16px"><!-- wp:button {"className":"is-style-relyo-button-arrow","style":{"border":{"width":"1px"}},"borderColor":"light-color"} -->
<div class="wp-block-button is-style-relyo-button-arrow"><a class="wp-block-button__link has-border-color has-light-color-border-color wp-element-button" style="border-width:1px">
<?php
	esc_html_e( 'Get Started', 'relyo' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->