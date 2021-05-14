<?php

session_start();


function setSession($id,$username,$fname,$lname,$secret){
	
	$_SESSION["pid"] =$id;
	$_SESSION["username"] =$username;
	$_SESSION["owner_firstname"]=$fname;
	$_SESSION["owner_lastname"]=$lname;
	$_SESSION["secret"]=$secret;
}

function unsetSession(){
	session_unset();
	session_destroy(); 
}

?>