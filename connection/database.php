<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dept_store";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE if not exists $database";

if ($conn->query($sql) === TRUE) {

    $conn->close();

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "CREATE TABLE IF NOT EXISTS users(id int UNSIGNED AUTO_INCREMENT PRIMARY KEY, name varchar(255), username varchar(255), password varchar(255))";

    // $sql = "IF NOT EXISTS ALTER TABLE users ADD address char(255)";

    if ($conn->query($sql) === TRUE) {
        //echo "Successfully Created table";
    } else {
        echo "Error creating table: " . $conn->error;
    }

} else {
    echo "Error creating database: " . $conn->error;
}

// $conn->close();

?>