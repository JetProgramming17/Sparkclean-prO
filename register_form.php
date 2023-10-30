<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM customer_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(strlen($pass)&& strlen($cpass) >= 8){

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO customer_form(name, email, password, user_type, status) VALUES('$name','$email','$pass','$user_type','pending')";
         mysqli_query($conn, $insert);
         $error[] = 'Your account is waiting for approval';
         header('location:login_form.php');
      }
   }
} else {
   $error[] = 'password too short! 8 characters';
}
 

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      
   <img src="Lilac and Dark Green Bold Typographic Cleaning Services Logo.png" alt="logo"/>

      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password" >
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="customer">customer</option>
         <option value="admin">cleaner</option>
         <option value="manager">admin</option>

      </select>
      <input type="submit" name="submit" value="register" class="form-btn">
      <p>already have an account? <a href="login_form.php">login</a></p>
   </form>

</div>

</body>
</html>