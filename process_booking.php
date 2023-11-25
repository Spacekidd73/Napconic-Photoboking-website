<?php
 error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['name'];
    $name = $_POST['date'];
 
   
    // Add your database connection and booking logic here
    // Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "process_booking";

// Create connection
$conn = new mysqli($servername, $username,$password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date= $_POST['date'];
    $name = $_POST['name'];

    // Escape user inputs for security
    $date = mysqli_real_escape_string($conn, $date);
    $name = mysqli_real_escape_string($conn, $name);

    // Insert booking data into the database
    $query = "INSERT INTO appointments (date, name) VALUES ('$date', '$name')";
$query_run=mysqli_query($conn, $query);


    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method";
}
    // For simplicity, let's just echo the details
    echo "Appointment booked for $name on $date";
} else {
    echo "Invalid request method";
}
?>
