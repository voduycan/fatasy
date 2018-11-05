<?php
/**
* Template Name: home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

?>
<?php  get_header(); ?>

<!-- Top Panel - Blockchain winter camp -->
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="caption d-none d-md-block">
        <h1><?php the_field('title_s1', $post->ID); ?></h1>
        <p><?php the_field('text_s1', $post->ID); ?></p>
        <button class="btn"><?php the_field('button_s1', $post->ID); ?></button>
    </div>

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
               
        <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php for ($i=1; $i < $n; $i++): ?> 
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
            <?php endfor; ?>
        </ol>	
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <button id="scroll-down"><span><?php the_field('scroll_down_s1', $post->ID); ?></span></button>
</section>
<!-- End Top panel -->

<!-- Our client -->
<section class="our-client">
    <h2><?php the_field('taught_s2', $post->ID); ?></h2>
    <?php if( have_rows('taught_logo_s2')): ?>
        <?php while( have_rows('taught_logo_s2')): the_row();
            // vars
            $logo = get_sub_field('logo');
        ?>
        <img class="taught" src="<?php echo($logo); ?>" alt="">
        <?php endwhile; ?>
    <?php endif; ?>

    <h2><?php the_field('client_s2', $post->ID); ?></h2>

    <?php if( have_rows('client_logo_s2')): ?>
        <?php while( have_rows('client_logo_s2')): the_row();
            // vars
            $logo = get_sub_field('logo');
        ?>
        <img class="client" src="<?php echo($logo); ?>" alt="">
        <?php endwhile; ?>
    <?php endif; ?>

</section>
<!-- End Our client -->

<!-- Our Camp -->
<section class="our-camp">
    <div class="title">
        <h2><?php the_field('title_s3', $post->ID); ?></h2>
        <p><?php the_field('text_s3', $post->ID); ?></p>
    </div>
    <?php if( have_rows('card_s3')): ?>
        <div class="card-deck">
            <?php while( have_rows('card_s3')): the_row();
                // vars
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $text = get_sub_field('text');
            ?>
        
                <div class="card">
                    <div class="card-img-top" style="background-image: url('<?php echo($image); ?>">
                        <div class="background-opacity"></div>
                        <h2><?php echo($title); ?></h2>
                    </div>

                    <div class="card-body">
                        <?php echo($text); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<!-- End Our Camp -->

<!-- Testimonials -->
<section class="testimonials">
    <img  class="background" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-elip.png">
    <h2><?php the_field('title_s4', $post->ID); ?></h2>

    <?php if( have_rows('slide_s4')): ?>
        <div class="autoplay slider">
            <?php while( have_rows('slide_s4')): the_row();
                // vars
                $avarta = get_sub_field('avarta');
                $about = get_sub_field('about');
                $name = get_sub_field('name');
                $company = get_sub_field('company');
            ?>
                <div>
                    <div class="row d-flex">
                        <div class="col-12 col-sm-5 px-4">
                            <div class="elip">
                                <div class="elip-big">
                                    <div class="elip-small">
                                        <div class="img-bg" style="background-image: url('<?php echo($avarta); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-sm-1 col-sm-6 cap">
                            <p><?php echo($about); ?></p>
                            <h3><?php echo($name); ?></h3>
                            <span><?php echo($company); ?></span>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<!-- End Testimonials -->

<!-- Journey -->
<section class="journey" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-jouney.png'), url('<?php the_field('background_big_s5', $post->ID); ?>')">
    <div class="over-lay"></div>
    <div class="row d-flex">
        <div class="col-12 col-sm-6 text">
            <h2><?php the_field('title_s5', $post->ID); ?></h2>
            <?php the_field('text_s5', $post->ID); ?>
            <div class="button">
                <button class="btn btn-blue"><?php the_field('apply_button_s5', $post->ID); ?></button>
                <button class="btn btn-light"><?php the_field('learn_button_s5', $post->ID); ?></button>
            </div>
        </div>
        <div class="col-12 col-sm-6 image" style="background-image: url('<?php the_field('image_s5', $post->ID); ?>');">
        </div>
    </div>
</section>
<!-- End Journey -->
<?php  get_footer(); ?>

