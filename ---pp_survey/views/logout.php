<?php session_start();
function unsetSesh(){

	session_unset();
	session_destroy(); 
}


unsetSesh();

header("Location: ../index.php");
?>