<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "test"; // <-- add your DB name

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to DB failed due to: " . mysqli_connect_error());
}

echo "Successfully connected";
?>
