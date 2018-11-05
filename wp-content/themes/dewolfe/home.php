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
        <h1>blockchain winter camp</h1>
        <p>2 weeks of winter courses and fun, in an amazing country.</p>
        <button class="btn">take your first step</button>
    </div>

    <div class="overflow full-device-width">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>	
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(<?php bloginfo('template_url'); ?>/data/image/png/panel.png)">
            </div>
            <div class="carousel-item" style="background-image: url(<?php bloginfo('template_url'); ?>/data/image/png/panel.png)">
            </div>
            <div class="carousel-item" style="background-image: url(<?php bloginfo('template_url'); ?>/data/image/png/panel.png)">
            </div>
            <div class="carousel-item" style="background-image: url(<?php bloginfo('template_url'); ?>/data/image/png/panel.png)">
            </div>
            <div class="carousel-item" style="background-image: url(<?php bloginfo('template_url'); ?>/data/image/png/panel.png)">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <button id="scroll-down"><span>Scroll down</span></button>
</section>
<!-- End Top panel -->

<!-- Our client -->
<section class="our-client">
    <h2>taught by</h2>
    <img class="taught" src="<?php bloginfo('template_url'); ?>/data/image/png/by_harvard.png" alt="">
    <img class="taught" src="<?php bloginfo('template_url'); ?>/data/image/png/by_mit.png" alt="">
    <h2>our clients</h2>
    <img class="client" src="<?php bloginfo('template_url'); ?>/data/image/png/clients_seeroo.png" alt="">
    <img class="client" src="<?php bloginfo('template_url'); ?>/data/image/png/clietns_icce.png" alt="">
    <img class="client" src="<?php bloginfo('template_url'); ?>/data/image/png/clients_mondrian.png" alt="">
    <img class="client" src="<?php bloginfo('template_url'); ?>/data/image/png/clients_kis.png" alt="">
    <img class="client" src="<?php bloginfo('template_url'); ?>/data/image/png/clients_yonsei.png" alt="">
</section>
<!-- End Our client -->
<!-- Our Camp -->
<section class="our-camp">
    <div class="title">
        <h2>Our camp magic is in the experience</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
    </div>
    <div class="card-deck">
        <div class="card">
            <div class="card-img-top" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/section3_learn.png');">
                <div class="background-opacity"></div>
                <h2>learn</h2>
            </div>

            <div class="card-body">
                <ul>
                    <li>Block chain</li>
                    <li>Machine learning data science</li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-img-top" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/section3_interact.png');">
                <div class="background-opacity"></div>
                <h2>interact</h2>
            </div>
            <div class="card-body">
                <p>Just bring your fun self! Price shown includes everything: room, board, meals, travel, course material!</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-top" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/section3_explore.png');">
                <div class="background-opacity"></div>
                <h2>explore</h2>
            </div>
            <div class="card-body">
                <p>Experience the best of Vietnam with our trips on the weekend.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Our Camp -->
<!-- Testimonials -->
<section class="testimonials">
    <!-- <div class="background" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/svg/bg-elip.svg');"></div> -->
    <img  class="background" src="<?php bloginfo('template_url'); ?>/data/image/png/bg-elip.png">
    <h2>testimonials</h2>
    <div class="autoplay slider">
        <div>
            <div class="row d-flex">
                <div class="col-12 col-sm-5 px-4">
                    <div class="elip">
                        <div class="elip-big">
                            <div class="elip-small">
                                <img src="<?php bloginfo('template_url'); ?>/data/image/png/testimonial_Kim.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-sm-1 col-sm-6 cap">
                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500"</p>
                    <h3>Kim Sun AH</h3>
                    <span>titles, company</span>

                </div>
            </div>
        </div>
        <div>
            <div class="row d-flex">
                <div class="col-12 col-sm-5 px-4">
                    <div class="elip">
                        <div class="elip-big">
                            <div class="elip-small">
                                <img src="<?php bloginfo('template_url'); ?>/data/image/png/testimonial_Kim.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-sm-1 col-sm-6 cap">
                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500"</p>
                    <h3>Kim Sun AH</h3>
                    <span>titles, company</span>

                </div>
            </div>
        </div>
        <div>
            <div class="row d-flex">
                <div class="col-12 col-sm-5 px-4">
                    <div class="elip">
                        <div class="elip-big">
                            <div class="elip-small">
                                <img src="<?php bloginfo('template_url'); ?>/data/image/png/testimonial_Kim.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-sm-1 col-sm-6 cap">
                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500"</p>
                    <h3>Kim Sun AH</h3>
                    <span>titles, company</span>

                </div>
            </div>
        </div>
        <div>
            <div class="row d-flex">
                <div class="col-12 col-sm-5 px-4">
                    <div class="elip">
                        <div class="elip-big">
                            <div class="elip-small">
                                <img src="<?php bloginfo('template_url'); ?>/data/image/png/testimonial_Kim.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-sm-1 col-sm-6 cap">
                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500"</p>
                    <h3>Kim Sun AH</h3>
                    <span>titles, company</span>

                </div>
            </div>
        </div>
        <div>
            <div class="row d-flex">
                <div class="col-12 col-sm-5 px-4">
                    <div class="elip">
                        <div class="elip-big">
                            <div class="elip-small">
                                <img src="<?php bloginfo('template_url'); ?>/data/image/png/testimonial_Kim.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-sm-1 col-sm-6 cap">
                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500"</p>
                    <h3>Kim Sun AH</h3>
                    <span>titles, company</span>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Testimonials -->
<!-- Journey -->
<section class="journey" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/bg-elip-jouney.png'), url('<?php bloginfo('template_url'); ?>/data/image/png/ready_for_journey.png')">
    <div class="over-lay"></div>
    <div class="row d-flex">
        <div class="col-12 col-sm-6 text">
            <h2>READY FOR A JOURNEY OF a LIFETIME ?</h2>
            <ul>
                <li>Our courses fill up fast-don’t take your chances</li>
                <li>Next admission deadline is November 30, 2018</li>
            </ul>
            <div class="button">
                <button class="btn btn-blue">apply now</button>
                <button class="btn btn-light">learn about our camp</button>
            </div>
        </div>
        <div class="col-12 col-sm-6 image" style="background-image: url('<?php bloginfo('template_url'); ?>/data/image/png/ready_for_journey.png');">
        </div>
    </div>
</section>
<!-- End Journey -->
<?php  get_footer(); ?>

