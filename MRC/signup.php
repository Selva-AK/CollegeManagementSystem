<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <style>
        body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 3px solid dodgerblue;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

input[type=submit],input[type=reset] {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
input[type=submit]:hover,input[type=reset]:hover {
	text-decoration: underline;
    opacity:.5;
} 
    </style>
</head>
<body><center>
    <h1>SIGNUP</h1>
    <form method="post">
    <table>
        <tr><td>Username</td><td><input type="text" name="username" placeholder="Enter your Username" required></td></tr>
        <tr><td>DOB</td><td><input type="date" name="dob" required></td></tr>
        <tr><td>Gmail Address</td><td><input type="email" name="gmail" required placeholder="xxxx@gmail.com"></td></tr>
        <tr><td>Password</td><td><input type="password" name="password" required placeholder="Enter your Password"></td></tr>
        <tr><td>Re-password</td><td><input type="password" name="re-pass" required placeholder="Re-Enter your Password"></td></tr>
        <tr><td><input type="submit" value="Submit" name="submit"></td><td><input type="reset" value="Reset"></td></tr>
    </table>
    </form>
	<?php
		if(isset($_POST["submit"])){
			if($_POST["password"]==$_POST["re-pass"]){
				$username=$_POST["username"];
				$dob=$_POST["dob"];
				$gmail=$_POST["gmail"];
				$password=$_POST["password"];
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con,"mrc");
				$query=mysqli_query($con,"INSERT INTO signup VALUES('$username','$dob','$gmail','$password')");
				?>
				
				<script>
					window.location="home.php";
				</script>
				<?php
			}else {
					?>
					<script>
						alert("Password is not Matching");
					</script>
					<?php
			}
		}
	?>
    </center>
</body>
</html>