<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php woocommerce_page_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
<!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
								<?php
									woocommerce_catalog_ordering();
								?>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
							<?php
								if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
								the_post();
								// do_action( 'woocommerce_shop_loop' );

								// wc_get_template_part( 'content', 'product' );
								global $product;
							?>
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
										<?php echo $product->get_image('full'); ?>
                                        
                                        <div class="img-cap">
											<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="" aria-label="Добавить &quot;Thermo Ball Etip Gloves&quot; в корзину" rel="nofollow"><span>Add to cart</span></a>
                                            
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="<?php echo $product->get_permalink(); ?>"><?php echo $product->get_name();?></a></h3>
                                        <span>$ <?php echo $product->get_price(); ?></span>
                                    </div>
                                </div>
                            </div>
							<?php
								}
							}
							?>
                        </div>
                    </div>
                    
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
get_template_part('shop-method-area');
get_footer();
