<?php require('db_connect.php');?>
<?php require('session_controller.php');?>
<?php

	if(isset($_POST['btnLoginSubmit'])){  //with or without value, value should inisde (name=)

	$loginEmail=$_POST['loginEmail'];
	$loginpassword=$_POST['loginPassword'];
	$conn = myConnect();
	$sql = "SELECT * FROM user WHERE user_Email= '$loginEmail' AND password = '$loginpassword' LIMIT 1"; //query statement
	$result= mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) == 0){
    	
    	?>
			<script type="text/javascript">
			window.location = "../views/login.php"
			window.alert("Username or Password is incorrect.");			
			</script>
		<?php
		
	}else{ 
		while($row = mysqli_fetch_assoc($result)) {

		setSesh($row['user_ID'],$row['user_FN'],$row['user_LN'],$row['user_Email'],$row['user_Phone'],$row['password'],$row['user_Privilege']);
		
		header('Location: redirect_controller.php');
		}
			
	}
	mysqli_close($conn);
}