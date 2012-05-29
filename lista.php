<?php
/**
 * Template Name: Lista
 *
 * @package WordPress
 * @subpackage Nautica
 * @since Nautica 1.0
 */

get_header(); ?>

<div class="row">
<div class="span8 pull-right">

					<?php if ( is_front_page() ) { ?>
						<h1 class="naslov">Aktuelno</h1>
					<?php } else { ?>	
						<h1 class="naslov"><?php the_title(); ?></h1>
					<?php } ?>	

<?php the_content(); ?>


</div><!-- /span8 pull-right -->
<div class="span4 pull-left">
<?php get_sidebar(); ?>
</div><!-- /span4 pull-left -->
</div><!-- /row -->
<?php get_footer(); ?>