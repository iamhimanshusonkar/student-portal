<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include("includes/navbar.php"); ?>
<div class="container text-center mt-5">
  <div class="card p-4 shadow-sm">
    <h2 class="text-success">✅ You have been logged out</h2>
    <p class="lead">Thank you for using the Student Portal.</p>
    <a href="index.php" class="btn btn-primary mt-3">Return to Home</a>
  </div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
