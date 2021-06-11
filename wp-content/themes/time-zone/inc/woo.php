<?php
if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){
  function time_zone_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'time_zone_add_woocommerce_support' );  
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', priority: 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', priority: 20);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', priority: 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', priority: 30);
}

?>
