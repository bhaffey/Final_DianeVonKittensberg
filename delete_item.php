<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Delete Item");
 if( check_admin_user() )
	display_all_items_to_delete();
 else
	echo "You're not authorized to delete an item";
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>
