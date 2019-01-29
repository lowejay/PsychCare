<?php session_start();
function setSesh($i,$fn,$ln,$ue,$uph,$p,$upr){

	$_SESSION["user_ID"] =$i;
	$_SESSION["user_FN"] =$fn;
	$_SESSION["user_LN"] =$ln;
	$_SESSION["user_Email"] =$ue;
	$_SESSION["user_Phone"] =$uph;
	$_SESSION["password"] =$p;
	$_SESSION["user_Privilege"] =$upr;

}
function unsetSesh(){

	session_unset();
	session_destroy(); 
}

?>