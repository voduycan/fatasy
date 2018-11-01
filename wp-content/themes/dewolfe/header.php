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

</head>

<body <?php body_class(); ?>>
<div class="container">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">
				<img src="<?php bloginfo('template_url'); ?>/data/image/svg/logo_white.svg">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<img src="<?php bloginfo('template_url'); ?>/data/image/svg/menu.svg">
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ">
				  <li class="nav-item active">
				    <a class="nav-link" href="<?php bloginfo('url'); ?>/home">home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="<?php bloginfo('url'); ?>/product">products</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="<?php bloginfo('url'); ?>/faq">faq / about us</a>
				  </li>
				  
				</ul>
			</div>
		</nav>
	</header>