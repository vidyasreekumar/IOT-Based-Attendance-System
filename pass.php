<?php
$id=$_POST['id'];
$pass=$_POST['pass'];
$u="abc";
if($u==$id&&$pass==123)
  header('location:admin_login.php');
else
  header('Location:internship.php');
  ?>	
