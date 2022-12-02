<!-- Connecting -->
<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "book";

$connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!-- CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Header -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="homepage.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="login.php">login</a>
        </nav>
    </section>

    <div class="heading" style="background:url(images/heading.png) no-repeat">
        <h1>welcome to india</h1>
    </div>

    <?php
    if (!empty($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $result = mysqli_query($connection, "SELECT * FROM booking WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: login.php");
    }
    ?>

    <!-- Output -->
    <section class="container">
        <div class="output">
            <h1>welcome <?php echo $row["name"]; ?></h1>
        </div>
        <div class="output">
            <h1>email: <?php echo $row["email"]; ?></h1>
        </div>
        <div class="output">
            <h1>username: <?php echo $row["username"]; ?></h1>
        </div>
        <div class="output">
            <h1>password: <?php echo $row["password"]; ?></h1>
        </div>
        <div class="output">
            <h1>phone: <?php echo $row["phone"]; ?></h1>
        </div>
        <div class="output">
            <h1>address: <?php echo $row["address"]; ?></h1>
        </div>
        <div class="output">
            <h1>location: <?php echo $row["location"]; ?></h1>
        </div>
        <div class="output">
            <h1>guests: <?php echo $row["guests"]; ?></h1>
        </div>
        <div class="output">
            <h1>arrivals: <?php echo $row["arrivals"]; ?></h1>
        </div>
        <div class="output">
            <h1>leaving: <?php echo $row["leaving"]; ?></h1>
        </div>
        <div class="btn">
            <a href="logout.php">logout</a>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Access</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of service</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-789</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"> <i class="fas fa-envelope"></i> assamtourism@rediff.mail</a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india 400400</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit"> created by <span>students of jb college</span> | all rights reserved!</div>
    </section>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</body>

</html>