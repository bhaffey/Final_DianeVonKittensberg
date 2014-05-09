<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

if (isset($_POST['username']) && isset($_POST['passwd'])) {
	// they have just tried logging in

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
	
	//echo login($username, $passwd); 
    if (!strcmp(login($username, $passwd),"A")) {
      // if they are in the database register the user id
      $_SESSION['admin_user'] = $username;
   } else if (!strcmp(login($username, $passwd),"W")) {
      // if they are in the database register the user id
      $_SESSION['worker_user'] = $username;
   } else if (!strcmp(login($username, $passwd),"C")) {
      // if they are in the database register the user id
      $_SESSION['customer_user'] = $username;
   } else {
      // unsuccessful login
      do_html_header("Login Failed!");
      echo "<p><font color=\"red\">The username or password you entered is incorrect.</font></p>";
        echo '<div id="navbar">
  <ul>
    <li>
        <a href="login.php">Login</a> 
      </li>
    </ul>
  </div>';
      do_html_footer();
      exit;
    }
} else {	  
	   if(isset($_SESSION['username']) && isset($_SESSION['password']))
			;//do nothing user already logged in
	   else {
		  do_html_header("Login Failed!");
		  echo "<p><font color=\"red\">Username or Password cannot be empty.</font></p>";
		    echo '<div id="navbar">
    <p style="text-transform:capitalize; font-style:italic">Already have an account?</p>
  <ul>
    <li>
        <a href="login.php">Login</a> 
      </li>
    </ul>
  </div>';
		  do_html_footer();
		  exit;
		}
	}

do_html_header("User Menu");
if (check_admin_user()) {
  display_admin_menu();
} else if (check_worker()) {
  display_worker_menu();
} else if (check_customer()) {
  display_customer_menu();
} else{
  echo "<p>You are not authorized to enter the administration area.</p>";
}
do_html_footer();

?>
