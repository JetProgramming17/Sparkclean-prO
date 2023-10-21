<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['cleaner_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
   <div class="content">
   <img src="Lilac and Dark Green Bold Typographic Cleaning Services Logo.png" alt="logo" height ="150px"/>


      <h3>hi, <span>Cleaner</span></h3>
      <h1>welcome <span><?php echo $_SESSION['cleaner_name'] ?></span></h1>
     

      </P>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>