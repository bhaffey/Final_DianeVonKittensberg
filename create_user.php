<?php
	require_once('item_sc_fns.php');
	session_start();
	do_html_header("Register User");
	$username = $_POST['username'];
	$new_passwd = $_POST['password'];
	$new_passwd2 = $_POST['confirmPassword'];
	$success = -1;
	if ($new_passwd != $new_passwd2) {
      echo "<p><font color=\"red\">Passwords entered were not the same. Please try again!</font></p>";
	  do_html_url("new_user.php", "Register Page");
	  exit;
   } else if ((strlen($new_passwd)>16) || (strlen($new_passwd)<6)) {
      echo "<p><font color=\"red\">New password must be between 6 and 16 characters. Please try again!</font></p>";
	  do_html_url("new_user.php", "Register Page");
	  exit;
   }
	if($username!= "" && checkUsername($username) == 0 ) {
		$success = create_user($username, $new_passwd);
    } else {
		echo "<font color=\"red\">Username already exists or is empty! Please try again!</font>";
		do_html_url("new_user.php", "Register Page");
		exit;
	}
   // show confirmation messages
   if($success == -1)
		do_html_url("new_user.php", "Register Page");
   else if($success == 1){
		echo "<p><font color=\"green\">User has been successfully registered</font></p>";
		do_html_url("login.php", "Login Page");
		}
   do_html_footer();
?>