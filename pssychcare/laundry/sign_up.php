<?php
	session_start();
	require('db_connect.php');
	if(!empty($_POST['fname'])){
			
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$file_get = $_FILES['img']['name'];
		$temp = $_FILES['img']['tmp_name'];

		$file_save = "images/".$file_get;
		move_uploaded_file($temp, $file_save);

		if ($password != $confirm_password) {
			echo '<script type="text/javascript">alert("Password you entered did not match!")</script>';
			echo "<script>window.history.go(-1);</script>";
		}else{
			$checkUser= mysqli_num_rows(mysqli_query($sql,"SELECT username FROM admin WHERE username = '$username.'"));
			
			if($checkUser == 1){
				echo '<script type="text/javascript">alert("The username you entered is already taken!")</script>';
				echo "<script>window.history.go(-1);</script>";
			}else{
				mysqli_query($sql,"INSERT INTO admin(fname, lname, username, photo, password) VALUES('$fname', '$lname', '$username', '$file_save', '$password')");
				echo '<script type="text/javascript">alert("You have succesfully registered!")</script>';
				echo "<script>window.history.go(-1);</script>";
			}
		}

		echo "<script>window.history.go(-1);</script>";
	}
?>
