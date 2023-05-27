<?php 
$email=$_POST['email'];
require "conn.php";

$sql = "INSERT INTO newsletter(email) VALUES('$email')";
$query=mysqli_query($conn,$sql);

?>
<script>
    alert(" Thank You ");
    window.location.href = "index.html";
</script>

