<?php
/**
 * Title: Header
 * Slug: bts/header
 * Description: Header with site logo and navigation.
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","right":"24px","left":"24px"},"margin":{"top":"0px"}},"position":{"type":"sticky","top":"0px"}},"className":"site-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header" style="margin-top:0px;padding-top:32px;padding-right:24px;padding-bottom:32px;padding-left:24px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":49,"width":60,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="/"><img src="<?php echo get_theme_file_uri( 'assets/images/logo.png' ); ?>" alt="" class="wp-image-49" width="60"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"ref":26} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
