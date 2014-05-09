<?php

function do_html_header($title = '') {

  // declare the session variables we want access to inside the function
  if (!$_SESSION['items']) {
    $_SESSION['items'] = '0';
  }
  if (!$_SESSION['total_price']) {
    $_SESSION['total_price'] = '0.00';
  }
?>
  <html>

<head>
  <title style=\"font-family: Helvetica, Arial, sans-serif;\">Diane Von Kittensberg</title>
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
        <a href="login.php"><img src="images/signin.jpg"></img></a>
        <a href="show_cart.php"><img src="images/shoppingbag.jpg"></img></a>
    </div>

<?php
     if(isset($_SESSION['admin_user'])) {
       display_button('logout.php', 'log-out', 'Log Out');
     } 
  ?>

  </div>

  <div id="navbar">
        <!-- HARD CODED IMAGES (MONIKA) <a href="show_cat.php?catid=sweaters"><img src="images/sweaters.jpg"></img></a>
        <a href="show_cat.php?catid=jackets"><img src="images/jackets.jpg"></img></a>
        <a href="index.php"><img src="images/dvk.jpg"></img></a> 
        <a href="show_cat.php?catid=harnesses"><img src="images/harnesses.jpg"></img></a>
        <a href="show_cat.php?catid=accessories"><img src="images/accessories.jpg"></img></a>   -->
        <ul>
        <li><a href="show_cat.php?catid=1">Sweaters</a></li>
        <li><a href="show_cat.php?catid=3">Jackets</a></li>
        <a href="index.php"><img src="images/dvk.jpg"></img></a>
        <li><a href="show_cat.php?catid=2">Harnesses</a></li>
        <li><a href="show_cat.php?catid=4">Accessories</a></li>
  </div>

<!--<div id="navbar">
  <ul>
  <?php 

    // get categories out of database
  $category_array = get_categories();

  //if (!is_array($category_array)) {
    // echo "<p>No categories currently available</p>";
     //return;
  }
  //echo "<ul>";
  //foreach ($category_array as $row)  {
    //$url = "show_cat.php?catid=".$row['category'];
    //$title = $row['category'];
    //echo "<li>";
    do_html_url($url, $title);
    //echo "</li>";
  }
  //echo "</ul>";
  //echo "<hr />";
}
?>
</div>-->


</div>
</div>


  <?php
     if(isset($_SESSION['admin_user'])) {
       echo "&nbsp;";
     }
  ?>
  </td>
  <td align="right" rowspan="2" width="135">
  
  </tr>
  <tr>
  <td align="right" valign="top">
  <?php
     if(isset($_SESSION['admin_user'])) {
       echo "&nbsp;";
     }
  ?>
  </td>
  </tr>
  </table>
<?php
  if($title) {
    do_html_heading(strtoupper($title));
  }
}

function do_html_footer() {
  // print an HTML footer
?>

<p>&nbsp;</p>
<p style="font-size: 20px; display: inline; text-transform:uppercase;"><strong>Diane Von Kittensberg</strong><br>
                                            200 Park Avenue, 16th Floor<br>New York, NY  10042</p>
  <p>&nbsp;</p>                                          
  </body>
  </html>
<?php
}

function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading; ?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <td><center><a href="<?php echo $url; ?>"><?php echo $name; ?></a></center><br />
  <!--<div id ="cattables">-->
<?php
}


function display_categories($category_array) {
  if (!is_array($category_array)) {
     echo "<p>No categories currently available</p>";
     return;
  }
  echo "<ul>";
  foreach ($category_array as $row)  {
    $url = "show_cat.php?catid=".$row['category'];
    $title = $row['category'];
    echo "<li>";
    do_html_url($url, $title);
    echo "</li>";
  }
  echo "</ul>";
  echo "<hr />";
}

/*

function display_button($target, $image, $alt) {
echo "<div align=\"center\"><a href=\"".$target."\">
      <img src=\"images/".$image.".gif\"
      alt=\"".$alt."\" border=\"0\" height=\"50\"
      width=\"135\"/></a></div>";

function display_categories($category_array) {
  if (!is_array($category_array)) {
     echo "<p>No categories currently available</p>";
     return;
  }
  echo "<ul>";
  foreach ($category_array as $row)  {
    $url = "show_cat.php?catid=".$row['category'];
    $title = $row['category'];
    echo "<li>";
    do_html_url($url, $title);
    echo "</li>";
  }
  echo "</ul>";
  echo "<hr />";
} 
*/

