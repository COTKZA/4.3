<?php
require("connect_db.php");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Gender</th><th>Operation</th></tr>";
while($row = mysqli_fetch_assoc($result)){
echo
"<tr><td>".$row["student_code"]."</td><td>".$row["student_name"]."</td><td>".$row["gender"]."</t
d>";
echo "<td><a href=edit_student.php?student_code=".$row["student_code"].">Edit</a></td></tr>";
}
echo "</table>";
echo "<br><a href=add_student.php>Add student</a>";
echo "</center>";
?>