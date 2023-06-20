<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
     <form action="" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="login">Login</button>
     </form>
	 <?php
	 	if(isset($_POST["login"])){
				$username=$_POST["uname"];
				$password=$_POST["password"];
				//Connecting to Database
					if($username=="Admin" and $password=="Admin@123"){
						?><script>window.location="AdmissionDetails.php";</script><?php
					}
					else{
						?><script>alert("Invalid Username of Password");</script><?php
					}
		 }
	 ?>
</body>
</html>