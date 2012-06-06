<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/engine.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="wrap">
<div class="container">
	<div class="row">
	<div class="span4 main-menu">
<img src="<?php bloginfo('template_url'); ?>/images/goga-logo-header.png" />
<?php // bloginfo( 'description' ); ?>

	<div id="access" role="navigation">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<a class="screen-reader" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
<?php wp_nav_menu( array('theme_location' => 'primary-menu' ) ); ?>

	</div><!-- #access -->
</div><!-- /span4 -->

<!--SLIDES-->
<?php if ( is_front_page() ) { ?>
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("aktuelno", "" ); } ?>
   </div>
<?php } elseif ( is_page('kompanija-goga') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("kompanija-goga", "" ); } ?>
   </div>
<?php } elseif ( is_page('lager-novih-plovila') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("lager-novih-plovila", "" ); } ?>
   </div>
<?php } elseif ( is_page('ponuda-polovnih-plovila') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("ponuda-polovnih-plovila", "" ); } ?>
   </div>
<?php } elseif ( is_page('prodaja-plovila') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("prodaja-plovila", "" ); } ?>
   </div>
<?php } elseif ( is_page('prodaja-opreme') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("prodaja-opreme", "" ); } ?>
   </div>
<?php } elseif ( is_page('usluge') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("usluge", "" ); } ?>
   </div>
<?php } elseif ( is_page('sajam') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("sajam", "" ); } ?>
   </div>
<?php } elseif ( is_page('yachting-club-goga') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("yachting-club-goga", "" ); } ?>
   </div>
<?php } elseif ( is_page('kontakt') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("kontakt", "" ); } ?>
   </div>
<?php } elseif ( is_page( array('monterey', 'sport-boats', 'm-series', 'supersports', 'sport-cruisers-yachts')) ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("monterey", "" ); } ?>
   </div>
<?php } elseif ( is_page( array('glastron', 'bowriders', 'ski-fish', 'deck-boats', 'cabin-cruisers')) ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("glastron", "" ); } ?>
   </div>
<?php } elseif ( is_page( array('chris-craft', 'corsair', 'launch', 'catalina', 'future-models')) ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("chris-craft", "" ); } ?>
   </div>
<?php } elseif ( is_page( array('sun-tracker', 'regency-pontoons', 'signature-pontoons', 'classic-pontoons')) ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("sun-tracker", "" ); } ?>
   </div>
<?php } elseif ( is_page('marquis') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("marquis", "" ); } ?>
   </div>
<?php } elseif ( is_page('carver') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("carver", "" ); } ?>
   </div>
<?php } elseif ( is_page('jobe') ) { ?>   
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("jobe", "" ); } ?>
   </div>
<?php } else { ?>
  <div class="span12 slides">
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("aktuelno", "" ); } ?>
   </div>
<?php } ?>
<!--/SLIDES-->

</div><!-- /row -->

<div class="row secondary-menu">
	<div class="table-center">

	<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>

   </div>
</div>