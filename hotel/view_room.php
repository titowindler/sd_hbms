<?php

require('../backend/config.php');


error_reporting(0);

$conn = connect();

$roomID = $_GET['room'];

$guestID = $_GET['guest'];

$sqlFetch = "SELECT * FROM rating WHERE guest_id = '$guestID' OR room_id = '$roomID' ";
$resultFetch = mysqli_query($conn,$sqlFetch);

$rowFetch = mysqli_fetch_assoc($resultFetch);

$comment = $rowFetch['comment'];
$rate = $rowFetch['rate'];

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
              <form name="admin" method="post" action="../backend/insert_rating.php">
                <div class="col-md-6">

                <input type="hidden" value="<?php echo $roomID ?>" name="roomID">

                <input type="hidden" value="<?php echo $guestID ?>" name="guestID">

                    <div class="page-head-line">Room Rating</div>

                    <label>Comment</label>
                      <?php echo $comment ?>
                    <br>

                    <label>Rating</label>
                      <?php echo $rate ?>
                    <br>

                
                    <a href="manage_booking.php" class="btn btn-danger"> &nbsp;Cancel</a>&nbsp;
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
