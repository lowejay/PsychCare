<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 
	if(isset($_POST['btnResultSubmit'])){
		addResult();
	}

function loadDisorder(){

	$conn = myConnect(); 
    $sql= "SELECT * FROM survey_disorder LIMIT 10";
    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
	}

	if($rows == 0){
		 echo "Unexpected Error! ".mysqli_error($conn);
	}
	else{
		return $rows;
	}
			
}


?>