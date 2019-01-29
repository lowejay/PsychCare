<?php
	$sql = mysqli_connect("localhost", "root", "", "laundry");

	if(!$sql){
		echo "Error Connecting to Database";
		exit();
	}
?>