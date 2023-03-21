<?php
/**
 * Title: Hero with background color, titles and an image
 * Slug: abisko/hero-bg-titles-image
 * Categories: abisko, abisko-hero
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"gradient":"bg-color-bottom","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-bg-color-bottom-gradient-background has-background"
	style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><strong>The Time is Now</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Make a Change</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"660px","justifyContent":"left"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size">We’re calling you to action! It is time to buy something, read something,
					or whatever else this section is asking of you.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a
							class="wp-block-button__link wp-element-button">Read More</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"33%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33%">
			<!-- wp:image {"linkDestination":"none"} -->
			<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-3x4.png" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->