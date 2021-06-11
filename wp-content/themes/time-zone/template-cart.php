<?php
/*
Template name: Cart page
*/
get_header();
?>
<!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<!--================Cart Area =================-->
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
      <section class="cart_area section_padding">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr>
                    <td>
                      <div class="media">
                          <?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s" style="color: #212529;"><span class="remove">x</span></a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
                        
                        <div class="d-flex">
                          <img src="<?php echo wp_get_attachment_url($_product->get_image_id()); ?>" alt="" />
                        </div>
                        <div class="media-body">
                          <p><?php echo $_product->get_name();  ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>$
                        <?php

                        echo $_product->get_price();
                        ?>

                      </h5>
                    </td>
                    <td>
                        <?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
                      
                    </td>
                    <td>
                      <h5>
                            <?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>

                      </h5>
                    </td>
                  </tr>
                  <?php
                }
            }
                  ?>
                  
                  <tr class="bottom_button">
                    <td>
                    <button type="submit" class="btn_1" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">Update Cart</button>
                      <!-- <a class="btn_1" href="#">Update Cart</a> -->
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                    <?php if ( wc_coupons_enabled() ) { ?>
                      <div class="cupon_text float-right">
                      <input type="text" class="input-text" id="coupon_code" name="coupon_code" placeholder="Enter coupon" value=""/>
                        <!-- <input type="text" placeholder="Enter coupon"> -->
                        <button type="submit" class="btn_1" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">Apply</button>
                        <?php do_action( 'woocommerce_cart_coupon' ); ?>
                        <!-- <a class="btn_1" href="#">Apply</a> -->
                      </div>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                    
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5><?php wc_cart_totals_subtotal_html(); ?></h5>
                    </td>
                  </tr>
                  <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Coupon: <?php echo $coupon->code ?></h5>
                    </td>
                    <td>
                      <h5><?php wc_cart_totals_coupon_html( $coupon ); ?></h5>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Total</h5>
                    </td>
                    <td>
                      <h5><?php wc_cart_totals_order_total_html(); ?></h5>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1 checkout_btn_1" href="/time-zone/checkout">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
</form>


<?php
get_footer();
?>





