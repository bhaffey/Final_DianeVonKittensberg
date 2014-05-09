<?php
  include ('item_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  $items_id = $_GET['items_id'];

  // get this item out of database
  $item = get_item_details($items_id);
  do_html_header($item['name']);
  display_item_details($item);

  // set url for "continue button"
  $target = "index.php";
  if($item['category']) {
    $target = "show_cat.php?category=".$item['category'];
  }

  // if logged in as admin, show edit item links
  if(check_admin_user()) {
    display_button("edit_item_form.php?items_id=".$items_id, "edit-item", "Edit Item");
    display_button("admin.php", "admin-menu", "Admin Menu");
    display_button($target, "continue", "Continue");
  } else {
    display_button("show_cart.php?new=".$isbn, "add-to-cart",
                   "Add".$item['title']." To My Shopping Cart");
    display_button($target, "continue-shopping", "Continue Shopping");
  }

  do_html_footer();
?>
