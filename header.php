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
<div class="span12 slides">
<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("aktuelno", "" ); } ?>
</div>
</div><!-- /row -->

<div class="row secondary-menu">
	<div class="table-center">

<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>


</div>
	</div>