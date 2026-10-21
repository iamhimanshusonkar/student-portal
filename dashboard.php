<?php
include("includes/db.php");
include("includes/auth.php");
checkAuth();

$user_id = $_SESSION["user_id"];
// Fetch user info
$user_sql = "SELECT * FROM users WHERE id='$user_id'";
$user_result = mysqli_query($conn, $user_sql);
$user = mysqli_fetch_assoc($user_result);

// Fetch student details
$sql = "SELECT * FROM student_details WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);
$details = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/script.js"></script>
</head>
<body>
<?php include("includes/navbar.php"); ?>

<div class="container mt-5">
  <div class="row">
    <!-- Profile Section -->
    <div class="col-md-4">
      <div class="card p-4 shadow-sm text-center">
        <img src="assets\images\avatar.png" alt="Profile Picture" class="rounded-circle mb-3" width="120">
        <h4><?php echo $user['name']; ?></h4>
        <p class="text-muted"><?php echo $user['email']; ?></p>
        <hr>
        <p><strong>Course:</strong> <?php echo $details['course'] ?? 'Not set'; ?></p>
        <p><strong>Semester:</strong> <?php echo $details['semester'] ?? 'Not set'; ?></p>
        <p><strong>Roll No:</strong> <?php echo $details['roll_no'] ?? 'Not set'; ?></p>
      </div>
    </div>

    <!-- Update Form -->
    <div class="col-md-8">
      <div class="card p-4 shadow-sm">
        <h3 class="mb-3">Update Details</h3>
        <form id="updateForm">
          <div class="form-floating mb-3">
            <input type="text" name="course" class="form-control" id="course" placeholder="Course" value="<?php echo $details['course'] ?? ''; ?>">
            <label for="course">Course</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" name="semester" class="form-control" id="semester" placeholder="Semester" value="<?php echo $details['semester'] ?? ''; ?>">
            <label for="semester">Semester</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="roll_no" class="form-control" id="roll_no" placeholder="Roll No" value="<?php echo $details['roll_no'] ?? ''; ?>">
            <label for="roll_no">Roll No</label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Save Changes</button>
        </form>
        <div id="status" class="mt-3"></div>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
