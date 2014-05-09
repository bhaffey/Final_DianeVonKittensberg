<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Edit item details");
if (check_admin_user()) {
  if ($book = get_book_details($_GET['items_id'])) {
    display_item_form($items_id);
  } else {
    echo "<p>Could not retrieve item details.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorized to enter the administration area.</p>";
}
do_html_footer();

?>
