<?php
include_once("homepage.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form>
		<table border="1">
			<theader>
				<tr>
					<th>nationalid</th>
					<th>firstname</th>
					<th>lastname</th>
					<th>gender</th>
					<th>dateofbirth</th>
					<th>postid</th>
					<th>examdate</th>
					<th>phonenumber</th>
					<th>marks</th>
					<th colspan="2">action</th>
				</tr>
				<?php
				$conn=mysqli_connect('localhost','root','','camellia');
			     if (isset($_GET['delete'])) {
			     	$a=$_GET['delete'];
			     	$delete="DELETE FROM `candidatesresult` WHERE national_id='$a'";
			     	$res=mysqli_query($conn,$delete);
			     	// code...
			     }
				$select="SELECT * FROM `candidatesresult`";
				$res=mysqli_query($conn,$select);
				while ($row=mysqli_fetch_array($res)) {
					$a=$row['national_id'];
					$b=$row['f_name'];
					$c=$row['l_name'];
					$d=$row['gender'];
					$e=$row['dateof_birth'];
					$f=$row['PostId'];
					$g=$row['exam_date'];
					$h=$row['p_number'];
					$i=$row['marks'];
					echo'
					<tr>
					<td>'.$a.'</td>
					<td>'.$b.'</td>
					<td>'.$c.'</td>
					<td>'.$d.'</td>
					<td>'.$e.'</td>
					<td>'.$f.'</td>
					<td>'.$g.'</td>
					<td>'.$h.'</td>
					<td>'.$i.'</td>
					<td><button><a href="?delete='.$a.'">delete</a></button></td>
					<td><button><a href="updatecandidatee.php?update='.$a.'">update</a></button></td>
					</tr>
					';
					// code...
				}
				?>
			</theader>
		</table>
	</form>

</body>
</html>