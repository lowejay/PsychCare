<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 

function loadDream(){

	$conn = myConnect(); 
    $sql= "SELECT * FROM survey_dream";
    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;
}

?>