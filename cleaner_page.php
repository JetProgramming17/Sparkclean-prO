<?php

@include 'config.php';

if (isset($_GET['id'])){

   $id = $_GET['id'];
   $delete = mysqli_query($conn,"DELETE FROM `book_form` WHERE `id`= '$id' ");

}

$query = "SELECT * FROM book_form";
$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">

   <title>admin page</title>

   <!-- custom css file link  -->

</head>
<body class="bg-dark">
<section class="header">
   <a href="customer_page.php" class="logo">sparkly clean pro.</a>

   <nav class="navbar">
      <a href="customer_page.php">Home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>  
<div class="container">
   <div class="row mt-5">
      <div class="col">
         <div class="card mt-5">
            <div class="card-header">
               <h2 class="display-6 text-center">Indoor Cleaning Bookings</h2>
            </div>
            <div class="card-body">
               <table class="table table-bordered text-center">
                  <tr class="bg-success text-white">
                     <td> Booking ID</td>
                     <td> Name</td>
                     <td> Email</td>
                     <td> Number</td>
                     <td> Address </td>
                     <td> Service Type </td>
                     <td> Number of Rooms </td>
                     <td> Date and Time </td>
                     <td> Finish </td>
                  </tr>
                  <?php

                   $num=mysqli_num_rows($result);
                   if ($num > 0){
                     while ($jet=mysqli_fetch_assoc($result)){
                        echo "

                           <tr>
                              <td> ".$jet['id']." </td>
                              <td> ".$jet['name']." </td>
                              <td> ".$jet['email']." </td>
                              <td> ".$jet['phone']." </td>
                              <td> ".$jet['address']." </td>
                              <td> ".$jet['service']." </td>
                              <td> ".$jet['rooms']." </td>
                              <td> ".$jet['datetime']." </td>
                              <td>
                                 <a href='cleaner_page.php?id=".$jet['id']."'  class='btn btn-primary'>Finish</a>
                              </td>
                           </tr>
                        ";
                     }
                   }
              
                  ?>
               </table>
            </div>
         </div>
      </div>
   </div>

</div>

<div class="container">
   <div class="row mt-5">
      <div class="col">
         <div class="card mt-5">
            <div class="card-header">
               <h2 class="display-6 text-center">Outdoor Cleaning Bookings</h2>
            </div>
            <div class="card-body">
               <table class="table table-bordered text-center">
                  <tr class="bg-success text-white">
                     <td> Booking ID</td>
                     <td> Name</td>
                     <td> Email</td>
                     <td> Number</td>
                     <td> Address </td>
                     <td> Service Type </td>
                     <td> Number of Rooms </td>
                     <td> Date and Time </td>
                     <td> Finish </td>
                  </tr>
                  <?php

                   $num=mysqli_num_rows($result);
                   if ($num > 0){
                     while ($jet=mysqli_fetch_assoc($result)){
                        echo "

                           <tr>
                              <td> ".$jet['id']." </td>
                              <td> ".$jet['name']." </td>
                              <td> ".$jet['email']." </td>
                              <td> ".$jet['phone']." </td>
                              <td> ".$jet['address']." </td>
                              <td> ".$jet['service']." </td>
                              <td> ".$jet['rooms']." </td>
                              <td> ".$jet['datetime']." </td>
                              <td>
                                 <a href='cleaner_page.php?id=".$jet['id']."'  class='btn btn-primary'>Finish</a>
                              </td>
                           </tr>
                        ";
                     }
                   }
              
                  ?>
               </table>
            </div>
         </div>
      </div>
   </div>

</div>
</body>
</html>