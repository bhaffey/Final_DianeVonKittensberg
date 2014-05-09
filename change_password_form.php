<?php
 require_once('item_sc_fns.php');
 session_start();
 do_html_header("Change Password");
 if( check_admin_user() || check_worker() || check_customer() )
	display_password_form();

echo '<div id="navbar_user">
  <ul>
    <li>
        <a href="user_type.php">Back to Menu</a> 
      </li>
    </ul>
  </div>';

 do_html_footer();
?>