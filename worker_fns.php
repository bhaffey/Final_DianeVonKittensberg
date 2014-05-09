<?php
require_once('db_fns.php');

function display_all_items_to_edit() {
?>
  <form method="post" action="edit_item.php">
  <table border="0" align="center">
	<tr>
      <td>Items:</td>  
	  <td><select id="itemid" name="itemid">
      <?php
          // list of possible items comes from database
          $item_array=show_all_items();
		  echo "<option value=\"-1\">Select Item</option>";
          foreach ($item_array as $thisItem) {
				echo "<option value=\"".$thisItem['items_id']."\"";
				echo ">".$thisItem['name']."</option>";
          }
      ?>
          </select>
       </td>
   </tr>
   <tr><td></td>
		<td><input type="submit" value="   Edit Item    " /></td>
   </tr>
  </table>
  </form>
<?php
}
function display_details($item)
{
$item_details = show_item_details($item);
?>
<form method="post" action="save_item.php">
  <table border="0" align="center">
  <?php foreach ($item_details as $thisItem) { ?>
    <tr>
		<td><input type="hidden" name="itemId" value="<?php echo $thisItem['items_id'] ?>" /></td>
	</tr>
	<tr>Items Details </tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="itemName" value="<?php echo $thisItem['name'] ?>" /></td>
	</tr>
	<tr>
		<td>Quantity</td>
		<td><input type="text" name="itemQty" value="<?php echo $thisItem['quantity'] ?>" /></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><input type="text" name="itemDesc" value="<?php echo $thisItem['description'] ?>" /></td>
	</tr>
	
	<tr>
		<td>Image Name</td>
		<td><input type="text" name="itemLoc" value="<?php echo $thisItem['image_loc'] ?>" /></td>
	</tr>
	<tr>
		<td>Unit Price</td>
		<td><input type="text" name="itemPrice" value="<?php echo $thisItem['price'] ?>" /></td>
	</tr>
	<tr>
		<td>Size</td>
		<td><input type="text" name="itemSize" value="<?php echo $thisItem['size'] ?>" /></td>
	</tr>
	<?php } ?>
	<tr><td></td>
		<td><input type="submit" value="   Save Item    " /></td>
   </tr>
  </table>
</form>
<?php
}
function show_item_details($items_id) 
{
	$conn = db_connect();
	if (!$conn) {
		return 0;
	}
	
	$query = "select * from items where items_id='".$items_id."'";
	$result = $conn->query($query);
	return $result;
}

function show_all_items() 
{
	$conn = db_connect();
	if (!$conn) {
		return 0;
	}
	$query = "select items_id, name from items";
	$result = $conn->query($query);
	return $result;
}

function save_item($itemId, $itemName, $itemQty, $itemDesc, $itemLoc, $itemPrice, $itemSize) 
{
	//use post to get values
	$conn = db_connect();
	if (!$conn) {
		return 0;
	}// We ll need an item id
	$query = "update items set quantity = '".$itemQty."', 
							   description = '".$itemDesc."', 
							   size = '".$itemSize."', 
							   image_loc = '".$itemLoc."', 
							   name = '".$itemName."', 
							   price = '".$itemPrice."' 
			  where items_id ='".$itemId."'";
	$result = $conn->query($query);
	return $result;
}

?>