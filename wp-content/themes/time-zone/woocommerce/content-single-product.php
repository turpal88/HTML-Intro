<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" class="product_image_area" <?php wc_product_class( '', $product ); ?>>
<!--================Single Product Area =================-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
					<?php 
					$images = $product->get_gallery_image_ids();
					foreach($images as $image){
					  ?>
					<div class="single_product_img">
                        <img src="<?php echo wp_get_attachment_url($image); ?>" alt="#" class="img-fluid">
                    </div>
					  <?php
					}
					?>
                    
                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3><?php echo $product->get_name(); ?></h3>
                    <p>
                        <?php echo $product->get_description(); ?>
                    </p>
                    <div class="card_area">

					<form class="cart" action="<?php $product->get_permalink(); ?>" method="post" enctype="multipart/form-data">
		
			<div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input name="quantity" class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p>$<?php echo $product->get_price(); ?></p>
                        </div>
                    <div class="add_to_cart">
                        <button name="add-to-cart" href="#" class="btn_3" value="<?php echo $product->get_id(); ?>">add to cart</button>
                    </div>
					</form>
                    </div>
                </div>
                </div>
            </div>
            </div>
				</div>
        <!--================End Single Product Area =================-->
	
