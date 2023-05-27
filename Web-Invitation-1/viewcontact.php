<?php 
require "conn.php";
$sql="SELECT * FROM contact";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head><title>Contacts</title></head>
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
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Number</th>
    <th>Message</th>

    </tr>

<?php
while($row=mysqli_fetch_array($query))
{
    ?>
    <tr>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["subject"];?></td>
    <td><?php echo $row["number"];?></td>
    <td><?php echo $row["message"];?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>