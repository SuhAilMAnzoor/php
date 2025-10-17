<?php
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername,$username,$password);

// Check connection
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
echo "✅ Database Connected successfully <br><br>";
}

// Creating Database 
$sql = "CREATE DATABASE students";
$result = mysqli_query($conn, $sql);

// check for the database creation success
if($result){
    echo "✅ The Database was successfully created! <br>";
} else {
    echo "The Database was not created because of this error --> <br>";
}
?>