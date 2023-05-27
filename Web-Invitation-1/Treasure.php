<?php
require "conn.php";
$teamname = $_POST["teamname"];	
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
$name3 = $_POST["name3"];		
$email3 = $_POST["email3"];
$number3 = $_POST["number3"];
$usn3 = $_POST["usn3"];
$branch3 = $_POST["branch3"];
$year3 = $_POST["year3"];
$name4 = $_POST["name4"];		
$email4 = $_POST["email4"];
$number4 = $_POST["number4"];
$usn4 = $_POST["usn4"];
$branch4 = $_POST["branch4"];
$year4 = $_POST["year4"];

        if ( empty($teamname) OR empty($name1) OR empty($email1) OR empty($number1) OR empty($usn1) OR empty($branch1) OR empty($year1) OR
        
        empty($name2) OR empty($email2) OR empty($number2) OR empty($usn2) OR empty($branch2) OR empty($year2) OR
        empty($name3) OR empty($email3) OR empty($number3) OR empty($usn3) OR empty($branch3) OR empty($year3) OR
        empty($name4) OR empty($email4) OR empty($number4) OR empty($usn4) OR empty($branch4) OR empty($year4))
        
        
        {
            
            http_response_code(400);
            echo "Please complete the Form and try Again.";
            exit;
        }

   $sql ="INSERT INTO treasure(teamname,name,email,number,usn,branch,year,name,email,number,usn,branch,year,name,email,number,usn,branch,year,name,email,number,usn,branch,year) VALUES ('$teamname','$name1','$email1','$number1','$usn1','$branch1','$year1',$name2','$email2','$number2','$usn2','$branch2','$year2',$name3','$email3','$number3','$usn3','$branch3','$year3',$name4','$email4','$number4','$usn4','$branch4','$year4')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert("Thank you for Registering");
    window.location.href = "index.html";
</script>

