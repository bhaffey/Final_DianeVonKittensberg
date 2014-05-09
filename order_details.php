<?php
  include ('item_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  $size = $_POST['size'];
  $quantity = $_GET['quantity'];

  //insert_size($catname)) 

  //insert quantity
  // insert customer address
  
    $query = "insert into order_items values
            ('', '','".$quantity."','".$size."')";

            print_r($query);
    $result = $conn->query($query);

?>

