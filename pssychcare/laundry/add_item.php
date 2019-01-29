<?php
require ("db_connect.php");
	if(!empty($_POST['item_name'])){

		$item_name = $_POST['item_name'];
		$price_kilo = $_POST['price_kilo'];

		$query = "INSERT INTO items(item_name, price_kilo) VALUES ('$item_name', '$price_kilo')";

		$result = mysqli_query($sql, $query);
		if($result){
				echo '<script type="text/javascript">alert("Item Successfully Added!")</script>';
		}else{
			echo mysql_error();
		}

	    echo "<script>window.history.go(-1);</script>";
	}
?>