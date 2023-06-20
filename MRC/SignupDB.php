<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL_CONNECT</title>
</head>
<body>
    <?php
        $username=$_POST["username"];
        $dob=$_POST["dob"];
        $gmail=$_POST["gmail"];
        $password=$_POST["password"];
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"mrc") or die("Couldn't Connect Database");
        //$query=mysqli_query($con,"")
        #  while($row=mysql_fetch_array($query)){
       //     echo "<br>",$row['password'];
        //}
    ?>
</body>
</html>