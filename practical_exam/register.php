<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 230px;
			height: 250px;
			border-radius: 17px;
			border: solid;
		}
		input{
			border: solid;
			border-radius: 10px;

		}
		button{
			border: solid;
			border-radius: 10px;
			height: 25px;
			width: 100px;
		}
		button:hover{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<center><form method="POST">
		<p style="font-size: 27px;">register form</p>
	<input type="number" name="id" placeholder="enter user_id" required><br><br>
	<input type="text" name="user_name" placeholder="enter user_name" required><br><br>
	<input type="password" name="password" placeholder="enter password" required><br><br>
	<button name="submit">SAVE</button>

	<?php
	$conn=mysqli_connect('localhost','root','','camellia');
	if (isset($_POST['submit'])) {
		$a=$_POST['id'];
		$b=$_POST['user_name'];
		$c=$_POST['password'];
		$insert="INSERT INTO `users`(`UserId`, `UserName`, `Password`) VALUES ('$a','$b','$c')";
		$result=mysqli_query($conn,$insert);
		if ($insert==true) {
			header("location:login.php");
			// code...
		}
		else{
			echo "record not inserted";
		}
		// code...
	}
	?>
	
</form>
</center>
</body>
</html>