function display_items($items_array) {
  //display all items in the array passed in
  if (!is_array($items_array)) {
    echo "<p>No items currently available in this category</p>";
  } 
  else {
    //create table
    //create a table row for each item
	echo "<div align=\"center\"><table width=\"100px\" border=\"0\">";
	echo "<tr>";
    foreach ($items_array as $row) {
      //echo "<div align=\"center\"><table width=\"500px\" border=\"0\">";
      $url = "show_item.php?items_id=".$row['items_id'];
	  //echo "<td>";
      //echo $row['name'];
      echo "<td style=\"font-size:20px; text-align: center\">";
      //$title = "Name of Item ";
      $title = ucfirst($row['name']);
      do_html_url($url, $title);
      //print_r($row['image_loc']);
      echo "<img src=\"images/".$row['image_loc']."\"
              //style=\"border: 1px solid black; width: 150px; height: 150px\"/>";
      echo "</td>";
      //echo "</tr>";

      echo "<td style=\"text-align: center; padding: 10px\">";
      if (@file_exists("images/".$row['category'].".jpg")) {
        
        //echo "<img src=\"images/".$row['image_loc']."\"
              //style=\"border: 1px solid black\"/>";
        $title = "<img src=\"images/".$row['image_loc']."\"
                  style=\"border: 1px solid black\"/>";
        do_html_url($url, $title);
	  echo "</td>";
      } else {
        echo "&nbsp;";
      }
      echo "</td>";
      
          //echo "</table></div>";
    }
	echo "</tr></table></div>";
  }

  echo "<p style=\"clear:both\">&nbsp;</p><hr />";
}

function display_item_details($item) {
  // display all details about this item
  if (is_array($item)) {
    echo "<table style=\"padding-left: 120px; padding-top: 20px; padding-bottom: 20px\"><tr>";
    //display the picture if there is one
    //if (@file_exists("images/".$item['image_loc'].".jpg"))  {
      //$size = GetImageSize("images/hoodie_smaller.jpg");
      //$size = GetImageSize("images/".$item['image_loc'].".jpg");
      //if(($size[0] > 0) && ($size[1] > 0)) {
        //echo "<td><img src=\"images/".$item['image_loc'].".jpg\"
        echo "<td style=\"padding-left: 220px;\"><img src=\"images/".$item['image_loc']."\"
              style=\"border: 1px solid black; width: 400px; height: 400px\"/></td>";
      //}
   // }
    echo "<td><ul style=\"list-style-type: none; line-height:250%; font-size: 18px\">";
    echo "<li><strong>Name:</strong> ";
    echo $item['name'];
    echo "<li><strong>Description:</strong> ";
    echo $item['description'];
    echo "</li><li><strong>Size:</strong> ";
    echo $item['size'];
    echo "</li><li><strong>Our Price:</strong> $";
    echo number_format($item['price'], 2);
    echo "</li><li><strong>Quantity Available:</strong> ";
    echo $item['quantity'];
    echo "</li></ul></td></tr></table>";
  } else {
    echo "<p>The details of this item cannot be displayed at this time.</p>";
  }
  echo "<hr />";
}

