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
		<div class="col-6 col-sm-4 footer-logo">
			<img src="<?php bloginfo('template_url'); ?>/data/image/slide1.jpg">
			<p>coppy right @ 2018. dewolfe</p>
			<p>all right reseved</p>
		</div>
		<div class="col-6 col-sm-5 menu">
			<span>home</span>
			<span>companies</span>
			<span>winter camp product</span>
		</div>
		<div class="col-6 col-sm-3 social">
			<span>social</span>
			<img src="<?php bloginfo('template_url'); ?>/data/image/slide1.jpg">
			<img src="<?php bloginfo('template_url'); ?>/data/image/slide1.jpg">
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
