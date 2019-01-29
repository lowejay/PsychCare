<?php
	require ("db_connect.php");

	if(isset($_POST['id'])){
		$id=$_POST['id'];
	}

	$query = "UPDATE orders SET status = 'Claimed', pick_up_date = CURRENT_DATE WHERE id = '$id'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Successfully Claimed!")</script>';
	}else{
		echo mysql_error();
	}
    echo "<script>window.history.go(-1);</script>";
?>
