<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Updating an item");
if (check_admin_user()) {
  if (filled_out($_POST)) {
    $items_id = $_POST['items_id'];
    $quantity = $_POST['quantity'];
    $catid = $_POST['catid'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $image_loc = $_POST['image_loc'];
    $name = $_POST['name'];

    if(update_item($items_id, $quantity, $catid, $description, $price, $size, $image_loc, $name)) {
      echo "<p>Item was updated.</p>";
    } else {
      echo "<p>Item could not be updated.</p>";
    }
  } else {
    echo "<p>You have not filled out the form.  Please try again.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorized to view this page.</p>";
}

do_html_footer();

?>
