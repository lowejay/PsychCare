<?php
	require('db_connect.php');
	if(isset($_GET['id'])){
		$item_id=$_GET['id'];
		
	}
	$query = "DELETE FROM items WHERE id = '$item_id'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Item Successfully Deleted!")</script>';
	}else{
		echo mysql_error();
	}
    echo "<script>window.history.go(-1);</script>";
?>
