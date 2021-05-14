<?php 

require("config.php");
session_start();


if(isset($_POST['submit'])) {
    login();
}

function login() {
$found = 0;
$str = "Invalid Username or Password!";

if(isset($_POST['username']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $conn = connect();
    

  //Fetches from Guest
    $sql = "SELECT * FROM guest WHERE (`user` LIKE '$user') AND (`pass` LIKE '$pass')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['guest_id'] = $row['guest_id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['userType'] = 1;
        $found = 1;
        header('location:../guest/manage_bookrooms.php'); 
    }
        

    //Fetches from Hotel
    $sql = "SELECT * FROM hotel WHERE (`user` LIKE '$user') AND (`pass` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['hotel_id'] = $row['hotel_id'];
        $_SESSION['hotel_name'] = $row['hotel_name'];
        $_SESSION['userType'] = 2;
        $found = 1;
       header('location:../hotel/manage_booking.php');
     }

    if($found != 1){
        echo "fail";
     header('location:../index.php?danger-invalid='.$str);
    } 
  }
}

?>

