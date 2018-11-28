<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 

function dreamList () {
	$conn = myConnect();

	if (isset($_GET['letter'])) {
		$letter = $_GET['letter'];
		$sql = "SELECT * FROM survey_dream WHERE dream_name LIKE '".$letter."%'";
		$result = mysqli_query($conn,$sql);
		return $result;
	}

	$sql = "SELECT * FROM survey_dream";
	$result = mysqli_query($conn,$sql);
	return $result;
}

?>