<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wedding_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $guests = intval($_POST['guests']);

    $sql = "INSERT INTO rsvp (name, email, guests) VALUES ('$name', '$email', '$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for confirming, $name! 🎉";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
