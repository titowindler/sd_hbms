<?php

require('../backend/config.php');

$hotel_id = $_GET['hotel'];

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
              <form name="admin" method="post" action="../backend/add_room.php" enctype="multipart/form-data" >
                <div class="col-md-6">

                <input type="hidden" value="<?php echo $hotel_id ?>" name="hotelID">

                    <div class="page-head-line">Add Room</div>

                    <label>Room Picture</label>
                        <input type="file" name="image" class="form-control" required/>
                    <br>

                    <label>Room Name</label>
                        <input type="text" name="room_name" class="form-control" required/>
                    <br>

                    <label>Room Price</label>
                        <input type="text" name="room_price" class="form-control" required/>
                    <br>

                    <label>Room Detail</label>
                        <input type="text" name="room_detail" class="form-control" required/>
                    <br>

                    <label>Location</label>
                        <input type="text" name="location" class="form-control" required/>
                    <br>

                
                    <button type="submit" name="submit" class="btn btn-success"> &nbsp;Submit</button>&nbsp;
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
