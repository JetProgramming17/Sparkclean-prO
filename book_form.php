<?php
@include 'config.php';

session_start();

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $rooms = $_POST['rooms'];
    $date = $_POST['date'];

    $request = " INSERT INTO book_form(name, email, phone, address, service, rooms, datetime) values
    ('$name','$email', '$phone', '$address', '$service', '$rooms', '$date')";

    mysqli_query($conn, $request);

    header('location:book.php');
} else {
    echo 'something went wrong';
}

?>