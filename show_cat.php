<?php
  include ('item_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  $catid = $_GET['catid'];
  $name = get_category_name($catid);
  do_html_header($name);

  // get the item info out from db
  //$items_array = get_categories($catid);
  $items_array = get_items($catid);

  display_items($items_array);

//print array for testing purposes
  //print_r($items_array);

  // if logged in as admin, show add, delete item links
  if(isset($_SESSION['admin_user'])) {
    display_button("index.php", "continue", "Continue Shopping");
    display_button("admin.php", "admin-menu", "Admin Menu");

  } else {
    display_button("index.php", "continue-shopping", "Continue Shopping");
  }

  do_html_footer();
?>

