<?php
	require ("db_connect.php");
	session_start();
	
	if(isset($_POST['current_password'])){
		$current_password = $_POST['current_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];

		$query = "SELECT password FROM admin";
        $result = mysqli_query($sql, $query);
        $row = mysqli_fetch_array($result);

        if($current_password != $row['password']){
        	echo '<script type="text/javascript">alert("Wrong old password!")</script>';
        }else if($new_password == $confirm_password){
        	$newpQuery = "UPDATE admin SET password='".$new_password."' WHERE id='".$_SESSION['admin_user']."'"; 
        	$newpResult =  mysqli_query($sql, $newpQuery);

        		echo '<script type="text/javascript">alert("You have succussfully changed your password!")</script>';

        }else if($new_password != $confirm_password){

        		echo '<script type="text/javascript">alert("Your new and retyped password did not match!")</script>';
        }

        echo "<script>window.history.go(-1);</script>";
	}
?>
