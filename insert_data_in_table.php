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

// Insert data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO students (roll_no, name, dept) VALUES ('$roll_no', '$name', '$dept')";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success text-center">✅ Record inserted successfully!</div>';
    } else {
        echo '<div class="alert alert-danger text-center">❌ Error inserting record: ' . mysqli_error($conn) . '</div>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Student Record</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4" style="max-width: 600px; margin: auto; border-radius: 15px;">
    <h3 class="text-center text-primary mb-4">Add Student Record</h3>

    <form method="POST" action="">
      <div class="mb-3">
        <label for="roll_no" class="form-label fw-bold">Roll Number</label>
        <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Enter Roll Number             (2K21/SWE/299)">
      </div>

      <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
      </div>

      <div class="mb-3">
        <label for="dept" class="form-label fw-bold">Department</label>
        <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter Department" required>
      </div>

      <div class="d-grid mb-2">
        <button type="submit" class="btn btn-primary btn-lg">💾 Submit</button>
      </div>

      <!-- View Students Button -->
      <div class="d-grid">
        <a href="view_students.php" class="btn btn-success btn-lg">📋 View All Students</a>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
