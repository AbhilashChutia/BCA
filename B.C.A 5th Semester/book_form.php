<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " INSERT INTO `booking`(`name`, `email`, `username`, `password`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name','$email','$username','$password','$phone','$address','$location','$guests','$arrivals','$leaving')";

    if ($connection->query($request) == true) {
        $insert = true;
    } else {
        echo "ERROR: sql <br> $connection->error";
    };

    // Close the database connection

    $connection->close();

    header('location:book.php');
} else {
    echo 'something went wrong. try again';
};
