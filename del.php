<?php
$con=mysqli_connect("localhost","root","","attendance");
$id=$_GET['id'];
$qry=mysqli_query($con,"DELETE FROM employee WHERE ID='$id'");
header('Location:view.php');
?>