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
    <!-- LOGO HEADER END-->
     <?php include('../includes/menubar.php');
     
     $hotel_name = $_SESSION['hotel_name'];
     $hotel_id = $_SESSION['hotel_id'];


     ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
        <!-- LOGIN SUCCESS-->
        <?php 
          if (isset($_GET['loginSuccess'])) {
            $loginSuccess = $_GET['loginSuccess'];
              echo '<div class="alert alert-success text-center">';
              echo '<button class="close" data-dismiss="alert">X</button>';
              echo $loginSuccess;
              echo '</div>';
          }
        ?>
        <!-- EVENT SUCCESS-->
        <?php 
          if (isset($_GET['eventSuccess'])) {
            $eventSuccess = $_GET['eventSuccess'];
              echo '<div class="alert alert-success text-center">';
              echo '<button class="close" data-dismiss="alert">X</button>';
              echo $eventSuccess;
              echo '</div>';
          }
        ?>  
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Dashboard</h1>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h1>Welcome Back, Hotel!</h1></br>
                  </br></br>
                </div>
                <div class="col-md-6">  
                  <label>Hotel Name:</label>
                  <h3><?php echo $hotel_name?></h3>
                  </br></br>
                </div>
                
                   <!-- MENU SECTION END-->
     <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE BOOKINGS</h1>
                    </div>
                </div>
                <div class="row">
                 <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List of Bookings
                        </div>
                        <!-- /.panel-heading -->
                        <table class="table table-bordered" id="productTables" width="100%" cellspacing="0">
                      <thead>
                            <tr>
                              <th>Room Picture</th>
                              <th>Room Name</th>
                              <th>Room Price</th>
                              <th>Room Details</th>
                              <th>Location</th>
                              <th>Actions</th>      
                            </tr>
                          </thead>
                          <tbody>
                          <?php 

                          $conn = connect();

                          $sql = "SELECT * FROM book 
                          JOIN room ON book.roomID = room.room_id
                          JOIN hotel ON room.hotel_id = hotel.hotel_id
                          WHERE room.hotel_id = '$hotel_id'
                          ";
                          $result = mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_assoc($result)) {
                              
                                echo "<tr>";
                                 if ($row['room_picture'] == NULL || $row ['room_picture']== ""){
                                            $img="";
                                            }else{
                                            $img = "<img src ='../ticketphoto/{$row['room_picture']}' height='100px' width='100px'>" ;
                                            }
                                      echo "<td align='center'>{$img}</td>"; 
                                      echo "<td>{$row['room_name']}</td>";
                                      echo "<td>{$row['room_price']}</td>";
                                      echo "<td>{$row['room_detail']}</td>";
                                      echo "<td>{$row['location']}</td>";
                                
                              if($row['book_status'] == '1') {      
                                echo "<td><a class='btn btn-info btn-small' href='../backend/accept_payment.php?accept={$row['book_id']}'>ACCEPT PAYMENT</a>";
                                echo "</td>";
                              }

                              if($row['book_status'] == '2') {      
                                echo "<td>";
                                echo "</td>";
                              }

                              if($row['book_status'] == '3') {      
                                echo "<td><a class='btn btn-primary btn-small' href='view_room.php?guest={$row['guestID']}&room={$row['roomID']}'>VIEW RATING</a>";
                                echo "</td>";
                              }


                                echo "</center>";
                           }
                        ?>
                          </tbody>
                        </table>
                    </div>
                 </div>
               </div>
              </div>
            </div>

                             <!-- MENU SECTION END-->
     <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ROOMS</h1>
                    </div>
                </div>
                <div class="row">
                 <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List of Available Rooms
                           <br>
                           <a href="add_room.php?hotel=<?php echo $hotel_id?>" class="btn btn-success">ADD ROOMS</a>
                        </div>
                        <!-- /.panel-heading -->
                        <table class="table table-bordered" id="productTables" width="100%" cellspacing="0">
                      <thead>
                            <tr>
                              <th>Room Picture</th>
                              <th>Room Name</th>
                              <th>Room Price</th>
                              <th>Room Details</th>
                              <th>Location</th>
                              <th>Actions</th>      
                            </tr>
                          </thead>
                          <tbody>
                          <?php 

                          $conn = connect();

                          $sql = "SELECT * FROM room 
                          WHERE room.hotel_id = '$hotel_id'
                          ";
                          $result = mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_assoc($result)) {
                              
                                echo "<tr>";
                                 if ($row['room_picture'] == NULL || $row ['room_picture']== ""){
                                            $img="";
                                            }else{
                                            $img = "<img src ='../ticketphoto/{$row['room_picture']}' height='100px' width='100px'>" ;
                                            }
                                      echo "<td align='center'>{$img}</td>"; 
                                      echo "<td>{$row['room_name']}</td>";
                                      echo "<td>{$row['room_price']}</td>";
                                      echo "<td>{$row['room_detail']}</td>";
                                      echo "<td>{$row['location']}</td>";
                                
                                echo "<td>
                                   <a class='btn btn-danger btn-small' href='../backend/delete_room.php?delete={$row['room_id']}'>DELETE</a>";
                                echo "</td>";
                        
                
                                echo "</center>";
                           }
                        ?>
                          </tbody>
                        </table>
                    </div>
                 </div>
               </div>
              </div>
            </div>


          
              </div>

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

