<?php
require("connect_db.php");
$id = $_GET["id"];
$sql = "SELECT * FROM exam_result WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$exam_result = mysqli_fetch_assoc($result);
echo "<center>";
echo "<form action=save_exam_result.php method=post>";
echo "<table border=1 width=40%>";
echo "<input type=hidden name=id_edit value=$id />";
echo "<tr><td>Course Code:</td><td>".$exam_result["course_code"]."</td></tr>";
echo "<tr><td>Course Name:</td><td>".$exam_result["student_code"]."</td></tr>";
echo "<tr><td>Credit:</td><td><input type=text name=point value=".$exam_result["point"]." /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>