<?php

require('backend/config.php');

$roomID = $_GET['book'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hotel Booking Management System</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
              <form name="admin" method="post" action="backend/insert_bookroom.php">
                <div class="col-md-6">

                <input type="hidden" value="<?php echo $roomID ?>" name="roomID">

                    <div class="page-head-line">Please Input Your Information Here</div>

                    <label>Input Guest Name:</label>
                        <input type="text" name="fullname" class="form-control" required/>

                    <br>

                    <label>Input Guest Contact Number:</label>
                        <input type="text" name="contactnumber" class="form-control" required/>
                
                    <br>

                    <label>Start Day</label>
                        <input type="date" name="start" class="form-control" required/>
                    <br>

                    <label>End Day</label>
                        <input type="date" name="end" class="form-control" required/>
                    <br>

                    <button type="submit" name="submit" class="btn btn-success"> &nbsp;Submit</button>&nbsp;
                    <a href="view_available_rooms.php" class="btn btn-danger"> &nbsp;Cancel</a>&nbsp;
                </div>
                   </form>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
