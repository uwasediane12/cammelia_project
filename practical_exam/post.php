<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 230px;
			height: 200px;
			border: solid;
			border-radius: 15px;
		}
		input{
			width: 190px;
			height: 25px;
			border: solid;
			border-radius: 12px;
		}
		button{
			width: 100px;
			height: 30px;
			border: solid;
			border-radius: 12px;
		}
		button:hover{
			background-color: gray;
			color: yellow;
		}
	</style>
</head>
<body>
	<center>
	<form method="POST">
		<p style="font-size: 26px; "><b>post form</p>
		<input type="text" name="postname" placeholder="enter postname" required><br><br>
		<button type="submit" name="submit">insert</button>
		<?php
		if (isset($_POST['submit'])) {
			$a=$_POST['postname'];
			$conn=mysqli_connect('localhost','root','','camellia');
			$insert="INSERT INTO `post`(`PostName`) VALUES ('$a')";
			$result=mysqli_query($conn,$insert);
			if ($result==true) {
				echo "record inserted";
				header("location:selpost.php");
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