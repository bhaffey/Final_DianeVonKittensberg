<?php

require_once('db_fns.php');
session_start();

function login($username, $password) {
// check username and password with db
// if yes, return true
// else return false

  // connect to db
  $conn = db_connect();
  if (!$conn) {
    return 0;
  }

  // check if username is unique
  $result = $conn->query("select usertype from login_info
                         where username='".$username."'
                         and password = '".$password."'");
						 
  if (!$result) {
     return 0;
  }

if ($result->num_rows>0) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
	 foreach( $result as $row ) 
		return $row['usertype'];
  } else {
     return "";
  }
}

function check_admin_user() {
// see if somebody is logged in and notify them if not

  if (isset($_SESSION['admin_user'])) {
    return true;
  } else {
    return false;
  }
}

function check_worker() {
// see if somebody is logged in and notify them if not

  if (isset($_SESSION['worker_user'])) {
    return true;
  } else {
    return false;
  }
}

function check_customer() {
// see if somebody is logged in and notify them if not

  if (isset($_SESSION['customer_user'])) {
    return true;
  } else {
    return false;
  }
}


function change_password($username, $old_password, $new_password) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else return false
  if (login($username, $old_password)) {

    if (!($conn = db_connect())) {
      return false;
    }

    $result = $conn->query("update login_info
                            set password = '".$new_password."'
                            where username = '".$username."' and
								  password = '".$old_password."'");
     if (!$result) {
	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $old_password;
      return false;  // not changed
    } else {
	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $new_password;
	  return true;  // changed successfully
    }
  } else {
	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $old_password;
	  return false; // old password was wrong
  }
}


?>
