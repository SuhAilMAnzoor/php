<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
echo "✅ Database Connected successfully <br><br>";
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo "$num" .  " records found in the Database <br><br>";

 // Display the rows returned by the SQL query
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);

if (mysqli_num_rows($result) > 0) {
    // Print table header
    echo "<table border='1' cellspacing='0' cellpadding='8'>";
    echo "<tr><th>Roll No</th><th>Name</th><th>Department</th></tr>";

    // Fetch rows one by one
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['roll_no'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['dept'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found in the database.";
}

// Usage of WHERE Clause to Update the Data 
$sql = "UPDATE `students` SET `name` = 'Sarfraz' WHERE `students`.`roll_no` = '2K21/SWE/299'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Record has been updated Succesfully";
} else {
    echo "Records could not the updated";
}
?>