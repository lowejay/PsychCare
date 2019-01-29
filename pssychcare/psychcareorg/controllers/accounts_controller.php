<?php require_once('db_connect.php');?>

<?php
		if(isset($_POST['btnAddEmp'])){
			newEmp();
		}
		if(isset($_POST['btnAddStudent'])){
			newStudent();
		}
?>

<?php
function newEmp(){
	$conn = myConnect();

	$id = mysqli_real_escape_string($conn,$_POST['idnumber']);
	$fname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$password = $_POST['password'];
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	//check for existing Credentials
	//$sql_us = "SELECT * FROM user WHERE user_ID='$id'";
  	//$sql_em = "SELECT * FROM user WHERE user_Email='$email'";
  	//$result_us = mysqli_query($conn, $sql_us);
  	//$result_em = mysqli_query($conn, $sql_em);

  	//if (mysqli_num_rows($result_us) > 0) {
  	//  $name_error = "Your user ID has already been registered"; 	
  	//}else if(mysqli_num_rows($result_em) > 0){
  	//  $email_error = "Email has already taken"; 	
  	//}else{

		$sql = "INSERT INTO employee_data(emp_ID, emp_FN, emp_LN, emp_Email, emp_Password) VALUES 
								('$id','$fname','$lname','$email', SHA2(CONCAT('$password','$id'),512))";

		$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../views/login.php");
		}else{
			echo "Unexpected Error! ".mysqli_error($conn);
		}
	//}
}