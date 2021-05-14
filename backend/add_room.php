<?php 
require('config.php');

$conn = connect();


$hotel_id  		= $_POST['hotelID'];
$room_name	 	= $_POST['room_name'];
$room_price  	= $_POST['room_price'];
$room_detail    = $_POST['room_detail'];
$location       = $_POST['location'];


$number = '1';
$filename = '';
	//check if file uploaded exists and there are no errors during upload
	if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
		if($_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/jpeg") {
			if($_FILES['image']['type'] < 10000000){
	//define the new location and name of the photo (images/1001_mypic.png)
			$filename = "../ticketphoto/" .$number."_".$_FILES['image']['name'];
	//tell PHP to move the file from where and to where
			move_uploaded_file($_FILES['image']['tmp_name'], $filename);	
			}
	   	 }
	  }

$sql = "INSERT INTO `room` (room_id,hotel_id,room_name,room_price,room_detail,location,room_picture)
            VALUES(NULL,'$hotel_id','$room_name','$room_price','$room_detail','$location','$filename')";
       
$result = mysqli_query($conn,$sql);

 if($result == true) {
  header("location:../hotel/manage_booking.php");
 }else{	
 	echo mysqli_error($conn);	
 }
?> 