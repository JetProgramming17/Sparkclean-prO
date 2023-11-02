<?php
@include 'config.php';

session_start();

if (isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $sql = "DELETE FROM book_form WHERE id=$id";
    mysqli_query($conn, $sql);

}

header('location:cleaner_page.php');
exit;
?>