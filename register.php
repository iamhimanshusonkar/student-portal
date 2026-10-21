<?php
include("includes/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $msg = mysqli_query($conn, $sql) ? "Registration successful! <a href='login.php'>Login here</a>" : "Error: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include("includes/navbar.php"); ?>
<div class="container mt-5">
  <div class="card p-4 shadow-sm">
    <h2 class="mb-3">Create Account</h2>
    <?php if(isset($msg)) echo "<div class='alert alert-info'>$msg</div>"; ?>
    <form method="POST">
      <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
        <label for="name">Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
