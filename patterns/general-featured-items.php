<?php
/**
 * Title: Three column featured items grid with image, title, text, and button
 * Slug: abisko/general-featured-items
 * Categories: abisko, abisko-general
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"
			style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3,"fontSize":"heading-5"} -->
			<h3 class="wp-block-heading has-heading-5-font-size">My Story</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Learn how I became an artist, and how I developed this particular style.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read
						more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"
			style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3,"fontSize":"heading-5"} -->
			<h3 class="wp-block-heading has-heading-5-font-size">Get in Touch</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Want to show my art in your gallery? Send me an email and we’ll chat.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Say
						hi</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/gray-4x3.png" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"
			style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3,"fontSize":"heading-5"} -->
			<h3 class="wp-block-heading has-heading-5-font-size">Follow Me</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Love my work? Follow me online to see new paintings first.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link wp-element-button">Social</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->