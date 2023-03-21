<?php
/**
 * Title: Cover image with an overlapping heading in the top
 * Slug: abisko/media-image-overlapping-heading-top
 * Categories: abisko, abisko-media
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png","dimRatio":0,"contentPosition":"center center","align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span
		aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:cover {"minHeight":75,"minHeightUnit":"vh","gradient":"bg-color-top-half-lh","contentPosition":"top center","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"heading-1"} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-top-center has-heading-1-font-size"
			style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:75vh"><span
				aria-hidden="true"
				class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-bg-color-top-half-lh-gradient-background"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foreground"} -->
				<h1 class="wp-block-heading has-text-align-center has-foreground-color has-text-color"
					style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Art &amp; Code</h1>
				<!-- /wp:heading -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
</div>
<!-- /wp:cover -->