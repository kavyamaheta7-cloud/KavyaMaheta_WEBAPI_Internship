<?php

$conn=mysqli_connect("localhost","root","","kavya");

$mode=$_GET['mode'];

$sql="SELECT stud_name,email,contact
      FROM internship
      WHERE mode='$mode'";

$result=mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
      </tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['stud_name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "</tr>";
}

echo "</table>";

?>