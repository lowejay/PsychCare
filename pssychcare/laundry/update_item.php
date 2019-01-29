 <?php
	require ("db_connect.php");
	session_start();
			
	$id=$_POST['id'];
	$item_name=$_POST['item_name'];
	$price_kilo= $_POST['price_kilo'];
	
	$query = "UPDATE items SET item_name = '$item_name', price_kilo = '$price_kilo' WHERE id = '$id'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Item Successfully Updated!")</script>';
	}else{
		echo ("Problem with SQL");
	}
    echo "<META http-equiv=\"refresh\" content=\"0;URL=items.php\">";
?>
