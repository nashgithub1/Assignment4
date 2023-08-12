<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the most extraordinary hotel website">
    <meta name="keywords" content="Hotel,Sri lankanHotel,Hotel Blushie">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="./css/mobile.css">
    <script src="https://kit.fontawesome.com/b8b325b13d.js" crossorigin="anonymous"></script>
    <title>Nash Cafe</title>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="index.html"><span class="text-primary">Nash</span> Cafe</a></h1>
                <ul>
                    <li><a class="current" href="index.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="Reservation.html">Reservation</a></li>
                </ul>
            </div>
        </nav>
        <div id="showcase">
            <div class="container">
                <div class="showcase-content">
                    <h1><span class="text-primary">Nash</span> Cafe</h1>
                    <p class="lead"><b>Make your day memorable with a cup of Coffee</b></p>
                    <a class="btn" href="About.html">About Nash Cafe</a>
                </div>
            </div>
        </div>
    </header>
    <section id="home-info" class="bg-dark">
        <div class="info-img"></div>
        <div class="info-content">
            <h1><span class="text-primary">The History</span> of Nash Cafe</h1>
            <p>Nash Cafe is located in Kattankudi, 10 km from Batticaloa town. It is set in front of Kattankudy beach.
                So you can enjoy a beach view with a cup of Coffee. And also with some snacks and baked foods, Nash Cafe
                offers tables for party arrangements too. Also, you can book tables before coming. We provide free WiFi
                too.</p>
            <a href="#" class="btn btn-light">Read more </a>
        </div>
    </section>
    <section id="features">
        <div class="box bg-light">
            <img src="location.jpeg" alt="Image of a google map">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Great Location</h3>
            <p>In front of Beach and offer a clear beach view</p>
        </div>
        <div class="box bg-primary">
            <img src="table.webp" alt="a set of reserve">
            <i class="fas fa-utensils fa-3x"></i>
            <h3>Reserve Food & Tables</h3>
            <p>You can reserve food and tables for your special occasions.</p>
        </div>
        <div class="box bg-light">
            <img src="fitness1.jpg" alt="fitness room">
            <i class="fas fa-dumbbell fa-3x"></i>
            <h3>Fitness Room</h3>
            <p>A beautiful fitness room to keep your body fit</p>
        </div>
    </section>
    <div class="clr"></div>

<!-- ... Existing HTML code ... -->

<section id="user-opinion">
    <div class="container">
        <h2>User Opinions</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" required></textarea>
            
            <button type="submit" name="submit" >Submit Opinion</button>
        </form>
    </div>
</section>

<!-- ... Existing HTML code ... -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $comment = $_POST["comments"];

// Database connection
$servername = "localhost"; 
$username_db = "root";
$password_db = ""; 
$dbname = "nashcafe_main"; 

$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    }

    // Insert data into the database
    $sql = "INSERT INTO opinions (username, email, comment) VALUES ('$username', '$email', '$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "fine ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>



<footer class="main-footer">
    <p>Nash Cafe &copy; 2023 | All Rights Reserved By Mohamed Nashath</p>
</footer>




    <script src="./js/script.js"></script>
</body>

</html>
