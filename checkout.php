<?php
  //include our function set
  include ('item_sc_fns.php');

  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Checkout");

  //echo "<p>hi</p>";

  if(($_SESSION['cart']) && (array_count_values($_SESSION['cart']))) {
    display_cart_checkout($_SESSION['cart'], false, 0);

    //display_shipping(20);
    display_checkout_form();
  } 
  else {
    echo "<p>There are no items in your cart</p>";
  }

  do_html_footer();
?>
