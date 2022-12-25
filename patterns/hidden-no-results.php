<?php
/**
 * Title: Hidden No Results Content
 * Slug: smntcs-vt100/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'smntcs-vt100' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'smntcs-vt100' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'smntcs-vt100' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'smntcs-vt100' ); ?>","buttonUseIcon":true} /-->
