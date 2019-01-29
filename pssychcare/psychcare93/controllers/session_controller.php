<?php session_start();

function setEmpSess($i,$fn,$ln,$ue,$uph,$upr,$p){

	$_SESSION["emp_ID"] =$i;
	$_SESSION["emp_FN"] =$fn;
	$_SESSION["emp_LN"] =$ln;
	$_SESSION["emp_Email"] =$ue;
	$_SESSION["emp_Phone"] =$uph;
	$_SESSION["emp_Privilege"] =$upr;
	$_SESSION["emp_Password"] =$p;
	

}

function setStuSess($i,$fn,$ln,$ue,$uph,$upr,$p){

	$_SESSION["student_ID"] =$i;
	$_SESSION["student_FN"] =$fn;
	$_SESSION["student_LN"] =$ln;
	$_SESSION["student_Email"] =$ue;
	$_SESSION["student_Phone"] =$uph;
	$_SESSION["user_Privilege"] =$upr;
	$_SESSION["student_Password"] =$p;
	$_SESSION["emp_Privilege"] = -1;
	

}

function unsetSesh(){

	session_unset();
	session_destroy(); 
}

?>