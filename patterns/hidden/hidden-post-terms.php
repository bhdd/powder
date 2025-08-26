<?php
/**
 * Title: Post terms
 * Slug: [themeslug]/post-terms
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","style":{"spacing":{"blockGap":"0px"}},"className":"entry-footer","layout":{"type":"constrained"}} -->
<footer class="wp-block-group entry-footer">
	<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html__( 'In:', '[themeslug]' ); ?> "} /-->
	<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html__( 'Tags:', '[themeslug]' ); ?> "} /-->
</footer>
<!-- /wp:group -->
