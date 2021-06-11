<?php
/* 
Template name: About page
*/
get_header();
global $redux;
?>
<!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo $redux['about-top-section-title']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- About Details Start -->
        <div class="about-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4><?php echo $redux['about-second-section-our-mission-title']; ?></h4>
                            <p>
                                <?php echo $redux['about-second-section-our-mission-desc-1']; ?>
                            </p>
                            <p> <?php echo $redux['about-second-section-our-mission-desc-2']; ?></p>
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4><?php echo $redux['about-second-section-our-vision-title']; ?></h4>
                            <p>
                                <?php echo $redux['about-second-section-our-vision-desc-1']; ?>
                            </p>
                            <p> 
                                <?php echo $redux['about-second-section-our-vision-desc-2']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Details End -->
        <!--? Video Area Start -->
        <?php 
        get_template_part('video-section');
       ?>
        <!-- Video Area End -->
        <!--? Shop Method Start-->
        <?php
        get_template_part('shop-method-area');
        ?>
        <!-- Shop Method End-->
<?php
get_footer();
?>