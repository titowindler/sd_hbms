<?php

require('../backend/config.php');

$bookID = $_GET['pay'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hotel Booking Management System</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <?php include('../includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
              <form name="admin" method="post" action="../backend/insert_payment.php">
                <div class="col-md-6">

                <input type="hidden" value="<?php echo $bookID ?>" name="bookID">

                    <div class="page-head-line">Payment Form</div>

                    <label>Amount To Pay:</label>
                        <input type="text" name="payment" class="form-control" required/>
                    <br>

                
                    <button type="submit" name="submit" class="btn btn-success"> &nbsp;Submit</button>&nbsp;
                    <a href="manage_bookrooms.php" class="btn btn-danger"> &nbsp;Cancel</a>&nbsp;
                </div>
                   </form>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('../includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>
