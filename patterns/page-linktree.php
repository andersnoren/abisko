<?php
/**
 * Title: Linktree-esque page layout with a profile picture, name, description, buttons and social icons
 * Slug: abisko/page-linktree
 * Categories: abisko, abisko-page
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png","dimRatio":50,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/black-4x3.png" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"400px"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","width":96,"height":96,"linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/avatar-white.png" alt="" width="96" height="96" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"700"}},"fontSize":"heading-5"} -->
					<h2 class="wp-block-heading has-text-align-center has-heading-5-font-size" style="font-style:normal;font-weight:700;text-transform:none">Your Name</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">A short description of you.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"background","textColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Read my Blog</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"background","textColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Browse my store</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"background","textColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button">Watch my channel</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#111","iconBackgroundColor":"background","iconBackgroundColorValue":"#FFF","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
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
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->