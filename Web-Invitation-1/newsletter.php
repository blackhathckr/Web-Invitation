<?php 
$email=$_POST['email'];
include_once("conn.php");
if ( empty($email))
{
    
    http_response_code(400);
    echo "<h1>Please complete the form and try Again.</h1>";
    exit;
}
$sql = "INSERT INTO newsletter(email) VALUES('$email')";
$query=mysqli_query($conn,$sql);

?>
<script>
    alert(" Thank you ");
    window.location.href = "index.html";
</script>

