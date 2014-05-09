<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Edit Item");
 if( check_admin_user() || check_worker() )
	display_all_items_to_edit();
 else
	echo "You're not authorized to edit an item";
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>
