<?php
/**
 * Title: Hero with titles set against a black background, and an image overlapping it from above
 * Slug: abisko/hero-bg-image-above
 * Categories: abisko, abisko-hero
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40"}}},"textColor":"background","gradient":"foreground-color-bottom","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-color-bottom-gradient-background has-text-color has-background"
		style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:image {"align":"wide","id":26311,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image alignwide size-large"><img
				src="http://localhost:8888/utsikt/wp-content/uploads/2023/03/abisko-bg-1024x768.jpg" alt=""
				class="wp-image-26311" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained","contentSize":"1256px"}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background"
		style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
			<!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><strong>The Time is Now</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Make a Change</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size">This block is calling you to action! It is time to buy something,
						read something, contact someone or whatever else this section is asking you to do.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->