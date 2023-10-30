<?php

@include 'config.php';

session_start();



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


      <h3>sparkly clean for <span>admin</span></h3>
      <h1>welcome, configure users</h1>

      <table>
         <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>

         </tr>

         <?php 
            $query = "SELECT * FROM customer_form WHERE status = 'pending' ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
         ?>
         <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>
               <form action="admin_page.php" method ="POST">
                  <input type="hidden" name="id" value = "<?php echo $row['id'];?>"/>
                  <input type="submit" name="approve" value = "Approve"/>
                  <input type="submit" name="deny" value = "Deny"/>

               </form>
            </td>
         </tr>
      </table>
      
      <?php
            }
            ?>
     
   </div>
   
 
<?php 

if(isset($_POST['approve'])){
      $id = $_POST['id'];

      $select = "UPDATE customer_form SET status = 'approved' WHERE id = '$id'";
      $result = mysqli_query($conn, $select);
      
      
      echo "<script>alert('User approved'); window.location = 'admin_page.php'; </script>";
     
   }

   if(isset($_POST['deny'])){
      $id = $_POST['id'];

      $select = "DELETE FROM customer_form WHERE id = '$id'";
      $result = mysqli_query($conn, $select);
      
      
      echo "<script>alert('User Denied'); window.location = 'admin_page.php'; </script>";

   }
?>




</div>

</body>
</html>