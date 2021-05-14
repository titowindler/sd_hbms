<?php 
require('config.php');

$conn = connect();

$fullname = strtolower($_POST['fullname']);

$contactnumber = $_POST['contactnumber'];
$start = $_POST['start'];
$end = $_POST['end'];
$roomID = $_POST['roomID'];

$sql = "INSERT INTO `guest` (guest_id,user,pass,fullname,contactnumber)
            VALUES(NULL,'$fullname','$fullname','$fullname','$contactnumber')";
       
$result = mysqli_query($conn,$sql);
$last_id = mysqli_insert_id($conn);

$sqlBookRoom = "INSERT INTO book (book_id,guestID,roomID,start_day,end_day,book_status) VALUES (NULL,'$last_id','$roomID','$start','$end','0') ";
$resultBookRoom = mysqli_query($conn,$sqlBookRoom);

 if($resultBookRoom == true) {
 header("location:../index.php");
 }else{	
 	echo mysqli_error($conn);	
 }
?> 