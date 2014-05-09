<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Edit Item Details");
if( check_admin_user() || check_worker() ) {
	$result = save_item($_POST['itemId'], $_POST['itemName'], $_POST['itemQty'], $_POST['itemDesc'], $_POST['itemLoc'], $_POST['itemPrice'], $_POST['itemSize']);
		if($result==1)
			echo "<font color=\"green\">The item has been saved.</font>";
		else
			echo "<font color=\"red\">Error saving item. Try again!</font>";
} else {
	echo "You're not authorized to view this page!";
}
 do_html_url("select_item.php", "Back to edit item");
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>