<?php
/**
 * Title: Default Query
 * Slug: bts/query
 * Description: Query of posts in stack view.
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
<div class="wp-block-query">
<!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-group">
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"bottom":"24px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-bottom:24px">
<!-- wp:post-date /-->
<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->
<!-- wp:post-author-name {"isLink":true} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:post-excerpt {"moreText":"Read More"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
