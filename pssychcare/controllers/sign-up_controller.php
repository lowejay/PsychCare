<?php require('db_connect.php');
	  require('session_controller.php');

	myConnect();

if(isset($_POST['btnSign-up'])){
	
		$id = $_POST['idnumber'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];

		$connection->query("INSERT INTO user(user_ID, user_FN, user_LN, user_Email, password) VALUES ('{$fname}','{$lname}','{$email}','{$address}','{$contact}','{$password}')");

		$connection->close();
		}
}