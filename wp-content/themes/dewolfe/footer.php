<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer>
	<div class="row">
		<div class="col-12 col-sm-3 footer-logo">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/data/image/png/logo_navy.png"></a>
			<a class="email" href="mailto:edu@dewolfe.io">edu@dewolfe.io</a>
			
		</div>
		<div class="col-12 col-sm-6 menu d-flex">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/home">home</a></li>
				<li><a href="<?php bloginfo('url'); ?>/product">products</a></li>
				<li><a href="<?php bloginfo('url'); ?>/faq">faq / about us</a></li>
			</ul>
			
		</div>
		<div class="col-12 col-sm-3 social d-flex">
			<a href="#"><span class="icon-facebook"></span></a>
			<a href="#"><span class="icon-twitter"></span></a>
			<a href="#"><span class="icon-instagram"></span></a>
		</div>
		<div class="col-12 col-sm-12 copy-right">
			<p>copyright <span class="icon-copyright"></span> 2018. dewolfe all right reseved</p>
		</div>

	</div>
</footer>
</div>
<!-- Boostrap -->
<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/data/bootstrap/js/popper.min.js"></script>	

<!-- Slick -->
<script src="<?php bloginfo('template_url'); ?>/data/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/data/js/slick_slider.js"></script>	

<?php wp_footer(); ?>

</body>
</html>
