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
   <title>about</title>

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
      <a href="logout.php" class="logo">Hi <?php echo $_SESSION['customer_name'] ?>!</a>
      <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>   

<!-- Header section ends-->

<div class="heading" style="background:url(https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
    <h1>about us</h1>
</div>

<!-- about section starts -->

<section class="about">

   <div class="image">
      <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Choosing us means choosing excellence in cleaning services. We stand out for our unwavering commitment
      to your satisfaction. Our experienced team uses eco-friendly products an
      d a meticulous approach to ensure every nook and cranny is spotless.</p>
      <p>We offer customized solutions to fit your unique needs, and
      our competitive pricing makes top-tier cleaning accessible to all.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>best packages</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable prices </span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service </span>
         </div>
      </div>
   </div>

</section>


<!-- about section end -->

<!-- reviews section starts -->

<section class="reviews">

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">
      <div class="swiper-slider slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Your feedback matters! At Sparkly clean pro,
            we value your opinion and are committed to providing the best service possible. Please take a moment to rate our work. 
            Your input helps us maintain our high standards and continually improve.</p>
            <h3><?php echo $_SESSION['customer_name'] ?>!</h3>
            <span>customer</span>
            <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>

      <div class="swiper-slider slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
         </div>
         <p>Your feedback matters! At Sparkly clean pro,
         we value your opinion and are committed to providing the best service possible. Please take a moment to rate our work. 
         Your input helps us maintain our high standards and continually improve.</p>
         <h3><?php echo $_SESSION['customer_name'] ?>!</h3>
         <span>customer</span>
         <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>

      <div class="swiper-slider slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>we value your opinion and are committed to providing the best service possible. Please take a moment to rate our work. 
         Your input helps us maintain our high standards and continually improve.</p>
         <h3><?php echo $_SESSION['customer_name'] ?>!</h3>
         <span>customer</span>
         <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>

      <div class="swiper-slider slide">
         <div class="stars">
            <i class="fas fa-star"></i>
         
         </div>
         <p>No comment</p>
         <h3><?php echo $_SESSION['customer_name'] ?>!</h3>
         <span>customer</span>
         <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
         
      <div class="swiper-slider slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>Great service</p>
         <h3><?php echo $_SESSION['customer_name'] ?>!</h3>
         <span>customer</span>
         <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?auto=format&fit=crop&q=80&w=1385&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
   </div>
     
   



</section>

<!-- reviews section end -->






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