<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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
        <h1>book now</h1>
    </div>

    <!-- Book -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" name="username" placeholder="Enter your username">
                </div>
                <div class="inputBox">
                    <span>password :</span>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" name="phone" placeholder="Enter your number">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="Enter your address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" name="location" placeholder="Enter your destination">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" name="guests" placeholder="Number of guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
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