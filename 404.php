<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="row">
<div class="span8 pull-right">


				<h1 class="naslov"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<p style="padding-left:20px;"><?php _e( 'Apologies, but the page you requested could not be found. ', 'twentyten' ); ?></p>
				<?php //get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

</div><!-- /span8 pull-right -->
<div class="span4 pull-left">
<?php get_sidebar(); ?>
</div><!-- /span4 pull-left -->
</div><!-- /row -->
<?php get_footer(); ?>