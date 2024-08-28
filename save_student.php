<?php
require("connect_db.php");

// Get form data
$student_code = $_POST["student_code_edit"];
$student_code_new = $_POST["student_code"];
$student_name = $_POST["student_name"];
$gender = $_POST["gender"];

// Update query (adjust the SQL based on your database schema)
$sql = "UPDATE student SET student_code='$student_code_new', student_name='$student_name', gender='$gender' WHERE student_code='$student_code'";

if (mysqli_query($conn, $sql)) {
    // Redirect to student_list.php if the update is successful
    header("Location: student_list.php");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
