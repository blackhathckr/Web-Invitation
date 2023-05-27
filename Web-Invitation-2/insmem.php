<?php

$name = $_POST["name"];		
$email = $_POST["email"];
$number = $_POST["number"];
$usn = $_POST["usn"];
$branch = $_POST["branch"];
$year = $_POST["year"];

require "conn.php";
        
        if ( empty($name) OR empty($email) OR empty($number) OR empty($usn) OR empty($branch) OR empty($year))
        {
            
            http_response_code(400);
            echo "Please complete the Form and try Again.";
            exit;
        }

   $sql ="INSERT INTO membership(name,email,number,usn,branch,year) VALUES ('$name','$email','$number','$usn','$branch','$year')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert(" Registered Successfully ");
    window.location.href = "index.html";
</script>


