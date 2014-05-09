<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Deleting book");
if (check_admin_user()) {
  if (isset($_POST['items_id'])) {
    $isbn = $_POST['items_id'];
    if(delete_book($isbn)) {
      echo "<p>Book ".$items_id." was deleted.</p>";
    } else {
      echo "<p>Book ".$items_id." could not be deleted.</p>";
    }
  } else {
    echo "<p>We need an Item ID to delete a book.  Please try again.</p>";
  }
  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorised to view this page.</p>";
}

do_html_footer();

?>
