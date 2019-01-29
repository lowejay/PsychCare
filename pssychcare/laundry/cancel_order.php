<?php
	require ("db_connect.php");

	if(isset($_POST['id'])){
		$id=$_POST['id'];
	}

	$query = "UPDATE orders SET status = 'Cancelled' WHERE id = '$id'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Successfully Cancelled!")</script>';
	}else{
		echo mysql_error();
	}
    echo "<script>window.history.go(-2);</script>";
?>
