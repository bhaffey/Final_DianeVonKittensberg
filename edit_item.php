<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Edit Item Details");
 if( check_admin_user() || check_worker() ) {
	if($_POST['itemid']== -1){
		echo "Please select a valid option and try again!";
	}
	else
		display_details($_POST['itemid']);
}
	//if ($book = get_book_details($_GET['isbn']))
	//display_all_items_to_edit();
 else
	echo "You're not authorized to view this page!";
 do_html_url("select_item.php", "Back to edit item");
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>