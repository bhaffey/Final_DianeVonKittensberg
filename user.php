<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("User Menu");
  display_customer_menu();

do_html_footer();

?>
