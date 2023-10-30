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
   <title>Customer Home</title>

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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1549675613-d302ff605a5c?auto=format&fit=crop&q=80&w=1472&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) no-repeat">
               <div class="content">
                  <span>sparkly, shiney and affordable</span>
                  <h3>we have your house covered.</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1494458453337-e9062e968178?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) no-repeat">
               <div class="content">
                  <span>sparkly, shiney and affordable</span>
                  <h3>your apartment messy? we got you.</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

         <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1493135637657-c2411b3497ad?auto=format&fit=crop&q=80&w=1471&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) no-repeat">
               <div class="content">
                  <span>sparkly, shiney and affordable</span>
                  <h3>make moving out easy</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
</section>


<!-- home section ends  -->


<!-- Service section starts here -->

<section class="services">

   <h1 class="heading-title"> our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/house.png" alt="center">
         <h3>indoor</h3>
      </div>

      <div class="box">
         <img src="image/outside.png" alt="center">
         <h3>outdoor</h3>
      </div>

      <div class="box">
         <img src="image/apartment.png" alt="center">
         <h3>apartment</h3>
      </div>

      <div class="box">
         <img src="image/luggage.png" alt="center">
         <h3>moving out</h3>
      </div>

      <div class="box">
         <img src="image/carwash.png" alt="center">
         <h3>car wash</h3>
      </div>

      <div class="box">
         <img src="image/painting.png" alt="center">
         <h3>house paint</h3>
      </div>
   </div>

</section>


<!-- Service section ends here -->


<!-- Home about section starts -->

<section class="home-about">

   <div class="image">
      <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Welcome to Sparkly Clean Pro, your trusted partner in maintaining a clean and healthy environment for your home or business.
      At Sparkly Clean Pro, we are committed to exceeding your expectations through our top-notch 
      cleaning services, dedicated team, and a passion for making your spaces sparkle.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- Home about section ends -->


<!-- Home packages section starts -->

<section class="home-packages">

   <h1 class="heading-title"> our packages</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="https://images.unsplash.com/photo-1610527003928-47afd5f470c6?auto=format&fit=crop&q=80&w=1472&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
         </div>
         <div class="content">
            <h3>indoor house cleaning</h3>
            <p>Indoor house cleaning is the essential process of tidying, sanitizing, and maintaining the interior of your home.
            It involves thorough cleaning of all living spaces,from the living room to the kitchen including bedrooms,
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
            cleaning and rejuvenating various outdoor spaces to ensure they look their best and
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
            <p>Our apartment cleaning service is designed to make your living space. We simply values a spotless environment. We can
            clean every corner of your apartment, from the living room to the kitchen, bedrooms, 
            and as not to forget about your own bathrooms.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn"> load more</a></div>

</section>


<!-- Home packages section ends -->

<!-- Home offer section starts -->

<section class="home-offer">
   <div class="content">
      <h3>upto 30% off</h3>
      <p>When you choose both indoor and outdoor cleaning services with us, you're in for a treat. 
      We're excited to offer you an incredible deal with up to 30% off your total bill! That's right - you can now enjoy a spotless, 
      fresh interior while having your outdoor spaces gleaming too, all at a fraction of the cost.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>


<!-- Home offer section ends -->


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