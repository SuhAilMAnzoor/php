<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
echo "✅ Database Connected successfully <br><br>";
}

// Deleted Query
$sql = "DELETE FROM `students` WHERE `DEPT' = 'AI Engineer'";
$result = mysqli_query($conn, $sql);

// Check if deletion was successful
if ($result) {
    $rowsDeleted = mysqli_affected_rows($conn);
    if ($rowsDeleted > 0) {
        echo "🗑️ $rowsDeleted record(s) have been deleted successfully!";
    } else {
        echo "⚠️ No records found matching the condition.";
    }
} else {
    echo "❌ Error deleting record: " . mysqli_error($conn);
}

?>