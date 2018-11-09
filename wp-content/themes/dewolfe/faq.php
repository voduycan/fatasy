<?php
/**
 * Template Name: faq
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php  get_header(); ?>
<!-- Top Panel - Blockchain winter camp -->
<section id="carouselExampleIndicators" class="carousel slide product-panel" data-ride="carousel">
  <div class="overflow full-device-width">
        <?php if( have_rows('images_s1')): $n = 0; ?>
            <div class="carousel-inner">
                <?php while( have_rows('images_s1') ): the_row();
                    // vars
                    $image = get_sub_field('image');
                    $n++;
                ?>
                    <div class="carousel-item" id="no-<?php echo($n); ?>" style="background-image: url('<?php echo $image; ?>')">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
               
        
    </div>
    <?php $group = get_field('group_s1'); 
        if($group):
    ?>

        <div class="caption">
            <div class="cap">
                <h1><?php echo $group['title']; ?></h1>
                <?php the_field('text_s1', $post->ID); ?>
                <button class="btn btn-blue"><?php echo $group['button_1']; ?></button>
            </div>
            <ol class="carousel-indicators">
            <?php if($n > 1): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($i=1; $i < $n; $i++): ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor; ?>
            <?php endif; ?>
        </ol> 
        </div>
    <?php endif; ?>

    
    <?php if($n > 1): ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?>
    
</section>
<!-- End Top panel -->
<!-- FAQ -->
<section class="faq">
	<h2>faq</h2>

	<!-- Genaral -->
	<div class="genaral">
		<h3>genarals (6)</h3>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g1" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
                <span class="icon-bottom"></span>
			</button>
			<div class="collapse" id="collapseExample-g1">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g2" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-g2">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g3" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-g3">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g4" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-g4">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g5" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-g5">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-g6" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-g6">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
	</div>
	<!-- End Genaral -->
	<!-- Application -->
	<div class="genaral">
		<h3>the application process (9)</h3>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-a1" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-a1">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-a2" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-a2">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
	</div>
	<!-- End Application -->
	<!-- travel -->
	<div class="genaral">
		<h3>the application process (9)</h3>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-t1" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-t1">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
		<div class="group">
			<button class="my-btn" type="button" data-toggle="collapse" data-target="#collapseExample-t2" aria-expanded="false" aria-controls="collapseExample">
				Button with data-target
			</button>
			<div class="collapse" id="collapseExample-t2">
			  <div class="card card-body">
			    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			  </div>
			</div>
		</div>
	</div>
	<!-- End travel -->
</section>

<!-- Journey -->
<section class="journey" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-jouney.png'), url('<?php the_field('background_big_s5', $post->ID); ?>')">

  <?php $group = get_field('group_s5'); 
        if($group):
    ?>
    <div class="over-lay"></div>
    <div class="row">
        <div class="col-12 col-sm-6 text">
            <h2><?php echo $group['title_s5']; ?></h2>
            <?php the_field('text_s5', $post->ID); ?>
            <div class="button">
                <button class="btn btn-blue"><?php echo $group['apply_button_s5']; ?></button>
                <a target="_blank" href="<?php echo $group['learn_button_link_s5']; ?>" class="btn btn-light"><?php echo $group['learn_button_s5']; ?></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 image" style="background-image: url('<?php the_field('image_s5', $post->ID); ?>');">
        </div>
    </div>
  <?php endif; ?>
</section>
<!-- End Journey -->
<?php  get_footer(); ?>