<!DOCTYPE html>
<html lang="en">
<head>
        <title>Admission</title>
        <!--Linking Cascading Style Sheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
            table{
                font-size:24px;
                border:4px solid dodgerblue;
                background-color:pink;
                padding:20px;
                border-radius:30px;
            }
            table td{
                    padding-left:70px;
                    padding-right:70px;
                    padding-top:20px;
                    padding-bottom:20px;
                    border:2px solid black;
            }
            .td{
                color:blue;
            }
            div input{
                    background-color:dodgerblue;
                    font-size:40px;
                    padding-right:90px;
                    padding-left:90px;
            }
            div input:hover{
                    background-color:pink;
                    color:dodgerblue;
            }
    </style>
</head>
<body><center>
            <!--Inserting Head Image-->
            <div class="header">
            <a href="Home.php"><img src="images/MRC-head.jpg" alt="MRC-head"></a>
        </div>
        <div class="subheading">
                <b>Admisson Details</b>
        </div><br><br>
<?php
        $name=$_POST['name'];
        $fathername=$_POST["fathername"];
        $gmail=$_POST["gmailid"];
        $mobileno=$_POST["mobileno"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $course=$_POST["course"];
        $address=$_POST["address"];
       // echo $name,"<br>",$fathername,"<br>",$gmail,"<br>",$mobileno,"<br>",$gender,"<br>",$course,"<br>",$dob,"<br>",$address;
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"mrc") or die("error");
        $query=mysqli_query($con,"INSERT INTO Admission_Details VALUES('$name','$fathername','$gender','$dob','$course','$mobileno','$gmail','$address')") or die("Query Failed");
        echo "
                <table>
                <tr><th colspan='2'><img src='images/Meenaakshi-ramasamy.png'></th></tr>
                <tr><td>Name</td><td>$name</td></tr>
                <tr><td>Father's Name</td><td>$fathername</td></tr>
                <tr><td>GmailID</td><td>$gmail</td>
                <tr><td>Mobile Number</td><td>$mobileno</td></tr>
                <tr><td>Gender</td><td>$gender</td></tr>
                <tr><td>Date of Birth</td><td>$dob</td></tr>
                <tr class='td'><td>Applied Course</td><td>$course</td></tr>
                <tr><td>Address</td><td>$address</td></tr>
                </table><br><br>
        ";?>
        <div><input type="button" value="OK" onclick="javascript:location.href='home.php'"></div><br><br>
        <?php
        include("footer.php");

?>    
        
</center>
</body>
</html>