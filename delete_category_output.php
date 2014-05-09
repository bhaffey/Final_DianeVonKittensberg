<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Delete Category");
if( check_admin_user() ) {
	$result = delete_category($_POST['catid']);
		if($result && ($_POST['catid']) != -1)
			echo "<font color=\"green\">The category has been deleted.</font>";
		else
			echo "<font color=\"red\">Error deleting category. Try again!</font>";
} else {
	echo "You're not authorized to view this page!";
}
 do_html_url("delete_category.php", "Back to delete category");
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>