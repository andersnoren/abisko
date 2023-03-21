<?php
/**
 * Title: Image gallery in a collage layout
 * Slug: abisko/media-gallery-messy
 * Categories: abisko, abisko-media
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"10vw","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"10vw"}}} -->
	<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"5%"} -->
			<div class="wp-block-column" style="flex-basis:5%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"linkDestination":"none"} -->
				<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" alt=""/><figcaption class="wp-element-caption">This is an image.</figcaption></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"55%"} -->
			<div class="wp-block-column" style="flex-basis:55%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"linkDestination":"none"} -->
				<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-1x1.png" alt=""/><figcaption class="wp-element-caption">An image, this is.</figcaption></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:image {"linkDestination":"none"} -->
				<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-3x4.png" alt=""/><figcaption class="wp-element-caption">Here, we have another image.</figcaption></figure>
				<!-- /wp:image -->
				
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"10%"} -->
			<div class="wp-block-column" style="flex-basis:10%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->