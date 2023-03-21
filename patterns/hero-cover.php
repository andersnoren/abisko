<?php
/**
 * Title: Hero with cover image and a large title
 * Slug: abisko/hero-cover
 * Categories: abisko, abisko-hero
 */
?>
<!-- wp:cover {"url":"http://localhost:8888/utsikt/wp-content/uploads/2023/03/abisko-bg.jpg","id":26311,"dimRatio":0,"overlayColor":"foreground","minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","align":"wide"} -->
<div class="wp-block-cover alignwide" style="min-height:75vh"><span aria-hidden="true"
		class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background wp-image-26311" alt=""
		src="http://localhost:8888/utsikt/wp-content/uploads/2023/03/abisko-bg.jpg" data-object-fit="cover" />
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