<?php
	    $name=$_GET['name'];

	    $id=$_GET['id'];
	    $con=mysqli_connect("localhost","root","","attendance");
	    $q=mysqli_query($con,"UPDATE employee SET EMP='$name' WHERE ID='$id'");
	    header('Location:view.php');
	    ?>
