<?php 
require "conn.php";
$sql="SELECT * FROM tech";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head><title>Tech Hunt Regd. Students</title></head>
    <style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>

<body>
 
<h1 align="center">List of Students Regd. for Technical Hunt</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>USN</th>
    <th>Branch</th>
    <th>Year</th>

    </tr>

<?php
while($row=mysqli_fetch_array($query))
{
    ?>
    <tr>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["number"];?></td>
    <td><?php echo $row["usn"];?></td>
    <td><?php echo $row["branch"];?></td>
    <td><?php echo $row["year"];?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>