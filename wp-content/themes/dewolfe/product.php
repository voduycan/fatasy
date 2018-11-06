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
  <p>We blend intense yet immersive learning with real-life experience. That is the only way you can have both the knowledge and skill set to excel as a professional.</p>
  <h3>Foundation Theory</h3>
  <div class="foundation slider">
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/350x300?text=1" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="btn">request detailed curriculum</button>
</section>
<!-- End Slide -->
<!-- Blockchain -->
<section class="blockchain text-centerx">
  <h2>Lorem Ipsum is simply dummy text of the printing and typesetting</h2>
  <div class="row">
    <div class="col-12 col-sm-6">
      <iframe width="420" height="315" 
      src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe>
    </div>
    <div class="col-12 col-sm-6 text-left">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>
  </div>
</section>
<!-- End Blockchain -->
<!-- our staff -->
<section class="our-staff">
  <h2>our staffs</h2>
  <div class="staff slider">
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
<section class="journey">
  <div class="row d-flex">
    <div class="col-12 col-sm-6 text">
      <h2>Lorem Ipsum is simply dummy.</h2>
      <ul>
        <li>Lorem Ipsum is not simply random text</li>
        <li>Lorem Ipsum is not simply random text</li>
      </ul>
      <div class="button">
        <button class="btn">apply now</button>
        <button class="btn">learn about our camp</button>
      </div>
    </div>
    <div class="col-12 col-sm-6 image">
      <img src="<?php bloginfo('template_url'); ?>/data/image/slide1.jpg">
    </div>
  </div>  
</section>
<?php  get_footer(); ?>