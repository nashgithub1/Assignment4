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
        header("Location: thank_you.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank You for Your Opinion">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Thank You</title>
</head>
<body>
    <div id="thank-you">
        <div class="container">
            <h2>Thank You!</h2>
            <p>Your opinion has been submitted. We appreciate your feedback and we'll try to contact you.</p>
            <a href="index.php" class="return-button">Return to Homepage</a>
        </div>
    </div>
</body>
</html>

