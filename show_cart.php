<?php
  include ('item_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  @$new = $_GET['new'];

  echo $_GET['new'];

  if($new) {
    //new item selected
    if(!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
      $_SESSION['items'] = 0;
      $_SESSION['total_price'] ='0.00';
    }

    if(isset($_SESSION['cart'][$new])) { 
      $_SESSION['cart'][$new]++;
    } else {
      $_SESSION['cart'][$new] = 1;
    }

    $_SESSION['total_price'] = calculate_price($_SESSION['cart']);
    $_SESSION['items'] = calculate_items($_SESSION['cart']);
  }

  if(isset($_POST['save'])) {
    foreach ($_SESSION['cart'] as $items_id => $qty) {
      if($_POST[$items_id] == '0') {
        unset($_SESSION['cart'][$items_id]);
      } else {
        $_SESSION['cart'][$items_id] = $_POST[$items_id];
      }
    }

    $_SESSION['total_price'] = calculate_price($_SESSION['cart']);
    $_SESSION['items'] = calculate_items($_SESSION['cart']);
  }

  do_html_header("Your shopping cart");

  if(($_SESSION['cart']) && (array_count_values($_SESSION['cart']))) {
    display_cart($_SESSION['cart']);
  } else {
    echo "<p>There are no items in your cart.</p><hr/>";
  }

  $target = "index.php";

  // if we have just added an item to the cart, continue shopping in that category
  if($new)   {
    $details =  get_item_details($new);
    if($details['catid']) {
      $target = "show_cat.php?catid=".$details['catid'];
    }
  }

  echo "<div id=\"lowernavbar\">";
  echo "<ul><li>";
  display_button($target, "continue-shopping", "Continue Shopping");
  echo "</li>";

  // use this if SSL is set up
  // $path = $_SERVER['PHP_SELF'];
  // $server = $_SERVER['SERVER_NAME'];
  // $path = str_replace('show_cart.php', '', $path);
  // display_button("https://".$server.$path."checkout.php",
  //                 "go-to-checkout", "Go To Checkout");

  // if no SSL use below code
   echo "<li>";
  display_button("checkout.php", "go-to-checkout", "Go To Checkout");
   echo "</li><ul>";
  echo "</div>";

  do_html_footer();
?>
