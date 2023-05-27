<?php
require "conn.php";
$teamname=$_POST["teamname"];
$name1 = $_POST["name1"];		
$email1 = $_POST["email1"];
$number1 = $_POST["number1"];
$usn1 = $_POST["usn1"];
$branch1 = $_POST["branch1"];
$year1 = $_POST["year1"];
$name2 = $_POST["name2"];		
$email2 = $_POST["email2"];
$number2 = $_POST["number2"];
$usn2 = $_POST["usn2"];
$branch2 = $_POST["branch2"];
$year2 = $_POST["year2"];


        
        if ( empty($teamname) OR empty($name1) OR empty($email1) OR empty($number1) OR empty($usn1) OR empty($branch1) OR empty($year1) OR empty($name2) OR empty($email2) OR empty($number2) OR empty($usn2) OR empty($branch2) OR empty($year2))
        {
            
            http_response_code(400);
            echo "<h1>Please complete the Form and try Again.</h1>";
            exit;
        }

   $sql ="INSERT INTO code(teamname,name,email,number,usn,branch,year,name,email,number,usn,branch,year) VALUES ('$teamname','$name1','$email1','$number1','$usn1','$branch1','$year1','$name2','$email2','$number2','$usn2','$branch2','$year2')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert(" Thank you for Registering");
    window.location.href = "index.html";
</script>
