<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Add a category");
if (check_admin_user()) {
  display_category_form();


echo '<div id="navbar_user">
  <ul>
    <li>
        <a href="user_type.php">Back to Menu</a> 
      </li>
    </ul>
  </div>';

} else {
  echo "<p>You are not authorized to enter the administration area.</p>";
}
do_html_footer();

?>
