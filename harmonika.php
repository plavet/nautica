<?php
/**
 * Template Name: Harmonika
 *
 * @package WordPress
 * @subpackage Nautica
 * @since Nautica 1.0
 */

get_header(); ?>

<div class="row">
<div class="span8 pull-right">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h1 class="naslov">Aktuelno</h1>
					<?php } else { ?>
					
					<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>

					<?php } ?>				
	<!-- Sekcija `armonika -->
	<div id="armonika-kutija">
						<?php the_content(); ?>
  </div><!-- /armonika-kutija -->
	<!-- /Sekcija `armonika -->						
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

</div><!-- /span8 pull-right -->
<div class="span4 pull-left">
<?php get_sidebar(); ?>
</div><!-- /span4 pull-left -->
</div><!-- /row -->
<?php get_footer(); ?>