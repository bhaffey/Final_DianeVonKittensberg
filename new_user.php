<?php
	require_once('item_sc_fns.php');
	do_html_header("Register User");
	register_form();

	echo '<div id="navbar">
    <p style="text-transform:capitalize; font-style:italic">Already have an account?</p>
  <ul>
    <li>
        <a href="login.php">Login</a> 
      </li>
    </ul>
  </div>';

	//do_html_url('login.php', 'Login Page');
	do_html_footer();
?>

