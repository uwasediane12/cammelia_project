<?php session_start(); ?>
<?php include_once("homepage.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
    </style>
</head>
<body>
    <form>
        <h2 style="font-size: 50px; color: black;">Candidate Results (Over 100)</h2>
        <table border="1">
            <theader>
                <tr style="font-size: 30px; background-color: black; color: white;">
                <th>Nationalid</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Gender</th>
               <th>DOB</th>
               <th>PostId</th>
               <th>Exam_date</th>
               <th>Phone_number</th>
               <th>Marks</th></tr> 
</theader>       
<?php
$conn=mysqli_connect('localhost','root','','camellia');
$sql = "SELECT  national_id,f_name, l_name,gender,dateof_birth,PostId,exam_date,p_number, marks FROM candidatesresult WHERE marks <= 100 ORDER BY marks DESC";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
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
                    </tr>
                    ';
}

   ?>

</table>
</form>

</body>
</html>