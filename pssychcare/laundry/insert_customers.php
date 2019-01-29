<?php
require ("db_connect.php");
	if(!empty($_POST['fname'])){

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$contact_num = $_POST['contact_num'];
		
		$query = "INSERT INTO customers(fname, lname, contact_num) VALUES ('$fname', '$lname','$contact_num')";

		$result = mysqli_query($sql, $query);
		if($result){
			header("Location: customers.php");
		}else{
			echo ("Problem with SQL");
		}
	}
?>