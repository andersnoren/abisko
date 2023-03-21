<?php
/**
 * Title: Call to action with titles, text, button, and an image to the left
 * Slug: abisko/cta-titles-with-image-left
 * Categories: abisko, abisko-cta
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-3x4.png" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default">
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
			<p class="has-large-font-size">We’re calling you to action! It is time to buy something, read something, or
				whatever else this section is asking of you.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read
						More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->