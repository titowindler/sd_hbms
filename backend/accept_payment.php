<?php 
require('config.php');

$conn = connect();


$id = $_GET['accept'];

$sql = "UPDATE book SET book_status = '2' WHERE book_id = '$id' ";
$result = mysqli_query($conn,$sql);

 if($result == true) {
 header("location:../hotel/manage_booking.php");
 }else{	
 	echo mysqli_error($conn);	
 }
?> 