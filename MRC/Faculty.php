<!--This the Facilities page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <marquee  direction="left"><a href="admission.php" target="_blank" rel="noopener noreferrer" style="background-color:darkgrey; font-size: 20px;">Admission's going on!</a></marquee>
    <title>MRC Faculty</title>
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
    <div class="header"id="head">
        <a href="Home.php"><img src="images/MRC-head.jpg" alt="MRC-head"></a>
    </div>
    <?php include("navbar.php");?>

        <div>
            <h2>FACILITIES OF MRC</h2> 
        </div>
        <center>
        <a href="Tamil.php" target="_blank" class="subheading1">B.A-TAMIL</a><br>
        <a href="English.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.A-ENGLISH</a><br>
        <a href="Maths.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-MATHS</a><br>
        <a href="Commerce.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.COM</a><br>
        <a href="Physics.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-PHYSICS</a> <br>
        <a href="Chemistry.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-CHEMISTRY</a> <br>
        <a href="Microbiology.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-MICROBIOLOGY</a><br> 
        <a href="biotechnology.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC- BIO-TECNOLOGY</a> <br>
        <a href="Computerscience.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-COMPUTER SCIENCE & COMPUTER APPLICATIONS</a> <br>
        <a href="FashionTechnology.php" target="_blank" rel="noopener noreferrer" class="subheading1">B.SC-FASHION TECNOLOGY</a> <br>
    </center>



        <?php include("footer.php"); ?>

</body>
</html>