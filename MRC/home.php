<!--This the Home page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <marquee  direction="left"><a href="admission.php" target="_blank" rel="noopener noreferrer" style="background-color:darkgrey; font-size: 20px;">Admission's going on!</a></marquee>
    <title>MRC Management</title>
    <!--Linking Cascading Style Sheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <!--Inserting Head Image-->
    <div class="header"id="head">
        <a href="Home.php"><img src="images/MRC-head.jpg" alt="MRC-head"></a>
    </div>
    <!--Navigator bar-->
    <?php include("navbar.php");?>
     <!--|Body image-->
     <div class="bodimg">
        <img src="images/home-bg.jpg" alt="home-bg" width="device-width" height="500px">
    </div>
    <center>
    <div class="aboutmrc" >
        <h1>Founder of our Institution</h1>
        <a href="images/correspondent.jpg"><img src="images/correspondent.jpg" alt="mrc" width="25%" height="auto"></a>
        <font color="green" ><p><b>Dr. MR. RAGUNATHAN M.A., M.L.</b></p></font>
    </div>
    </center>
    <!--Some text about MRC-->
    <div class="aboutmrc" id="about">
        <h1>ABOUT MRC</h1>
        <p>&emsp; &emsp;A total of <b>5000+</b> students are currently enrolled in all our institution. <br>
             We have gained a good reputation as disciplined and academically excellent institutions. <br>
             The trust and <i><b><a href="home.php"> The MRC group of institutions</a></b></i> constantly strive to explore innovative ways to <br>
             educate students from all districts and to instil in them discipline and confident to face the world.  </p>
    </div><hr>
    <div class="aboutmrc">
        <h1>Features of MRC</h1>
        <p>&emsp; &emsp;# SEPERATE HOSTEL</p>
        <p>&emsp; &emsp;# WELL EQUIPED LABORATORY</p>
        <p>&emsp; &emsp;# 30000+ BOOKS IN LIBRARY</p>
        <p>&emsp; &emsp;# WELL EQUIPED PLAYGROUNDS</p>
        <p>&emsp; &emsp;# GREEN & ECO FRIENDLY ENVIRONMENT</p>
        <hr>
    </div>
    <div class="video">
        <video src="videos/HomeVideo.mp4" controls>MRC Video></video>
    </div>
    <br>
    <?php include("footer.php");?>
</body>
</html>