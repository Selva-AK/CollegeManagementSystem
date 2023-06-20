<!DOCTYPE html>
<html lang="en">
<head>
    <marquee  direction="left"><a href="admission.php" target="_blank" rel="noopener noreferrer" style="background-color:darkgrey; font-size: 20px;">Admission's going on!</a></marquee>
    <title>MRC Management</title>
    <!--Linking Cascading Style Sheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        h2{
            background-color: dodgerblue;
            text-align: center;
            padding: 10px;
            font-size: 2.5pc;
        }
        table{
                font-size:15px;
                border:4px solid dodgerblue;
                background-color:pink;
                padding:5px;
            }
            table td,table th{
                    padding-left:10px;
                    padding-right:10px;
                    padding-top:4px;
                    padding-bottom:4px;
                    border:2px solid black;
            }
    </style>
</head>
<body>
    <!--Inserting Head Image-->
    <div class="header"id="head">
        <a href="Home.php"><img src="images/MRC-head.jpg" alt="MRC-head"></a>
    </div>
    <!--Navigator bar-->
    <?php include("navbar.php");?>
    <h2>Admission Details</h2>
    <br>
        <?php
            $con=mysqli_connect("localhost","root","","MRC");
            $query=mysqli_query($con,"SELECT * FROM Admission_details");
            echo "<table border=3><tr><th>Studets Name</th><th>Father's Name</th><th>Gender</th><th>Date_of_Birth</th><th>Course</th><th>Mobile Number</th><th>Gmail Address</th><th>Address</th></tr>";
            while($row=mysqli_fetch_array($query)){
                echo "                
                <tr><td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                </tr>
               ";
            }
            echo " </table>";
        ?>
    <?php include("footer.php");?>
</body>
</html>