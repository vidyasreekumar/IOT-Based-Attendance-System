<?php
$con=mysqli_connect("localhost","root","","names");
$id=$_GET['id'];
$qry=mysqli_query($con,"DELETE FROM student WHERE ID='$id'");
header('Location:view.php');
?>