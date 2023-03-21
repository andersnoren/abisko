<?php
/**
 * Title: Contact section with details to the left and image to the right
 * Slug: abisko/general-contact-details-image
 * Categories: abisko, abisko-general
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"330px"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"700"}},"fontSize":"heading-5"} -->
				<h2 class="wp-block-heading has-heading-5-font-size"
					style="font-style:normal;font-weight:700;text-transform:none">Contact us</h2>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:paragraph -->
					<p>123 Columbia St, Brooklyn, NY<br>12345, United States</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Phone: +12345678900<br>Email: <a href="mailto:example@example.com">example@example.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#FFF","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#111","size":"has-normal-icon-size","className":"is-style-default"} -->
			<ul
				class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default">
				<!-- wp:social-link {"url":"https://tumblr.com","service":"tumblr"} /-->

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"linkDestination":"none"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-1x1.png" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->