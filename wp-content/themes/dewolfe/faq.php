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
        <?php if( have_rows('images_s1_f')): $n = 0; ?>
            <div class="carousel-inner">
                <?php while( have_rows('images_s1_f') ): the_row();
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
    <?php $group = get_field('group_s1_f'); 
        if($group):
    ?>

        <div class="caption">
            <div class="cap">
                <h1><?php echo $group['title_f']; ?></h1>
                <?php the_field('text_s1_f', $post->ID); ?>
                <button class="btn btn-blue"><?php echo $group['button_f']; ?></button>
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
	<h2><?php the_field('title_section', $post->ID); ?></h2>

    <?php if( have_rows('topic') ): $x = 0; ?>

	   <ul>
            <?php while( have_rows('topic') ): the_row(); 
            // vars
            $title = get_sub_field('title');
            $x++;
            ?>
             <li>
                <?php if( have_rows('questions') ): $count = 0;?>
                    <?php while( have_rows('questions') ): the_row(); 
                        $count++;
                    ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <h4><?php echo $title; ?> (<?php echo $count; ?>)</h4>

                <?php if( have_rows('questions') ): $z = 0; ?>
                    <?php while( have_rows('questions') ): the_row(); 
                        // vars
                        $ask = get_sub_field('ask');
                        $answer = get_sub_field('answer');
                        $z++;

                    ?>
                    <div class="group">
                        <button class="btn-collapse" type="button" data-toggle="collapse" data-target="#collapseExample-<?php echo $x; ?><?php echo $z; ?>" aria-expanded="false" aria-controls="collapseExample">
                            <?php echo $ask; ?>
                            <span class="icon-bottom"></span>
                        </button>
                        <div class="collapse" id="collapseExample-<?php echo $x; ?><?php echo $z; ?>">
                          <div class="card card-body">
                            <?php echo $answer; ?>
                          </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                
             </li> 
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>


       
	
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