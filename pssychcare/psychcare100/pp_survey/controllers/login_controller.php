<?php require('db_connect.php');?>
<?php require('session_controller.php');?>
<?php
	$conn = myConnect();

	if(isset($_POST['btnLoginSubmit'])){  //with or without value, value should inisde (name=)

	$loginID =  mysqli_real_escape_string($conn,$_POST['loginID']);
	$loginpassword = mysqli_real_escape_string($conn,$_POST['loginPassword']);
	$salt = "sAlTyTeXt";
	
    	$sql = "SELECT * FROM data_student WHERE student_ID = '$loginID' AND student_Password = SHA2(CONCAT('$loginpassword','$salt'),512) LIMIT 1"; //query statement
		$result= mysqli_query($conn,$sql);

			if (mysqli_num_rows($result) == 0){
	    	?>
				<script type="text/javascript">
				window.location = "../index.php"
				window.alert("Incorrect ID or Password");			
				</script>
			<?php 
			}else{ 
				while($row = mysqli_fetch_assoc($result)) {

				setStuSess($row['student_ID'],$row['student_FN'],$row['student_LN'],$row['student_Email'],$row['student_Contact'],$row['user_Privilege'],$row['student_Password']);
				
				header('Location: ../a.category/category.php');
				}
			}
			mysqli_close($conn);

	}
?>