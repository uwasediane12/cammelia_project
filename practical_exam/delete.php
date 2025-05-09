<?php
$conn=mysqli_connect('localhost','root','','camellia');
if(isset($_GET['delid'])){
	$id=$_GET['delid'];
	$delete="DELETE FROM `post` WHERE 	PostId=$id";
	$query=mysqli_query($conn,$delete);
	if($query==true)
	{
		//echo "records deleted";
		header("location:selpost.php");
	}
	else{
		die(mysqli_error($conn));
	}
}

?>