<?php
echo "<h1>Connecting php to the database</h1>";

/* 
Ways to connect to a MySQL Database
One . MySQLi Extension
2   . PDO
*/  

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
echo "✅ Connection successful";
}
?>