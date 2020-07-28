<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","raeofhope");
$qry=mysqli_query($con,"SELECT * FROM register WHERE USER='$user'");
$r=mysqli_fetch_row($qry);
if($pass == $r[3])
{
	header('Location:userpage.php');
}
else
{
	echo "incorrect password or user does not exist";
}
?>