<?php
/**
 * Title: Chapter heading with title and intro text set against a cover image
 * Slug: abisko/hero-chapter-heading
 * Categories: abisko, abisko-hero
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png","dimRatio":0,"contentPosition":"center center","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}}} -->
<div class="wp-block-cover alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span
		aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:cover {"dimRatio":50,"minHeight":40,"minHeightUnit":"vh","gradient":"foreground-fade-to-bottom","contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"top":"6vw","right":"6vw","bottom":"6vw","left":"6vw"}}}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-top-left"
			style="padding-top:6vw;padding-right:6vw;padding-bottom:6vw;padding-left:6vw;min-height:40vh"><span
				aria-hidden="true"
				class="wp-block-cover__background has-background-dim has-background-gradient has-foreground-fade-to-bottom-gradient-background"></span>
			<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group"><!-- wp:heading {"textColor":"background"} -->
					<h2 class="wp-block-heading has-background-color has-text-color">Chapter heading</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->

		<!-- wp:cover {"dimRatio":50,"minHeight":40,"minHeightUnit":"vh","gradient":"foreground-fade-to-top","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"6vw","right":"6vw","bottom":"6vw","left":"6vw"}}}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
			style="padding-top:6vw;padding-right:6vw;padding-bottom:6vw;padding-left:6vw;min-height:40vh"><span
				aria-hidden="true"
				class="wp-block-cover__background has-background-dim has-background-gradient has-foreground-fade-to-top-gradient-background"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"textColor":"background","fontSize":"large"} -->
					<p class="has-background-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet,
						consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
</div>
<!-- /wp:cover -->