<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="row">
<div class="span8 pull-right">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<?php if ( is_front_page() ) { ?>
						<h1 class="naslov">Aktuelno</h1>
					<?php } else { ?>	
						<h1 class="naslov"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="sadrzaj">
						<div class="strane-wrap">
						<?php the_content(); ?>
						
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
					</div><!--/strane-wrap-->
					</div><!--/sadrzaj-->
					
				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

</div><!-- /span8 pull-right -->
<div class="span4 pull-left">
<?php get_sidebar(); ?>
</div><!-- /span4 pull-left -->
</div><!-- /row -->
<?php get_footer(); ?>