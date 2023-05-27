<?php 
require "conn.php";
$sql="SELECT * FROM code";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head><title>Coding Regd. Students</title></head>
    <style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>

<body>
 
<h1 align="center">List of Students Regd. for Coding</h1>

<?php

while($row=mysqli_fetch_array($query))
{
  ?>

  <table>
  <tr>
    <th>Team Name :</th><?php echo $row["teamname"];?>
</tr>
<tr>
<th>Member 1 Name : </th><?php echo $row["name1"];?>
    <th>Email :</th><?php echo $row["email1"];?>
    <th>Number :</th><?php echo $row["number1"];?>
    <th>USN :</th><?php echo $row["usn1"];?>
    <th>Branch :</th><?php echo $row["branch1"];?>
    <th>Year :</th><?php echo $row["year1"];?>

    </tr>
    
  
    <tr>
    <th>Member 2 Name : </th><td><?php echo $row["name2"];?>
    <th>Email :</th><td><?php echo $row["email2"];?>
    <th>Number :</th><td><?php echo $row["number2"];?>
    <th>USN :</th><td><?php echo $row["usn2"];?>
    <th>Branch :</th><td><?php echo $row["branch2"];?>
    <th>Year :</th><td><?php echo $row["year2"];?>
    
</tr>

<?php 
}
?>

<hr size="3px" />

</table>
</body>
</html>