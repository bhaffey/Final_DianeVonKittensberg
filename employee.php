<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();

do_html_header("Employee Menu");
  display_worker_menu();

do_html_footer();

?>
