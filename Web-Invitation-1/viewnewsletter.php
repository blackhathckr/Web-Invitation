<?php 
require "conn.php";
$sql="SELECT * FROM newsletter";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head><title>newsletter</title></head>
    <style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>

<body>

<table>
  <tr>
    <th>Email</th>
    </tr>

<?php
while($row=mysqli_fetch_array($query))
{
    ?>
    <tr>
    <td><?php echo $row["email"];?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>