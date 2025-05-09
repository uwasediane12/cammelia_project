<?php
include_once("homepage.php");
?>
<?php
$conn=mysqli_connect('localhost','root','','camellia');
if(isset($_GET["updateid"])){
$id= $_GET["updateid"];
$sel="SELECT * FROM `post` WHERE PostId =$id";

$query=mysqli_query($conn,$sel);

$fetch=mysqli_fetch_array($query);

if(isset($_POST['update'])){
    $new=$_POST['postid'];
    $upd="UPDATE `post` SET `PostName`='$new' WHERE PostId='$id'";
    $query=mysqli_query($conn,$upd);
    if($query){
        //echo 'updated';

        header("location:selpost.php");

    }

    else{

        echo 'not';
    }

}

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
<body>
<form action="" method="POST">

<center>
<label></label><input type="text" name="postid" value="<?php echo $fetch["PostName"] ;?>" placeholder="please enter your product" required=""><br><br>

<div ><button name="update" type="submit" class="btn">UPDATE</button>
    </center>
    </form>
</body>
</html>
