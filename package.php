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
   <title>package</title>

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

<div class="heading" style="background:url(https://images.unsplash.com/photo-1482449609509-eae2a7ea42b7?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
    <h1>Package</h1>
</div>


<!-- packages section starts -->

<section class="packages"> 
   <h1 class="heading-title">best services</h1>

   <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1610527003928-47afd5f470c6?auto=format&fit=crop&q=80&w=1472&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>indoor house cleaning</h3>
               <p>Indoor house cleaning is the essential process of tidying, sanitizing, and maintaining the interior of your home.
               It involves thorough cleaning of all living spaces, from the living room to the kitchen, from the living room to the kitchen including bedrooms,
               living rooms, kitchens, bathrooms, and more.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1558904541-efa843a96f01?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>outdoor house cleaning</h3>
               <p>Our outdoor house cleaning services are designed to restore the beauty and hygiene of your property's exterior. We specialize in
               cleaning and rejuvenating various outdoor including bedrooms, spaces to ensure they look their best and
               are well-maintained.
               </p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>


         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1558778909-1d4ea850da7d?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>Apartment cleaning</h3>
               <p>Our Apartment Cleaning Service Is Designed To Make Your Living Space. We Simply Values A Spotless Environment. We Can Clean Every Corner Of Your Apartment,
                From The Living Room To The Kitchen, Bedrooms, And As Not To Forget About Your Own Bathrooms,
                And As Not To Forget About Your Own Bathrooms.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1607227063002-677dc5fdf96f?auto=format&fit=crop&q=80&w=1374&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>Moving in/out</h3>
               <p>Let us take the stress out of your next move or storage adventure with our professional
               packing services. Our experienced team knows the art of packing inside and out, ensuring
               that your valuable belongings are carefully and securely wrapped and boxed.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1615041611611-e53c16da999b?auto=format&fit=crop&q=80&w=1541&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>Car wash</h3>
               <p>Our car wash service is your vehicle's gateway to a sparkling, showroom-worthy appearance. 
               We offer a range of car wash options, from basic  packing inside,  packing inside exterior washes to premium packages that
               leave your car spotless inside and out.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="https://images.unsplash.com/photo-1585676737728-432f58d5fdba?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="content">
               <h3>Paint Job</h3>
               <p>Transform your home with a fresh coat of paint from our expert team. Our home painting
                  services are your key to a stunning, personalized living space. Whether you're looking to refresh a
                  single room or give your entire home a new look, we've got you covered.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
      
   </div>



   <div class="load-more"><span class="btn">load more</span></div>
   
</section>

<!-- packages section ends -->








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
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script/script.js"></script>
</body>
</html>