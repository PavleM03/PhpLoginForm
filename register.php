<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
</head>
<body>
	<div class="container">
		<form method="POST">
			<div class="form-input">
				<input type="text" name="username" placeholder="Username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" name="submit" value="REGISTER" class="btn-login"/>
		</form>
	</div>
</body>
</html>

<?php 

$host="localhost";
$user="root";
$pass="";
$db="test";

$connection = mysqli_connect($host,$user,$pass,$db);
echo "Connected sucessfully ";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="INSERT INTO loginform (`Username`, `Password`) VALUES ('$username','$password') ";
    $result=mysqli_query($connection,$sql);
}
?>