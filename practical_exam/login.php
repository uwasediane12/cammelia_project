
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 250px;
			height: 250px;
			border: solid;
			border-radius: 15px;
		}
		input{
			width: 180px;
			height: 30px;
			border-radius: 10px;
		}
		p a{
			border: solid;
		
			width: 220px;
			height: 30px;
			background-color: greenyellow;
		}
	</style>
</head>
<body>
	<center>
	<form method="POST">
	<p>LOGIN FORM</p>
	<input type="text" name="user_name" placeholder="enter user_name" required><br><br>
	<input type="password" name="password" placeholder="enter password" required><br><br>
	<button name="submit">LOGIN</button>
	<p>if dont have account:<a href="register.php">create account</a></p>
	<?php
	session_start();
	$conn=mysqli_connect('localhost','root','','camellia');
	if (isset($_POST['submit'])) {
		$b=$_POST['user_name'];
		$c=$_POST['password'];
$insert="SELECT UserName, Password FROM `users` WHERE  UserName='$b' and Password='$c'";
		$result=mysqli_query($conn,$insert);
		$row=mysqli_fetch_array($result);
		if (is_array($row)) {
		$_SESSION['user_name']=$row['UserName'];
		$_SESSION['user_name']=$row['Password'];
		header("location:homepage.php");
	}
	else{
		echo "username and password are not correct";
	}
   }
	?>
	
</form>
</center>
</body>
</html>