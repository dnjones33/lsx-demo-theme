<?php
/**
 * Title: Right-aligned 404
 * Slug: lsx-demo-theme/template-404-vertical-header-blog
 * Template Types: 404
 * Viewport width: 1400
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since lsx-demo-theme 1.0
 */

?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:column {"width":"8rem"} -->
	<div class="wp-block-column" style="flex-basis:8rem">
		<!-- wp:template-part {"slug":"vertical-header"} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:90%">
		<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
		<main class="wp-block-group">
			<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:pattern {"slug":"lsx-demo-theme/hidden-404"} /-->

			<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</main>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer"} /-->
