<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .hero {
        background: #f8f9fa; /* light neutral background */
        padding: 100px 20px;
      }
      .hero h1 {
        color: #343a40; /* dark text */
        font-weight: bold;
      }
      .hero p {
        color: #6c757d; /* muted gray */
      }
      .feature-card {
        transition: transform 0.2s;
      }
      .feature-card:hover {
        transform: translateY(-5px);
      }
    </style>
</head>
<body>
<?php include("includes/navbar.php"); ?>

<!-- Hero Section -->
<div class="hero text-center">
  <h1 class="mb-3">🎓 Student Portal</h1>
  <p class="lead">Your academic journey, simplified.</p>
  <a href="register.php" class="btn btn-outline-primary btn-lg m-2">Register</a>
  <a href="login.php" class="btn btn-outline-success btn-lg m-2">Login</a>
</div>

<!-- Features Section -->
<div class="container mt-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card p-3 shadow-sm feature-card">
        <h5>📝 Register Easily</h5>
        <p>Create your account in seconds.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 shadow-sm feature-card">
        <h5>🔒 Secure Login</h5>
        <p>Access your details safely.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 shadow-sm feature-card">
        <h5>📊 Manage Details</h5>
        <p>Update academic info anytime.</p>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
