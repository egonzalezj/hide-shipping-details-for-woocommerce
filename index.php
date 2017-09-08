<?php
/*
  Plugin Name: Woocommerce Hide Shipping Details
  Plugin URI: https://github.com/egonzalezj/wc-hide-shipping-details
  Description: Simple plugin to hide shipping details in WC theme.
  Author: Elisabet González
  Version: 1.0
  Author URI: http://github.com/egonzalezj
*/

add_filter( 'wc_product_enable_dimensions_display', '__return_false' );

?>
