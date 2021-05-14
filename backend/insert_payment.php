<?php 
require('config.php');

$conn = connect();



$bookID = $_POST['bookID'];
$payment = $_POST['payment'];

$sql = "INSERT INTO `payment` (payment_id,bookID,total_payment,payment_status)
            VALUES(NULL,'$bookID','$payment','1')";
$result = mysqli_query($conn,$sql);

$sqlUpdate = "UPDATE book SET book_status = '1' WHERE book_id = '$bookID' ";
$resultUpdate = mysqli_query($conn,$sqlUpdate);

 if($result == true) {
 header("location:../guest/manage_bookrooms.php");
 }else{	
 	echo mysqli_error($conn);	
 }
?> 