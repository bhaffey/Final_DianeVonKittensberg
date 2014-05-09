<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Add an item");
if (check_admin_user()) {
  display_item_form();

  echo '<div id="navbar_user">
  <ul>
    <li>
        <a href="admin.php">Back to Administrator Menu</a> 
      </li>
    </ul>
  </div>';

} else {
  echo "<p>You are not authorized to enter the administration area.</p>";
}
do_html_footer();

?>