function display_checkout_form() {
  //display the form that asks for name and address
?>
</div>


  <br />
    <form action="purchase.php" method="post">
    <table border="0" width="100%" cellspacing="0">
  <tr><td align="left">Shipping Options</td>
      <td align="right"> 
        <p>
            <input type="radio" name="shipping" id="USPS" value=4.95 >USPS Priority Mail: $4.95</input><br>
            <input type="radio" name="shipping" id="UPS" value=12.95>UPS 2 Day Air: $12.95</input><br>
            <input type="radio" name="shipping" id="FedEx" value=13.95>Fed Ex 2 Day Air: $13.95</input><br>
        </p>
        <!--<select required> 
            <option value=4.95 >USPS Priority Mail: $4.95</option>
            <option value=12.95>UPS 2 Day Air: $12.95</option>
            <option value=13.95>Fed Ex 2 Day Air: $13.95</option>
        </select> -->
      </td>
  </tr>
  <tr><th bgcolor="#cccccc" align="left">SUBTOTAL (not including Shipping)</th>
      <th bgcolor="#cccccc" align="right">$ 
        <?php 

        echo number_format($_SESSION['total_price'], 2); 
        //$_SESSION['total_price'] = $shipping+$_SESSION['total_price'];
        //$_SESSION['total_price'] = 92;
        ?>
      </th>
  </tr>

  <tr><th colspan="2" bgcolor="#cccccc">Your Details</th></tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type="text" name="city" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>State/Province</td>
    <td><input type="text" name="state" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>Zip Code</td>
    <td><input type="text" name="zip" value="" maxlength="10" size="40"/></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><input type="text" name="country" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr><th colspan="2" bgcolor="#cccccc">Shipping Address (leave blank if as above)</th></tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="ship_name" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="ship_address" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type="text" name="ship_city" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>State/Province</td>
    <td><input type="text" name="ship_state" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>Zip Code</td>
    <td><input type="text" name="ship_zip" value="" maxlength="10" size="40"/></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><input type="text" name="ship_country" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><p><strong>Please press Purchase to confirm
         your purchase, or Continue Shopping to add or remove items.</strong></p>
     <?php display_form_button("purchase", "Purchase These Items"); ?>
    </td>
  </tr>
  </form>
  </table><hr />
<?php
}

function display_shipping($shipping) {
  // display table row with shipping cost and total price including shipping
?>
  <table border="0" width="100%" cellspacing="0">
  <tr><td align="left">Shipping</td>
      <td align="right"> <?php echo number_format($shipping, 2); ?></td></tr>
  <tr><th bgcolor="#cccccc" align="left">TOTAL INCLUDING SHIPPING</th>
      <th bgcolor="#cccccc" align="right">$ <?php echo number_format($shipping+$_SESSION['total_price'], 2); ?></th>
  </tr>
  </table><br />
<?php
}


function display_total_inclshipping ($shipping) {
  // display table row with shipping cost and total price including shipping
?>
  <table border="0" width="800px" cellspacing="0" align="center">
  <tr><td align="left" style="padding-left: 150px; font-size: 18px; color: red; font-weight: bolder">Shipping</td>
      <td align="right" style="padding-right: 120px;"> <?php echo number_format($shipping, 2);
                               $_SESSION['total_price'] = $_SESSION['total_price'] + $shipping;
                          ?></td></tr>
  <tr><th bgcolor="#cccccc" align="left" style="padding-left: 150px; font-size: 18px; color: red">TOTAL INCLUDING SHIPPING</th>
      <th bgcolor="#cccccc" align="right" style="padding-right: 120px; font-size: 18px; color: red">$ <?php echo number_format($_SESSION['total_price'], 2); ?></th>
  </tr>
  </table><br />
<?php
}

function display_card_form($name) {
  //display form asking for credit card details
?>
  <table border="0" width="800px" cellspacing="2" align="center" cellpadding="5px">
  <form action="process.php" method="post">
  <tr><th colspan="2" bgcolor="#cccccc">Credit Card Details</th></tr>
  <tr>
    <td style="padding-left: 130px">Type</td>
    <td><select name="card_type">
        <option value="VISA">VISA</option>
        <option value="MasterCard">MasterCard</option>
        <option value="American Express">American Express</option>
        </select>
    </td>
  </tr>
  <tr>
    <td style="padding-left: 130px">Number</td>
    <td><input type="text" name="card_number" value="" maxlength="16" size="40"></td>
  </tr>
  <tr>
    <td style="padding-left: 130px">AMEX code (if required)</td>
    <td><input type="text" name="amex_code" value="" maxlength="4" size="4"></td>
  </tr>
  <tr>
    <td style="padding-left: 130px">Expiration Date</td>
    <td>Month
       <select name="card_month">
       <option value="01">01</option>
       <option value="02">02</option>
       <option value="03">03</option>
       <option value="04">04</option>
       <option value="05">05</option>
       <option value="06">06</option>
       <option value="07">07</option>
       <option value="08">08</option>
       <option value="09">09</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
       </select>
       Year
       <select name="card_year">

       <?php
       for ($y = date("Y"); $y < date("Y") + 10; $y++) {
         echo "<option value=\"".$y."\">".$y."</option>";
       }
       ?>
       </select>
  </tr>
  <tr>
    <td style="padding-left: 140px">Name on Card</td>
    <td><input type="text" name="card_name" value = "<?php echo $name; ?>" maxlength="40" size="40"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <p><strong>Please press Purchase to confirm your purchase, <br>or Continue Shopping to
      add or remove items</strong></p>
     <?php display_form_button('purchase', 'Purchase These Items'); ?>
    </td>
  </tr>
  </table>
<?php
}

