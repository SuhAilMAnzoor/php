<?php
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "students"; // you can also specify database here

// Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Check connection
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
echo "✅ Database Connected successfully <br><br>";
}
// In previous file i have already created a database named students,
// file name  < connect_mySQL_creating_mysql_db.php > check repo 
// now lets move to crate a table in that database which i have already created

// Create a table in the Database
$sql = "CREATE TABLE students (roll_no VARCHAR(12), name VARCHAR(20), dept VARCHAR(20), PRIMARY KEY (roll_no))";
$result = mysqli_query($conn, $sql);

// check for the table creation 
if($result){
    echo "✅ The table was successfully created! <br>";
} else {
    echo "The table was not created because of this error --> <br>" . mysqli_error($conn);
}
?>