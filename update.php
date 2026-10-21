<?php
include("includes/db.php");
session_start();

$user_id = $_SESSION["user_id"];
$course = $_POST["course"];
$semester = $_POST["semester"];
$roll_no = $_POST["roll_no"];

$sql = "SELECT * FROM student_details WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $sql = "UPDATE student_details SET course='$course', semester='$semester', roll_no='$roll_no' WHERE user_id='$user_id'";
} else {
    $sql = "INSERT INTO student_details (user_id, course, semester, roll_no) VALUES ('$user_id', '$course', '$semester', '$roll_no')";
}

if (mysqli_query($conn, $sql)) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            Details updated successfully!
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          </div>";
} else {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Error updating details. Please try again.
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          </div>";
}
?>
