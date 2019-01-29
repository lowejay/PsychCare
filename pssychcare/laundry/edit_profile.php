<?php
	require ("db_connect.php");
	session_start();
	
	if(isset($_POST['fname'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$file_get = $_FILES['img']['name'];
		$temp = $_FILES['img']['tmp_name'];

		$file_save = "images/".$file_get;
		move_uploaded_file($temp, $file_save);

	}

	$query = "UPDATE admin SET fname = '$fname', lname = '$lname', username = '$username', photo = '$file_save' WHERE
				 id = '".$_SESSION['admin_user']."'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Successfully Updated Profile!")</script>';
	}else{
		echo mysql_error();
	}
    echo "<script>window.history.go(-1);</script>";
?>
