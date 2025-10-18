<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

// Fetch all student records
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4" style="border-radius: 15px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="text-primary">📋 Student Records</h3>
      <a href="insert_data_in_table.php" class="btn btn-success btn-sm">➕ Add New Student</a>
    </div>

    <?php
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-striped">';
        echo '<thead class="table-dark">';
        echo '<tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Department</th>
              </tr>';
        echo '</thead>';
        echo '<tbody>';

        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row["roll_no"] . '</td>';
            echo '<td>' . $row["name"] . '</td>';
            echo '<td>' . $row["dept"] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="alert alert-info text-center">ℹ️ No records found.</div>';
    }

    mysqli_close($conn);
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
