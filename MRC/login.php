<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
     <form action="" method="post">
     	<h2>LOGIN</h2>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="login">Login</button>
          <a href="index.php" class="ca">Create an account</a>
     </form>
	 <?php
	 	if(isset($_POST["login"])){
				$username=$_POST["uname"];
				$password=$_POST["password"];
				//Connecting to Database
				$con=mysqli_connect("localhost","root","","MRC");
				$query=mysqli_query($con,"SELECT * FROM signup WHERE Username='$username'");
					while($row=mysqli_fetch_array($query)){
						$uname = $row[0];
						$pass = $row[3];
					}
					if($username==$uname and $password==$pass){
						?><script>window.location="home.php";</script><?php
					}
					else{
						?><script>alert("Invalid Username of Password");</script><?php
					}
		 }
	 ?>
</body>
</html>