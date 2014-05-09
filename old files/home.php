<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();
  do_html_header("Welcome to DVK");

  echo "<p>Please choose a category:</p>";

  // get categories out of database
  $cat_array = get_categories();

  // display as links to cat pages
  display_categories($cat_array);

  // if logged in as admin, show add, delete, edit cat links
  if(isset($_SESSION['admin_user'])) {
    display_button("admin.php", "admin-menu", "Admin Menu");
  }
  do_html_footer();
?>



<html>

<head>
	<title>Diane Von Kittensberg</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>


<div id="wrapper">
<div id="content">

	<div class="navbar">
		<div id="navbehind">
				<a href="www.facebook.com"><img src="images/facebook.jpg"></img></a>
				<a href="www.twitter.com"><img src="images/twitter.jpg"></img></a>
				<a href="www.instagram.com"><img src="images/instagram.jpg"></img></a>
				<a href="www.pinterest.com"><img src="images/pinterest.jpg"></img></a>		
					<img src="images/space.jpg"></img>
				<a href="?.html"><img src="images/signin.jpg"></img></a>
				<a href="?.html"><img src="images/shoppingbag.jpg"></img></a>
		</div>

	</div>

	<div class="navbar">
				<a href="sweaters.html"><img src="images/sweaters.jpg"></img></a>
				<a href="jackets.html"><img src="images/jackets.jpg"></img></a>
				<a href="index.html"><img src="images/dvk.jpg"></img></a>	
				<a href="harnesses.html"><img src="images/harnesses.jpg"></img></a>
				<a href="accessories.html"><img src="images/accessories.jpg"></img></a>		
	</div>

<img src="images/stockphoto.jpg" height="600px"></img>



</div>
</div>


</body>
</html>
