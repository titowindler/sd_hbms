<?php
$conn = mysqli_connect("localhost", "root", "", "xtravrt");
if(!$conn){
	echo "Failed to connect to mysql/db!";
	exit();
}
?>