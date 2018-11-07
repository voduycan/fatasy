<?php
/**
 * Template Name: product
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php  get_header(); ?>
<!-- Top Panel - Blockchain winter camp -->
<section id="carouselExampleIndicators" class="carousel slide product-panel" data-ride="carousel">
    <?php $group = get_field('group_s1'); 
        if($group):
    ?>

        <div class="caption">
            <h1><?php echo $group['title']; ?></h1>
            <?php the_field('text_s1', $post->ID); ?>
            <button class="btn btn-light"><?php echo $group['button_1']; ?></button>
            <button class="btn btn-blue"><?php echo $group['button_2']; ?></button>
        </div>
    <?php endif; ?>

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
            <?php if($n > 1): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($i=1; $i < $n; $i++): ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endfor; ?>
            <?php endif; ?>
        </ol> 
    </div>
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

<!-- Slide -->
<section class="curriculum text-center">
  <h2>A curriculum specifically focused on real-life application.</h2>
  <p class="text">We blend intense yet immersive learning with real-life experience. That is the only way you can have both the knowledge and skill set to excel as a professional.</p>
  <div class="foundation slider">
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php bloginfo('template_url'); ?>/data/image/png/section 2_blockchain.png" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php bloginfo('template_url'); ?>/data/image/png/section 2_ethereum.png" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php bloginfo('template_url'); ?>/data/image/png/section 2_develop.png" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php bloginfo('template_url'); ?>/data/image/png/section 2_advanced.png" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-img-top">
          <img src="<?php bloginfo('template_url'); ?>/data/image/png/section 2_ethereum.png" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-blue">request detailed curriculum</button>
</section>
<!-- End Slide -->
<!-- Blockchain -->
<section class="blockchain text-center">
 <img class="bg-img" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-blue.png">
  <h2><?php the_field('title_s3', $post->ID) ?></h2>
  <div class="row d-flex">
    <div class="col-12 col-sm-5 col-md-5">
      <div class="video">
        <div class="background" style="background-image: url('<?php the_field('image_s3', $post->ID) ?>');">
          <div class="play-button d-flex">
            <img src="<?php bloginfo('template_url'); ?>/data/image/png/play-button.png">
          </div>
        </div>
        <div class="play-video d-none"></div>
      </div>
    </div>
    <div class="col-12 offset-sm-0 offset-md-1 col-sm-7 col-md-6 text-left">
      <p><?php the_field('text_s3', $post->ID) ?></p>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      var loading = '<img id="loading-img" width="30" height="30" alt="loading" src="<?php bloginfo('template_url'); ?>/data/image/svg/loading.svg"/>';
      $('.play-button').click(function(){

          $.ajax({
                type : 'post',
                url : '<?php echo admin_url('admin-ajax.php'); ?>',
                dataType : 'json',
                data : {
                    action : 'playvideo',
                    id : <?php echo $post->ID; ?>,
                },
                beforeSend : function(){
                    $('.play-button').css('background','none');
                    $('.play-button').html(loading);
                }, 
                success : function(result){
                  $('.background').addClass('d-none');
                  var vt = result.indexOf('?');
                  var src = result.slice(0,vt+1) + 'autoplay=1&muted=1' + result.slice(vt+1);
                    $('.play-video').append(src);
                    $('.play-video').removeClass('d-none');
                },
                 error: function(jqXHR,textStatus,errorThrown){
                    console.log('The following error occured: ' + textStatus, errorThrown);
                },
           });
        });
    });
  </script>
</section>
<!-- End Blockchain -->
<!-- our staff -->
<section class="our-staff">
  <h2>our staffs</h2>
  <div class="staff slider">
    <div>
      <div class="card">
        <div class="top">
          <div class="border">
            <img src="http://placehold.it/350x300?text=1" alt="">
          </div>
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="top">
          <div class="border">
            <img src="http://placehold.it/350x300?text=1" alt="">
          </div>
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="top">
          <div class="border">
            <img src="http://placehold.it/350x300?text=1" alt="">
          </div>
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
     <div class="card">
        <div class="top">
          <div class="border">
            <img src="http://placehold.it/350x300?text=1" alt="">
          </div>
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="top">
          <img src="http://placehold.it/350x300?text=1" alt="">
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="top">
          <img src="http://placehold.it/350x300?text=1" alt="">
          <div class="info">
            <h3>Name name</h3>
            <span>Co-founder/ CEO of dewolfe, harvard</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="trips">
  <h2>trips in vietnam</h2>
  <div class="slider slider-for">
    <div class="image-for" style="background-image: url('http://placehold.it/350x300?text=1');"></div>
    <div class="image-for" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-for" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-for" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-for" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
  </div>
  <div class="slider slider-nav">
    <div class="image-nav" style="background-image: url('http://placehold.it/350x300?text=1');"></div>
    <div class="image-nav" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-nav" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-nav" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
    <div class="image-nav" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/slide1.jpg');"></div>
  </div>
</section>
<!-- End our staff -->
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