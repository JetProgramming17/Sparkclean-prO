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

<script src="script.js"></script>
</body>
</html>