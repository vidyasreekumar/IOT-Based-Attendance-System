<?php
$con=mysqli_connect("localhost",root,"","names");
$name=$_POST['name'];
$mark=$_POST['mark'];
$a=mysqli_query($con,"INSERT INTO  student(NAME,MARK) VALUES('$name','$mark')");
header('Location:pgm1.php');
?>