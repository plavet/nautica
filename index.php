<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="row">
<div class="span8 pull-right">

<?php if ( is_front_page() ) { ?>
  <h1 class="naslov">Aktuelno</h1>
<?php } elseif ( is_page() ) { ?>   
  <h2 class="naslov"><?php the_title(); ?></h2>
<?php } else { ?>

<?php } ?>
<div class="aktuelno-wrap">
<div class="row aktuelno-promo">

<div class="promo-wrap">
<div class="span2 goga-logo">
	<img src="<?php bloginfo('template_url'); ?>/images/goga-logo-aktuelno.png" />
</div>
<div class="span6 links">
	<ul id="cenovnik">
		<li><a href="#" title="Cenovnik usluga 2012. godina">Cenovnik usluga 2012. godina</a></li>
		<li><a href="#" title="Katalog novih plovila - maj 2012.">Katalog novih plovila - maj 2012.</a></li>
		<li><a href="#" title="Katalog polovnih plovila - maj 2012.">Katalog polovnih plovila - maj 2012.</a></li>
	</ul><!-- / -->
</div>
</div><!-- /promo-wrap -->
</div><!-- /row -->
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
		</div><!--/aktuelno-wrap-->
</div><!-- /span8 pull-right -->
<div class="span4 pull-left">
<?php get_sidebar(); ?>
</div><!-- /span4 pull-left -->
</div><!-- /row -->
<?php get_footer(); ?>