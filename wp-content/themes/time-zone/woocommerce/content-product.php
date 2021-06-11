<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
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
