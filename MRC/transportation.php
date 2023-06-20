<!--This the Admission page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <marquee  direction="left"><a href="admission.php" rel="noopener noreferrer" style="background-color:darkgrey; font-size: 20px;">Admission's going on!</a></marquee>
    <title>MRC Admissions</title>
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
                font-size:24px;
                border:4px solid dodgerblue;
                background-color:pink;
                padding:20px;
                border-radius:30px;
            }
            table td,table th{
                    padding-left:70px;
                    padding-right:70px;
                    padding-top:20px;
                    padding-bottom:20px;
                    border:2px solid black;
            }
            .td{
                color:blue;
            }
    </style>
</head>
<body>
    <!--Inserting Head Image-->
        <div class="header">
            <a href="Home.php"><img src="images/MRC-head.jpg" alt="MRC-head"></a>
        </div>
<!--Navigator bar-->
	        <?php include("navbar.php");?>
        <div>
            <h2>TRANSPORTATION</h2> 
        </div>  
<center>
    <img src="images/bus.jpg" alt="bus"><br><br>
        <?php
            $con=mysqli_connect("localhost","root","","MRC");
            $query=mysqli_query($con,"SELECT * FROM Transport");
            echo "<table border=3><tr><th>Bus Number</th><th>Driver Name</th><th>Destination</th></tr>";
            while($row=mysqli_fetch_array($query)){
                echo "                
                <tr><td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td></tr>
               ";
            }
            echo " </table>";
        ?>
        </center>



        <?php include("footer.php"); ?>

</body>
</html>