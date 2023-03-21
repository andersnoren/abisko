<?php
/**
 * Title: Two column featured items grid with title, text, and button set against a cover image
 * Slug: abisko/general-featured-items-gradients
 * Categories: abisko, abisko-general
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png","dimRatio":0,"overlayColor":"background","minHeight":60,"minHeightUnit":"vh","contentPosition":"bottom center","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"
			style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:60vh"><span
				aria-hidden="true"
				class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span><img
				class="wp-block-cover__image-background" alt=""
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" data-object-fit="cover" />
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40"}}},"gradient":"foreground-fade-to-top","layout":{"type":"default"}} -->
				<div class="wp-block-group has-foreground-fade-to-top-gradient-background has-background"
					style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"textAlign":"center","level":3,"className":"is-style-default","fontSize":"heading-5"} -->
					<h3 class="wp-block-heading has-text-align-center is-style-default has-heading-5-font-size">Make a
						change</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">This block is calling you to action! It is time to buy something,
						read something, contact someone or whatever else this section is asking you to do.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
						<div class="wp-block-button"><a
								class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Read
								more</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png","dimRatio":0,"overlayColor":"background","minHeight":60,"minHeightUnit":"vh","contentPosition":"bottom center","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"
			style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:60vh"><span
				aria-hidden="true"
				class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span><img
				class="wp-block-cover__image-background" alt=""
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" data-object-fit="cover" />
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40"}}},"gradient":"foreground-fade-to-top","layout":{"type":"default"}} -->
				<div class="wp-block-group has-foreground-fade-to-top-gradient-background has-background"
					style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"textAlign":"center","level":3,"className":"is-style-default","fontSize":"heading-5"} -->
					<h3 class="wp-block-heading has-text-align-center is-style-default has-heading-5-font-size">Make a
						change</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">This block is calling you to action! It is time to buy something,
						read something, contact someone or whatever else this section is asking you to do.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
						<div class="wp-block-button"><a
								class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Read
								more</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->