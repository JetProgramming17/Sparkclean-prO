<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['customer_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>booking</title>

   <!-- swiper css link-->
   <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
   <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- custom css link-->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Header section starts-->
<section class="header">
   <a href="customer_page.php" class="logo">sparkly clean pro.</a>

   <nav class="navbar">
      <a href="customer_page.php">Home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="logout.php" class="logo">Hi <span><?php echo $_SESSION['customer_name'] ?>!</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>   

<!-- Header section ends-->

<div class="heading" style="background:url(https://images.unsplash.com/photo-1563453392212-326f5e854473?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
    <h1>book now</h1>
</div>

<!-- booking section starts-->

<section class="booking">

    <h1 class="heading-title">book your service!</h1>
      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter email address" name="email">
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter phone number" name="phone">
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter home address" name="address">
            </div>
            <div class="inputBox">
               <span>service type :</span>
               <input type="text" placeholder="enter service" name="service" value="Indoor Cleaning">
            </div>
            <div class="inputBox">
               <span>number rooms :</span>
               <input type="number" placeholder="number of rooms" name="rooms">
            </div>
            <div class="inputBox">
               <span>date :</span>
               <input type="datetime-local" placeholder="service date" name="date">
            </div>
         </div>

         <input type="submit" value="book" class="btn" name="send">
      </form>
</section>


<!-- booking section ends-->






<!-- footer section starts -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="customer_page.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

      </div>

      <div class="box">
         <h3>Contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +27-60-972-8427</a>
         <a href="#"> <i class="fas fa-envelope"></i> chezathadi4@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> gauteng, pretoria - central</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkin</a>
      </div>
   </div>

   <div class="credit"> created by <span>Tshedza Mathada</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->


<!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="js/script.js></script>
</body>
</html>