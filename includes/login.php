<?php require('config.php'); ?>
<?php require('session.php'); ?>

<?php

if(isset($_POST['submit'])){
	login();
}

function login(){
	$username=$_POST['username'];
	$password=$_POST['password'];
	// $password= md5($_POST['user_pass']);
	$secret = "secretAdmin";
	$conn = mysqli_connect("localhost", "root", "", "xtravrt");

	$sql = "SELECT * FROM promoters WHERE username='$username' AND password='$password' LIMIT 1";
	$result = mysqli_query($conn,$sql);
	// var_dump($result);
	if (mysqli_num_rows($result) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {
			setSession($row['pid'],$row['username'],$row['owner_firstname'],$row['owner_lastname'],$secret);
			$str = "Login Successfully";
			header('Location:../dashboard.php?loginSuccess='. $str);
		}
	} else {
		$str = "Invalid Username/Password";
		header('Location:../index.php?accountFail='. $str);
	}
	mysqli_close($conn);
  }
?>
