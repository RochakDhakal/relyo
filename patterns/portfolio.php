<?php
	/**
	 * Title: Portfolio
	 * Slug: relyo/portfolio
	 * Categories: relyo-portfolio
	 */

	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/portfolio_0.jpg',
		$relyo_url . 'assets/images/portfolio_1.jpg',
		$relyo_url . 'assets/images/portfolio_2.jpg',
		$relyo_url . 'assets/images/portfolio_3.jpg',
		$relyo_url . 'assets/images/arrow-btn.png',
	);
	?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-heading-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:26px;padding-bottom:80px;padding-left:26px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%","layout":{"type":"constrained","contentSize":"135px","justifyContent":"left"}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"geist"} -->
<p class="has-white-color-color has-text-color has-link-color has-geist-font-family" style="font-size:20px;text-transform:uppercase">
<?php
	esc_html_e( '( Our Portfolio )', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white-color","fontSize":"mega"} -->
<h2 class="wp-block-heading has-white-color-color has-text-color has-link-color has-mega-font-size" style="font-style:normal;font-weight:500">
<?php
	esc_html_e( 'A decade of helping families and investors find spaces that truly feel like their own.', 'relyo' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"65px"},"blockGap":{"top":"34px","left":"34px"}}}} -->
<div class="wp-block-columns" style="margin-top:65px"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( $relyo_img[0] ); ?>","id":188,"dimRatio":0,"isUserOverlayColor":true,"minHeight":880,"sizeSlug":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:880px"><img class="wp-block-cover__image-background wp-image-188 size-full" alt="" src="<?php echo esc_url( $relyo_img[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}},"textColor":"white-color"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600">Zellar Residence</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":343,"sizeSlug":"full","linkDestination":"none","className":"is-style-relyo-hover-color-primary"} -->
<figure class="wp-block-image size-full is-style-relyo-hover-color-primary"><img src="<?php echo esc_url( $relyo_img[4] ); ?>" alt="" class="wp-image-343"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $relyo_img[1] ); ?>","id":193,"dimRatio":0,"isUserOverlayColor":true,"minHeight":375,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover is-light" style="min-height:375px"><img class="wp-block-cover__image-background wp-image-193 size-full" alt="" src="<?php echo esc_url( $relyo_img[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}},"textColor":"white-color"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Jordi Residence', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":343,"sizeSlug":"full","linkDestination":"none","className":"is-style-relyo-hover-color-primary"} -->
<figure class="wp-block-image size-full is-style-relyo-hover-color-primary"><img src="<?php echo esc_url( $relyo_img[4] ); ?>" alt="" class="wp-image-343"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"55px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:55px"><!-- wp:cover {"url":"<?php echo esc_url( $relyo_img[2] ); ?>
","id":210,"dimRatio":0,"isUserOverlayColor":true,"minHeight":375,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover is-light" style="min-height:375px"><img class="wp-block-cover__image-background wp-image-210 size-full" alt="" src="<?php echo esc_url( $relyo_img[2] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}},"textColor":"white-color"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600">
<?php
	esc_html_e( 'Denver Residence', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":343,"sizeSlug":"full","linkDestination":"none","className":"is-style-relyo-hover-color-primary"} -->
<figure class="wp-block-image size-full is-style-relyo-hover-color-primary"><img src="
<?php
	echo esc_url( $relyo_img[4] );
?>
" alt="" class="wp-image-343"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"55px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:55px"><!-- wp:cover {"url":"<?php echo esc_url( $relyo_img[3] ); ?>","id":209,"dimRatio":0,"isUserOverlayColor":true,"minHeight":550,"isDark":false,"sizeSlug":"large","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover is-light" style="min-height:550px"><img class="wp-block-cover__image-background wp-image-209 size-large" alt="" src="<?php echo esc_url( $relyo_img[3] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}},"textColor":"white-color"} -->
<h3 class="wp-block-heading has-white-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600">
<?php
esc_html_e( 'Supreme Residence', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":343,"sizeSlug":"full","linkDestination":"none","className":"is-style-relyo-hover-color-primary"} -->
<figure class="wp-block-image size-full is-style-relyo-hover-color-primary"><img src="
<?php
	echo esc_url( $relyo_img[4] );
?>
" alt="" class="wp-image-343"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->