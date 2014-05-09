<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Delete Item");
if( check_admin_user() ) {
	$result = delete_item($_POST['itemid']);
		if($result && $_POST['itemid']!=-1)
			echo "<font color=\"green\">The item has been deleted.</font>";
		else
			echo "<font color=\"red\">Error deleting item. Try again!</font>";
} else {
	echo "You're not authorized to view this page!";
}
 do_html_url("delete_item.php", "Back to delete item");
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>