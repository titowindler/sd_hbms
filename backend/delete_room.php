<?php 
require('config.php');

$conn = connect();


$id = $_GET['delete'];

$sql = "DELETE FROM room WHERE room_id = '$id' ";
$result = mysqli_query($conn,$sql);

 if($result == true) {
 header("location:../hotel/manage_booking.php");
 }else{	
 	echo mysqli_error($conn);	
 }
?> 