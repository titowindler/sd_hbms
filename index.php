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
                <div class="col-md-12">
            <form name="admin" method="post" action="backend/login.php">
                <div class="col-md-6">
                    <div class="page-head-line">Please Login Here </div>
    <?php 
      if (isset($_GET['accountSuccess'])) {
        $accountSuccess = $_GET['accountSuccess'];
          echo '<div class="alert alert-success text-center">';
          echo '<button class="close" data-dismiss="alert">X</button>';
          echo $accountSuccess;
          echo '</div>';
      }
    ?> 

<?php 
      if (isset($_GET['accountFail'])) {
        $accountFail = $_GET['accountFail'];
          echo '<div class="alert alert-danger text-center">';
          echo '<button class="close" data-dismiss="alert">X</button>';
          echo $accountFail;
          echo '</div>';
      }
    ?> 
                     <label>Enter Username:</label>
                        <input type="text" name="username" class="form-control"  />
                        <label>Enter Password :  </label>
                        <input type="password" name="password" class="form-control"  />
                       <br>
                      <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="submit" class="btn btn-info"> Login </button>&nbsp;
                        <a href="view_available_rooms.php" class="btn btn-success">Click Here To View Available Rooms</a>
                    </div>
                  </div>
                </div>
            </form>
                </div>
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
