<?php
require_once('db_fns.php');


function register_form()
{
?>
<form method="post" action="create_user.php">
  <table border="0" align="center" cellspacing="8">
	<tr><b>Registration Form</b></tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" /></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td><input type="password" name="confirmPassword" /></td>
	</tr>
	<tr><td></td>
		<td><input type="submit" value="   Register    " /></td>
   </tr>
  </table>
</form>
<?php
}

function create_user( $username, $password ) 
{
	
	$conn = db_connect();
	if (!$conn) {
		return 0;
	}
	$query = "insert into login_info (username, password, usertype) values('".$username."','".$password."','C')"; 
	$result = $conn->query($query);
	return checkUsername($username);
}

function checkUsername($username)
{
	$conn = db_connect();
	if (!$conn) {
		return 0;
	}
	$query = "select * from login_info where username='".$username."'";
	$result = $conn->query($query);
	return $result->num_rows;
}
?>