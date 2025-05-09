
<?php
if (isset($_GET['update'])) {
	$a=$_GET['update'];
$conn=mysqli_connect('localhost','root','','camellia');
$select="SELECT * FROM `candidatesresult` WHERE national_id='".$a."'";
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);


	// code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 420px;
			height: 600px;
			background-color: ;
			border: solid;
			border-radius: 20px;
		}
		input{
			border-radius: 15px;
			font-style: italic;
			font-size: 20px;
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
<body><center><form method="POST">
	<p>update candidate</p>
	<input type="number" name="candidate" value="<?php echo $row['national_id'];?>" placeholder="enter candidate"><br><br>
	<input type="text" name="f_name" value="<?php echo $row['f_name'];?>" placeholder="enter firstname"><br><br>
	<input type="text" name="l_name" value="<?php echo $row['l_name'];?>"placeholder="enter lastname"><br><br>
	<label>female</label>
	<input type="radio" name="gender" value="<?php echo $row['gender'];?>" placeholder="gender" value="female">
	<label>male</label>
	<input type="radio" name="gender" value="male"><br><br>
	<input type="date" name="dateofbirth" value="<?php echo $row['dateof_birth'];?>" placeholder="date"><br><br>
	<input type="int" name="postid" value="<?php echo $row['PostId'];?>" placeholder="enter postid"><br><br>
	<input type="date" name="exam" value="<?php echo $row['exam_date'];?>" placeholder="enter exam"><br><br>
	<input type="number" name="phone" value="<?php echo $row['p_number'];?>" placeholder="enter p_name"><br><br>
	<input type="number" name="marks" value="<?php echo $row['marks'];?>" placeholder="enter marks"><br><br>
	<button type="submit" name="submit">update</button>
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
		$insert="UPDATE `candidatesresult` SET `national_id`='$a',`f_name`='$b',`l_name`='$c',`gender`='$d',`dateof_birth`='$e',`PostId`='$f',`exam_date`='$g',`p_number`='$h',`marks`='$i' WHERE national_id='$a'";
		$result=mysqli_query($conn,$insert);
		if ($result==true) {
			echo "record insert";
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