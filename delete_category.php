<?php

// include function files for this application
require_once('item_sc_fns.php');
session_start();
do_html_header("Delete Category");
 if( check_admin_user() )
	display_all_categories_to_delete();

//delete_category($catid);
 else
	echo "You're not authorized to delete a category";
 do_html_url("user_type.php", "Back to menu");

do_html_footer();

?>
