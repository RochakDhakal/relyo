<?php
	/**
	 * Title: Services
	 * Slug: relyo/services
	 * Categories: relyo-services
	 */

	$relyo_url = trailingslashit( get_template_directory_uri() );
	$relyo_img = array(
		$relyo_url . 'assets/images/service_0.png',
		$relyo_url . 'assets/images/service_1.png',
		$relyo_url . 'assets/images/service_2.png',
		$relyo_url . 'assets/images/service_3.png',
		$relyo_url . 'assets/images/service_4.png',
	);
	?>
<!-- wp:group {"style":{"color":{"background":"#f6f6f6"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:80px;padding-right:26px;padding-bottom:80px;padding-left:26px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"810px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"geist"} -->
<h2 class="wp-block-heading has-text-align-center has-geist-font-family" style="font-size:44px;font-style:normal;font-weight:500">
<?php
	esc_html_e( 'How We Make Real Estate Easier', 'relyo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px"}}}} -->
<p class="has-text-align-center" style="margin-top:16px">
<?php
	esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"64px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:64px;margin-bottom:0"><!-- wp:columns {"verticalAlignment":"center","className":"relyo-hover-primary","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"margin":{"top":"24px"},"padding":{"top":"34px","bottom":"34px","left":"48px","right":"48px"}}},"backgroundColor":"white-color"} -->
<div class="wp-block-columns are-vertically-aligned-center relyo-hover-primary has-white-color-background-color has-background" style="margin-top:24px;padding-top:34px;padding-right:48px;padding-bottom:34px;padding-left:48px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":137,"width":"65px","height":"65px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="
<?php
	echo esc_url( $relyo_img[0] );
?>
" alt="" class="wp-image-137" style="object-fit:cover;width:65px;height:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"className":"relyo-text-light-color"} -->
<h3 class="wp-block-heading relyo-text-light-color">
<?php
	esc_html_e( 'Property Valuation / Pricing Analysis', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"relyo-text-light-color","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="relyo-text-light-color" style="margin-top:24px">
	<?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Dignissim pretium blandit nunc elit enim. Diam quis amet vitae urna eu quis lacus. Pretium ut accumsan elementum.', 'relyo' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:paragraph {"className":"relyo-text-light-color","style":{"typography":{"fontSize":"18px","textDecoration":"underline","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
<p class="relyo-text-light-color" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:underline"><a href="#">
<?php
	esc_html_e( 'Read More', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"relyo-hover-primary","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"margin":{"top":"24px"},"padding":{"top":"34px","bottom":"34px","left":"48px","right":"48px"}}},"backgroundColor":"white-color"} -->
<div class="wp-block-columns are-vertically-aligned-center relyo-hover-primary has-white-color-background-color has-background" style="margin-top:24px;padding-top:34px;padding-right:48px;padding-bottom:34px;padding-left:48px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":137,"width":"65px","height":"65px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="
<?php
	echo esc_url( $relyo_img[1] );
?>
" alt="" class="wp-image-137" style="object-fit:cover;width:65px;height:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"className":"relyo-text-light-color"} -->
<h3 class="wp-block-heading relyo-text-light-color">
<?php
	esc_html_e( 'Transaction Management', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"relyo-text-light-color","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="relyo-text-light-color" style="margin-top:24px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Dignissim pretium blandit nunc elit enim. Diam quis amet vitae urna eu quis lacus. Pretium ut accumsan elementum.', 'relyo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:paragraph {"className":"relyo-text-light-color","style":{"typography":{"fontSize":"18px","textDecoration":"underline","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
<p class="relyo-text-light-color" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:underline"><a href="#">
<?php
	esc_html_e( 'Read More', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"relyo-hover-primary","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"margin":{"top":"24px"},"padding":{"top":"34px","bottom":"34px","left":"48px","right":"48px"}}},"backgroundColor":"white-color"} -->
<div class="wp-block-columns are-vertically-aligned-center relyo-hover-primary has-white-color-background-color has-background" style="margin-top:24px;padding-top:34px;padding-right:48px;padding-bottom:34px;padding-left:48px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":137,"width":"65px","height":"65px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="
<?php
	echo esc_url( $relyo_img[2] );
?>
" alt="" class="wp-image-137" style="object-fit:cover;width:65px;height:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"className":"relyo-text-light-color"} -->
<h3 class="wp-block-heading relyo-text-light-color">
<?php
	esc_html_e( 'Marketing Promotion', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"relyo-text-light-color","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="relyo-text-light-color" style="margin-top:24px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Dignissim pretium blandit nunc elit enim. Diam quis amet vitae urna eu quis lacus. Pretium ut accumsan elementum.', 'relyo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:paragraph {"className":"relyo-text-light-color","style":{"typography":{"fontSize":"18px","textDecoration":"underline","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
<p class="relyo-text-light-color" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:underline"><a href="#">
<?php
	esc_html_e( 'Read More', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"relyo-hover-primary","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"margin":{"top":"24px"},"padding":{"top":"34px","bottom":"34px","left":"48px","right":"48px"}}},"backgroundColor":"white-color"} -->
<div class="wp-block-columns are-vertically-aligned-center relyo-hover-primary has-white-color-background-color has-background" style="margin-top:24px;padding-top:34px;padding-right:48px;padding-bottom:34px;padding-left:48px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":137,"width":"65px","height":"65px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="
<?php
	echo esc_url( $relyo_img[3] );
?>
" alt="" class="wp-image-137" style="object-fit:cover;width:65px;height:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"className":"relyo-text-light-color"} -->
<h3 class="wp-block-heading relyo-text-light-color">
<?php
	esc_html_e( 'Property Valuation', '' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"relyo-text-light-color","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="relyo-text-light-color" style="margin-top:24px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Dignissim pretium blandit nunc elit enim. Diam quis amet vitae urna eu quis lacus. Pretium ut accumsan elementum.', 'relyo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:paragraph {"className":"relyo-text-light-color","style":{"typography":{"fontSize":"18px","textDecoration":"underline","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
<p class="relyo-text-light-color" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:underline"><a href="#">Read More</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"relyo-hover-primary","style":{"spacing":{"blockGap":{"top":"34px","left":"24px"},"margin":{"top":"24px"},"padding":{"top":"34px","bottom":"34px","left":"48px","right":"48px"}}},"backgroundColor":"white-color"} -->
<div class="wp-block-columns are-vertically-aligned-center relyo-hover-primary has-white-color-background-color has-background" style="margin-top:24px;padding-top:34px;padding-right:48px;padding-bottom:34px;padding-left:48px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":137,"width":"65px","height":"65px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="
<?php
	echo esc_url( $relyo_img[4] );
?>
" alt="" class="wp-image-137" style="object-fit:cover;width:65px;height:65px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"className":"relyo-text-light-color"} -->
<h3 class="wp-block-heading relyo-text-light-color">
<?php
	esc_html_e( 'Home Search & Buyer Representation', 'relyo' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"relyo-text-light-color","style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p class="relyo-text-light-color" style="margin-top:24px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Dignissim pretium blandit nunc elit enim. Diam quis amet vitae urna eu quis lacus. Pretium ut accumsan elementum.', 'relyo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:paragraph {"className":"relyo-text-light-color","style":{"typography":{"fontSize":"18px","textDecoration":"underline","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
<p class="relyo-text-light-color" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:underline"><a href="#">
<?php
	esc_html_e( 'Read More', 'relyo' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->