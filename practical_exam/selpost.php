<?php
include_once("homepage.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<div><button><a href="post.php">ADD NEWRECORD</a></button><div>
</head>
<body>
<table border="1" width="60%">
	<theader>

	<tr>
		<th>POSTCODE</th>
		<th>POSTNAME</th>
		<th colspan="2">OPERATION</th>
	</tr>
</theader>
	<?php
	$conn=mysqli_connect('localhost','root','','camellia');
	$select="SELECT * FROM post";
	$query=mysqli_query($conn,$select);
	if($query==true)
	{
	while($fetch=mysqli_fetch_array($query))
	{
		$id=$fetch['PostId'];
		$name=$fetch['PostName'];
		echo'<tr> 
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td><button><a href="updatepost.php?updateid='.$id.'">update</a></button></td<
      <button> <a href="delete.php?delid='.$id.'">delete</a></button></td>
		</tr>';
	}	
	}
	?>
</table>
</body>
</html>