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
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
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
echo "<br/><br/>";
if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where Username='".$username."'AND Password='".$password."'";
    
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Username and Password combination";
        exit();
    }
}
?>