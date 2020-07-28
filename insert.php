<?php
$con=mysqli_connect("localhost","root","","attendance");
$name=$_POST['emp'];
$id=$_POST['id'];
$a=mysqli_query($con,"INSERT INTO  employee(EMP,ID,LOGIN,HOURS) VALUES('$name','$id',NOW(),LOGIN-LOGOUT)");
header('Location:try.php');
?>