<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
$old_user = $_SESSION['admin_user'];  // store  to test if they *were* logged in
unset($_SESSION['admin_user']);
$_SESSION['logout'] = 1;
session_destroy();

// start output html
do_html_header("Logging Out");

if (!empty($old_user)) {
  echo "<p>Logged out.</p>";
  echo '<div id="navbar_user">
  <ul>
    <li>
        <a href="login.php">Login</a> 
      </li>
    </ul>
  </div>';
} else {
  // if they weren't logged in but came to this page somehow
  echo "<p>You were not logged in, and so have not been logged out.</p>";
    echo '<div id="navbar_user">
  <ul>
    <li>
        <a href="login.php">Login</a> 
      </li>
    </ul>
  </div>';
}

do_html_footer();

?>
