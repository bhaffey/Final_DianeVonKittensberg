<?php
function process_card($card_details) {
  // connect to payment gateway or
  // use gpg to encrypt and mail or
  // store in DB if you really want to

  return true;
}

function insert_order($order_details) {
  // extract order_details out as variables
  extract($order_details);

  // set shipping address same as address
  if((!$ship_name) && (!$ship_address) && (!$ship_city) && (!$ship_state) && (!$ship_zip) && (!$ship_country)) {
    $ship_name = $name;
    $ship_address = $address;
    $ship_city = $city;
    $ship_state = $state;
    $ship_zip = $zip;
    $ship_country = $country;
  }

  $conn = db_connect();

  // we want to insert the order as a transaction
  // start one by turning off autocommit
  $conn->autocommit(FALSE);

  // insert customer address
  $query = "select customerid from customers where
            name = '".$name."' and address = '".$address."'
            and city = '".$city."' and state = '".$state."'
            and zip = '".$zip."' and country = '".$country."'";

  $result = $conn->query($query);

  //print_r($result);

  if($result->num_rows>0) {
    $customer = $result->fetch_object();
    $customerid = $customer->customerid;
  } else {
    $query = "insert into customers values
            ('', '".$name."','".$address."','".$city."','".$state."','".$zip."','".$country."')";
    $result = $conn->query($query);

    echo $result;

    if (!$result) {
       return false;
    }
  }

  $customerid = $conn->insert_id;

  $date = date("Y-m-d");

  $query = "insert into orders values
            ('', '".$customerid."', '".$_SESSION['total_price']."', '".$date."', '".PARTIAL."',
             '".$ship_name."', '".$ship_address."', '".$ship_city."', '".$ship_state."',
             '".$ship_zip."', '".$ship_country."')";

  $result = $conn->query($query);
  if (!$result) {
    return false;
  }

  $query = "select orderid from orders where
               customerid = '".$customerid."' and
               amount > (".$_SESSION['total_price']."-.001) and
               amount < (".$_SESSION['total_price']."+.001) and
               date = '".$date."' and
               order_status = 'PARTIAL' and
               ship_name = '".$ship_name."' and
               ship_address = '".$ship_address."' and
               ship_city = '".$ship_city."' and
               ship_state = '".$ship_state."' and
               ship_zip = '".$ship_zip."' and
               ship_country = '".$ship_country."'";

  $result = $conn->query($query);

  if($result->num_rows>0) {
    $order = $result->fetch_object();
    $orderid = $order->orderid;
  } else {
    return false;
  }

  // insert each item
  foreach($_SESSION['cart'] as $items_id => $quantity) {
    $detail = get_item_details($items_id);
    $query = "delete from order_items where
              orderid = '".$orderid."' and items_id = '".$items_id."'";
    $result = $conn->query($query);
    $query = "insert into order_description values
              ('".$orderid."', '".$items_id."', ".$detail['price'].", $quantity)";
    $result = $conn->query($query);
    if(!$result) {
      return false;
    }
  }

  // end transaction
  $conn->commit();
  $conn->autocommit(TRUE);

  return $orderid;
}

?>
