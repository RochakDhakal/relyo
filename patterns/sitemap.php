<?php
	/**
	 * Title: Sitemap
	 * Slug: relyo/sitemap
	 * Categories: relyo-extra
	 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"26px","right":"26px"},"blockGap":"0"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:26px;padding-bottom:80px;padding-left:26px"><!-- wp:heading {"textAlign":"center","fontSize":"giga"} -->
<h2 class="wp-block-heading has-text-align-center has-giga-font-size">
<?php
	esc_html_e( 'Sitemap', 'relyo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
<div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"black-color"} -->
<div class="wp-block-column has-black-color-color has-text-color has-link-color"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Pages', 'relyo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:page-list {"className":"is-style-relyo-page-list-bullet-hide-style is-style-relyo-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Categories', 'relyo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:categories {"className":"is-style-relyo-categories-bullet-hide-style is-style-relyo-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Posts', 'relyo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":22,"query":{"perPage":"20","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->