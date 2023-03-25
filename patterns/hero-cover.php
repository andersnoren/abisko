<?php
/**
 * Title: Hero with cover image and a large title
 * Slug: abisko/hero-cover
 * Categories: abisko, abisko-hero
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png","dimRatio":0,"overlayColor":"foreground","minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","align":"wide"} -->
<div class="wp-block-cover alignwide" style="min-height:75vh"><span aria-hidden="true"
		class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1} -->
				<h1 class="wp-block-heading has-text-align-center">Hero Title</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size">And a subtitle, for good measure.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->