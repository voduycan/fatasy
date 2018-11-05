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
			<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo_footer', 'options');?>"></a>
			<a class="email" href="mailto:edu@dewolfe.io"><?php the_field('email', 'options'); ?></a>
			
		</div>
		<div class="col-12 col-sm-6 menu d-flex">
			<ul>
				<?php 
	                 $menuLocations = get_nav_menu_locations(); 
	                 $menuID = $menuLocations['main-nav']; 
	                 $primaryNav = wp_get_nav_menu_items($menuID); 
	                
	                
	                foreach ( $primaryNav as $navItem ) {
	                  echo '<li class="nav-item"> 
	                            <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 

	                        </li>';
	                }
             	?>
			</ul>
			
		</div>
		<div class="col-12 col-sm-3 social d-flex">
			<a target="_blank" href="<?php the_field('facebook', 'options'); ?>"><span class="icon-facebook"></span></a>
			<a target="_blank" href="<?php the_field('twitter', 'options'); ?>"><span class="icon-twitter"></span></a>
			<a target="_blank" href="<?php the_field('instagram', 'options'); ?>"><span class="icon-instagram"></span></a>
		</div>
		<div class="col-12 col-sm-12 copy-right">
			<p><?php the_field('copy_right', 'options'); ?><span class="icon-copyright"></span><?php the_field('reseved', 'options'); ?></p>
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
