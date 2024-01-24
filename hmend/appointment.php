<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establish database connection
$server = "localhost:3305";
$username = "root";
$password = "admin";
$dbname = "hmend";
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$full_name = $_POST['full_name'];
$email_address = $_POST['email_address'];
$zip_code = $_POST['zip_code'];
$message = $_POST['message'];

// Prepare and execute SQL statement for appointment table
$sql1 = "INSERT INTO appointment (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";
if (mysqli_query($conn, $sql1)) {
    echo "Appointment submitted successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

// Prepare and execute SQL statement for free_appointment table
$sql2 = "INSERT INTO free_appointment (full_name, email_address, zip_code, message) VALUES ('$full_name', '$email_address', '$zip_code', '$message')";
if (mysqli_query($conn, $sql2)) {
    echo "Message submitted successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
