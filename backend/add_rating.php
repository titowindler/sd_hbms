<?php 
require('config.php');

$conn = connect();


$book_id = $_POST['bookID'];

$room_id  = $_POST['roomID'];
$guest_id = $_POST['guestID'];
$comment  = $_POST['comment'];
$rate     = $_POST['rate'];

$sql = "INSERT INTO `rating` (rating_id,guest_id,room_id,comment,rate,rating_status)
            VALUES(NULL,'$guest_id','$room_id','$comment','$rate','1')";       
$result = mysqli_query($conn,$sql);


$sqlUpdate = "UPDATE book SET `book_status` = '3' WHERE `book_id` = '$book_id' ";
$resultUpdate = mysqli_query($conn,$sqlUpdate);


 if($result == true) {
 	header("location:../guest/manage_bookrooms.php");
 } else {	
 	echo mysqli_error($conn);	
 }

?> 