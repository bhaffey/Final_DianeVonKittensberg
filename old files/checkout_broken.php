<?php
  //include our function set
  include ('item_sc_fns.php');

  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Checkout");

  if(($_SESSION['cart']) && (array_count_values($_SESSION['cart']))) {
    display_cart($_SESSION['cart'], false, 0);
    //display_shipping(20);
    //display_shipping_options();
    display_checkout_form();
  } 
  else {
    echo "<p>There are no items in your cart</p>";
  }

  display_button("show_cart.php", "continue-shopping", "Continue Shopping");

  do_html_footer();
?>
