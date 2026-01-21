<?php
	/**
	 * Title: Templates 404
	 * Slug: relyo/template-404
	 * Categories: relyo-extra
	 */

?>
<!-- wp:group {"tagName":"main","align":"full","style":{"border":{"width":"0px","style":"none"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group alignfull" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"80px","bottom":"80px"}}},"backgroundColor":"foreground-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:0;padding-bottom:80px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"140px","fontStyle":"normal","fontWeight":"600","lineHeight":"1"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:140px;font-style:normal;font-weight:600;line-height:1">
<?php
	esc_html_e( '404', 'relyo' );
?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"large"} -->
<p class="has-text-align-center has-heading-color-color has-text-color has-link-color has-large-font-size">
<?php
	esc_html_e( 'OOPS! Page Not Found!', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"backgroundColor":"light-color","textColor":"foreground","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-foreground-color has-light-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Helpful Link', 'relyo' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="line-height:1.5">
<?php
	esc_html_e( 'Something went wrong! We couldn’t find the page you were looking for. But don’t worry, we’ve got some other Links that might be helpful:', 'relyo' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

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

<!-- wp:categories {"style":{"typography":{"lineHeight":"2"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Posts', 'relyo' );
?>
</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":22,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->