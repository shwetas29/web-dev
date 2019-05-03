<?php
$servername = "localhost";
$username = "username";
$password = "shweta";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE MyGallery (
    sr_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    image_path VARCHAR(30) NOT NULL,
    caption VARCHAR(30) NOT NULL,
    )";
   
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGallery is created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$sql = "INSERT INTO MyGuests (image_path, caption)
VALUES ('', 'caption this guys')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    
$conn->close();

?>