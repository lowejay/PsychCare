<?php

function myConnect(){
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db ="psychcare";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn) {
		die("Connection to database failed: " . mysqli_connect_error());
	}else{
		//echo "Connected successfully";	
	}
	return $conn;
}

?>