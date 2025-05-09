
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 420px;
			height: 620px;
			background-color: ;
			border: solid;
			border-radius: 20px;
		}
		input{
			border-radius: 15px;
			font-style: italic;
			font-size: 15px;
			width: 200px;
			height: 20px;
		}
		button{
			width: 150px;
			height: 30px;
			border-radius: 10px;
			border:solid;
		}
	</style>


</head>
<body>
	<center><form method="POST">
		<p style="font-size: 40px;t"><b>candidate form</p>
	<input type="number" name="candidate" placeholder="enter national_id"><br><br>
	<input type="text" name="f_name" placeholder="enter firstname"><br><br>
	<input type="text" name="l_name" placeholder="enter lastname"><br><br>
	<label>female</label>
	<input type="radio" name="gender" value="female" placeholder="gender">
	<label>male</label>
	<input type="radio" name="gender" value="male"><br><br>
	<input type="date" name="dateofbirth" placeholder="date"><br><br>
	<input type="int" name="postid" placeholder="enter postid"><br><br>
	<input type="date" name="exam" placeholder="enter exam"><br><br>
	<input type="number" name="phone" placeholder="enter p_name"><br><br>
	<input type="number" name="marks" placeholder="enter marks"><br><br>
	<button type="submit" name="submit">insert</button>
	<?php
	if (isset($_POST['submit'])) {
		$a=$_POST['candidate'];
		$b=$_POST['f_name'];
		$c=$_POST['l_name'];
		$d=$_POST['gender'];
		$e=$_POST['dateofbirth'];
		$f=$_POST['postid'];
		$g=$_POST['exam'];
		$h=$_POST['phone'];
		$i=$_POST['marks'];
		 if ($i >= 0 && $i <= 100) {
		$conn=mysqli_connect('localhost','root','','camellia');
		$insert="INSERT INTO candidatesresult VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
		$result=mysqli_query($conn,$insert);
		if ($result==true) {
        //echo "Candidate inserted successfully!";
        header("location:selcandidate.php");
        
    }
}
    else{
    	echo "enter marks lessthan 100 and greaterthan 0 only";

	}
	}	
	?>
	
</form>
</center>

</body>
</html>