<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$comments = $_POST['comments'];

// Insert the data into the database
$sql = "INSERT INTO reservations (name, email, phone, date, time, guests, comments)
        VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