function display_cart($cart, $change = true, $images = 1) {
  // display items in shopping cart
  // optionally allow changes (true or false)
  // optionally include images (1 - yes, 0 - no)

   echo "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"8px\">
         <form action=\"show_cart.php\" method=\"post\">
         <tr>
         <th colspan=\"".(1 + $images)."\" bgcolor=\"#cccccc\">Item</th>
         <th bgcolor=\"#cccccc\">Price</th>
         <th bgcolor=\"#cccccc\">Quantity</th>
         <th bgcolor=\"#cccccc\">Total</th>
         </tr>";

  //display each item as a table row
  foreach ($cart as $items => $qty)  {
    $item = get_item_details($items);
    echo "<tr>";
    if($images == true) {
      echo "<td align=\"left\">";
      if (file_exists("images/".$items.".jpg")) {
         $size = GetImageSize("images/".$items);
         if(($size[0] > 0) && ($size[1] > 0)) {
           echo "<img src=\"images/".$items."
                  style=\"border: 1px solid black\"
                  width=\"".($size[0]/3)."\"
                  height=\"".($size[1]/3)."\"/>";
         }
      } else {
         echo "&nbsp;";
      }
      echo "</td>";
    }
    echo "<td align=\"center\">
          <a href=\"show_item.php?items=".$items."\">".$item['name']."</a>
          </td>
          <td align=\"center\">\$".number_format($item['price'], 2)."</td>
          <td align=\"center\">";

    // if we allow changes, quantities are in text boxes
    if ($change == true) {
      echo "<input type=\"text\" name=\"".$items."\" value=\"".$qty."\" size=\"3\">";
    } else {
      echo $qty;
    }
    echo "</td><td align=\"center\">\$".number_format($item['price']*$qty,2)."</td></tr>\n";
  }
  // display total row
  echo "<tr>
        <th colspan=\"".(2+$images)."\" bgcolor=\"#cccccc\">&nbsp;</td>
        <th align=\"center\" bgcolor=\"#cccccc\">".$_SESSION['items']."</th>
        <th align=\"center\" bgcolor=\"#cccccc\">
            \$".number_format($_SESSION['total_price'], 2)."
        </th>
        </tr>";

  // display save changes button
  if($change == true) {
    echo "<tr>
          <td colspan=\"".(2+$images)."\">&nbsp;</td>
          <td align=\"center\">
                    <p style=\"font-size: 4px\">&nbsp;</p>
             <input type=\"hidden\" name=\"save\" value=\"true\"/>
             <input type=\"image\" src=\"images/save-changes.gif\"
                    border=\"0\" alt=\"Save Changes\"/>
          </td>
          <td>&nbsp;</td>
          </tr>";
  }
  echo "</form></table>";
}

function display_login_form() {
  // dispaly form asking for name and password
?>
 <form method="post" action="admin.php">
 <table bgcolor="#cccccc">
   <tr>
     <td>Username:</td>
     <td><input type="text" name="username"/></td></tr>
   <tr>
     <td>Password:</td>
     <td><input type="password" name="passwd"/></td></tr>
   <tr>
     <td colspan="2" align="center">
     <input type="submit" value="Log in"/></td></tr>
   <tr>
 </table></form>
<?php
}

function display_admin_menu() {
?>
<br />
<a href="index.php">Go to main site</a><br />
<a href="insert_category_form.php">Add a new category</a><br />
<a href="insert_item_form.php">Add a new item</a><br />
<a href="change_password_form.php">Change admin password</a><br />
<?php
}

function display_button($target, $image, $alt) {
  echo "<div><a href=\"".$target."\">
          <img src=\"images/".$image.".gif\"
           alt=\"".$alt."\" border=\"0\" height=\"50\"
           width=\"135\"/></a></div>";
}

function display_form_button($image, $alt) {
  echo "<div><input type=\"image\"
           src=\"images/".$image.".gif\"
           alt=\"".$alt."\" border=\"0\" height=\"50\"
           width=\"135\"/></div>";
}

?>