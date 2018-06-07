<?php

$conn = mysqli_connect("localhost", "root", "", "ajaxjquery");
$name = $_POST['search'];
$sql = "select * from serach_name where username LIKE '%$name%'";
$result = mysqli_query($conn, $sql);
echo "<table class='tbl'>
<tr>
<th>Firstname</th>
<th>lastname</th>
<th>Address</th>
</tr>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "</tr>";
}
echo "</table>";



?>