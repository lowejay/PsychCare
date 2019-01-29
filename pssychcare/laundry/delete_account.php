<?php
	require ("db_connect.php");
	session_start();

	$query = "DELETE FROM admin WHERE id = '".$_SESSION['admin_user']."'";
	$result = mysqli_query($sql, $query);
	if($result){
		echo '<script type="text/javascript">alert("Successfully deleted the account!")</script>';
	}else{
		echo mysql_error();
	}
    echo "<META http-equiv=\"refresh\" content=\"0;URL=index.php\">";
?>
