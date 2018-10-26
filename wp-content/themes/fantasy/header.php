<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/data/bootstrap/css/bootstrap.min.css">
<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/bootstrap.min.js"></script>

<!-- Slick -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/data/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/data/slick/slick-theme.css">

<!-- Custom Css -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/data/scss/main.css">

<style type="text/css">
	    html, body {
	      margin: 0;
	      padding: 0;
	    }

	    * {
	      box-sizing: border-box;
	    }

	    .slider {
	        width: 50%;
	        margin: 100px auto;
	    }

	    .slick-slide {
	      margin: 0px 20px;
	    }

	    .slick-slide img {
	      width: 100%;
	    }

	    .slick-prev:before,
	    .slick-next:before {
	      color: black;
	    }


	    .slick-slide {
	      transition: all ease-in-out 0.3s;
	      opacity: 0.2;
	    }
	    
	    .slick-active {
	      opacity: 0.5;
	    }

	    .slick-current {
	      opacity: 1;
	    }
  	</style>

</head>

<body <?php body_class(); ?>>
