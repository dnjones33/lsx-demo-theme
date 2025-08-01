<?php
/**
 * Title: Pricing, 2 columns
 * Slug: lsx-demo-theme/pricing-2-col
 * Categories: call-to-action
 * Viewport width: 1400
 * Description: Pricing section with two columns, pricing plan, description, and call-to-action buttons.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since lsx-demo-theme 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","align":"wide"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Pricing', 'lsx-demo-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Cancel or pause anytime.', 'lsx-demo-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading" id="free"><?php esc_html_e( 'Free', 'lsx-demo-theme' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '0€', 'lsx-demo-theme' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list is-style-checkmark-list has-small-font-size">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Join our IRL events.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Get a free tote bag.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Join our forums.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'lsx-demo-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}},"layout":{"type":"default"}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading" id="single"><?php echo esc_html_x( 'Single', 'Name of membership package.', 'lsx-demo-theme' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '20€/month', 'lsx-demo-theme' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list is-style-checkmark-list has-small-font-size">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Join our IRL events.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Get a free tote bag.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Join our forums.', 'lsx-demo-theme' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'lsx-demo-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
