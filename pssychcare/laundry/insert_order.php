<?php
require ("db_connect.php");
	if(!empty($_POST['date_today'])){

		$date_today = $_POST['date_today'];
		$pick_up_date = $_POST['pick_up_date'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$contact_no = $_POST['contact_no'];

		$total_payment = 0;
		for($x=0; $x < count($_POST['price_kilo']); ++$x){
			$total =($_POST['price_kilo'][$x] * $_POST['kilo'][$x]);

			$total_payment += $total;
		}


		$query = "INSERT INTO orders(date_today, pick_up_date, fname, lname, contact_no, total_payment, status) VALUES ('$date_today', '$pick_up_date','$fname', '$lname', '$contact_no', '$total_payment', 'Pending')";

		$result = mysqli_query($sql, $query);
		

		$select_id = mysqli_query($sql, "SELECT id FROM orders ORDER BY id DESC LIMIT 1");

		while ($row=mysqli_fetch_array($select_id)){
			$id = $row['id'];
		}

		for($i=0; $i < count($_POST['item_name']); ++$i){

				$itemname = $_POST['item_name'][$i];
				$quantity = $_POST['quantity'][$i];

				$query_details = "INSERT INTO order_details(order_id, item_name, quantity) VALUES ('$id', '$itemname','$quantity')";

				$result_details = mysqli_query($sql, $query_details);
			}
		
		if($result_details){
			header("Location: bill.php");
		}else{
			echo ("Problem with SQL");
		}
	}
?>