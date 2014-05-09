<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Adding an item");
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

    if(insert_item($items_id, $quantity, $catid, $description, $size, $image_loc, $name, $price)) 
    {
      echo "<p>Item <em>".stripslashes($name)."</em> was added to the database.</p>";
    } else {
      echo "<p>Item <em>".stripslashes($name)."</em> could not be added to the database.</p>";
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
