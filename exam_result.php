<?php
require("connect_db.php");
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Result</title>
</head>
<body>
    <div class="container">
        <h1>Select Course to Show</h1>
        <form action="show_exam_result.php" method="get">
            <select name="course_code">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $row["course_code"]; ?>">
                        <?php echo $row["course_code"]; ?> <?php echo $row["course_name"]; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <br>
            <input type="submit" value="Show">
        </form>
    </div>
</body>
</html>
