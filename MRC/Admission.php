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
            <h2>ADMISSION</h2> 
        </div>
       <?php require("ad.php");?>



        <?php include("footer.php"); ?>

</body>
</html>