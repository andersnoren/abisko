<?php
/**
 * Title: Cover image with a content box set against background blur on one side
 * Slug: abisko/general-cover-with-blurred-content-box
 * Categories: abisko, abisko-general
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png","hasParallax":true,"dimRatio":0,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull has-parallax"
	style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true"
		class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<div role="img" class="wp-block-cover__image-background has-parallax"
		style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png)">
	</div>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:cover {"dimRatio":0,"overlayColor":"background","minHeight":366,"minHeightUnit":"px","isDark":false} -->
				<div class="wp-block-cover is-light" style="min-height:366px"><span aria-hidden="true"
						class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
					<div class="wp-block-cover__inner-container">
						<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
						<p class="has-text-align-center has-large-font-size"></p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:cover {"overlayColor":"background","minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"className":"is-style-abisko-bg-blur","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-cover is-light is-style-abisko-bg-blur"
					style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:75vh">
					<span aria-hidden="true"
						class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span>
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"textColor":"background","layout":{"type":"constrained","contentSize":"448px"}} -->
						<div class="wp-block-group has-background-color has-text-color"
							style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"fontSize":"heading-5"} -->
							<h3 class="wp-block-heading has-heading-5-font-size">About Abisko</h3>
							<!-- /wp:heading -->

							<!-- wp:paragraph -->
							<p>Abisko is named after Abisko National Park, which is located 200 km north of the Arctic
								circle in the Swedish province Lapland. It’s one of my favorite places on this earth.
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>I’m grateful for many things. One of the big ones is that I’ve been able to visit Abisko
								every year for the last three years. I’ll be back this August during a two month hike
								through the Swedish mountains.</p>
							<!-- /wp:paragraph -->

							<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
							<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
								<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
								<div class="wp-block-button"><a
										class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Read
										More</a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->