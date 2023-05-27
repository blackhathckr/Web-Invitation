<?php

$name = $_POST["name"];
				
$email = $_POST["email"];
$subject = $_POST["subject"];
$number = $_POST["number"];
$message = $_POST["message"];
include_once("conn.php");
        
        if ( empty($name) OR empty($subject) OR empty($number) OR empty($message) OR empty($email))
        {
            
            http_response_code(400);
            echo "<h1>Please complete the form and try Again.</h1>";
            exit;
        }

   $sql ="INSERT INTO contact(name,email,subject,number,message) VALUES ('$name','$email','$subject','$number','$message')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert(" Thank you ");
    window.location.href = "index.html";
</script>
