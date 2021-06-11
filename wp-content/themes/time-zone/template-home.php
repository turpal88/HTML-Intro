<?php
/* 
Template name: Home page
*/
get_header();
global $redux;
?>
<!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">
                                    <?php 
                                    echo $redux['home-top-section-title'];
                                    ?>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">
                                        <?php
                                            echo $redux['home-top-section-desc'];
                                        ?>
                                    </p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="<?php
                                            echo $redux['home-top-section-link'];
                                        ?>" 
                                        class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="<?php echo $redux['home-top-section-image']['url']; ?>" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New Perfect Style</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class="new-product-area popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        echo do_shortcode('[recent_products limit="3" order="ASC"]');
                    ?>
                </div>
            </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
        
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <?php
                        $gallery_list_ids = explode(',', $redux['home-gallery-list']);
                        $gallery_list = [];
                        foreach($gallery_list_ids as $gallery_list_id){
                        $gallery_list[] = wp_get_attachment_url($gallery_list_id);
                            }
        
                    ?>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                           
                            <div class="gallery-img big-img" style="background-image: url(<?php echo $gallery_list[0] ?>);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(<?php echo $gallery_list[1] ?>);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(<?php echo $gallery_list[2] ?>);"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(<?php echo $gallery_list[3] ?>);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-70 text-center">
                            <h2>Popular Items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        echo do_shortcode('[recent_products limit="6" orderby="popularity"]');
                    ?>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="/time-zone/shop" class="btn view-btn1">View More Products</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Video Area Start -->
       <?php 
        get_template_part('video-section');
       ?>
        
        <!-- Video Area End -->
        <!--? Watch Choice  Start-->
        <div class="watch-area">
            <div class="container">
                <div class="row align-items-center justify-content-between padding-130">
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2><?php echo $redux['home-watch-of-choise-title-top']; ?></h2>
                            <p><?php echo $redux['home-watch-of-choise-desc-top']; ?></p>
                            <a href="<?php echo $redux['home-watch-of-choise-link-top']; ?>" class="btn">Show Watches</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="<?php echo $redux['home-watch-of-choise-image-top']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="<?php echo $redux['home-watch-of-choise-image-bottom']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2><?php echo $redux['home-watch-of-choise-title-bottom']; ?></h2>
                            <p><?php echo $redux['home-watch-of-choise-desc-bottom']; ?></p>
                            <a href="<?php echo $redux['home-watch-of-choise-link-bottom']; ?>" class="btn">Show Watches</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <?php
        get_template_part('shop-method-area');
        ?>
        
        <!-- Shop Method End-->
<?php
get_footer();
?>