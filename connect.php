<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    // Database connection
    $conn = mysqli_connect('localhost', 'root', '', 'simplilearn') 
        or die("Connection Failed: " . mysqli_connect_error());

    // Check required fields
    if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['bio'])) {

        // Sanitize inputs
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email    = mysqli_real_escape_string($conn, $_POST['email']);
        $phone    = mysqli_real_escape_string($conn, $_POST['phone']);
        $gender   = mysqli_real_escape_string($conn, $_POST['gender']);
        $bio      = mysqli_real_escape_string($conn, $_POST['bio']);

        // Example INSERT query
        $sql = "INSERT INTO users (fullname, email, phone, gender, bio)
                VALUES ('$fullname', '$email', '$phone', '$gender', '$bio')";

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "Required fields are missing!";
    }

    // Close DB connection
    mysqli_close($conn);
}
?>
