<?php
require "conn.php";
$name = $_POST["name"];
				
$email = $_POST["email"];
$number = $_POST["number"];
$subject = $_POST["subject"];
$message = $_POST["message"];




        
        if ( empty($name) OR empty($email) OR empty($number) OR empty($subject) OR empty($message))
        {
            
            http_response_code(400);
            echo "<h1>Please complete the form and try Again.</h1>";
            exit;
        }

   $sql ="INSERT INTO contact(name,email,number,subject,message) VALUES ('$name','$email','$number','$subject','$message')";
$query = mysqli_query($conn,$sql);
?>

