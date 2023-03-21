<?php
/**
 * Title: Image gallery with an info box to the left
 * Slug: abisko/media-gallery-with-info-box-left
 * Categories: abisko, abisko-media
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"10%"} -->
	<div class="wp-block-column" style="flex-basis:10%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
	<div class="wp-block-column is-vertically-aligned-bottom">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"382px"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-5"} -->
				<h3 class="wp-block-heading has-heading-5-font-size">Nuolja</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Nuolja (sapmi Njullá) is a mountain on the edge of Abisko National Park. Its highest point is 1169
					meters above sea level.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read
						more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"10vw"}}}} -->
	<div class="wp-block-column" style="padding-bottom:10vw">
		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-3x4.png" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"10%"} -->
	<div class="wp-block-column" style="flex-basis:10%"></div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->