<?php
$con=mysqli_connect("localhost","root","","attendance");
$qry=mysqli_query($con,"SELECT * FROM employee");
$id=$_POST['id'];
$pass=$_POST['pass'];
if($pass!=123||$id!=abc)
	header('Location:internship.php');

?>
<table border="2px"><tr><td>ID</td><td>NAME</td><td>LOGIN</td><td>LOGOUT</td><td>HOURS</td></tr>
	<?php while($r=mysqli_fetch_array($qry))
	 { ?>
	 	<tr><td><?php echo $r['ID'];?></td>
	 		<td><?php echo $r['EMP'];?></td>
	 		<td><?php echo $r['LOGIN'];?></td>
	 		<td><?php echo $r['LOGOUT'];?></td>
	 		<td><?php echo $r['HOURS'];?></td>
	 	    
	 	    
	 	</tr><?php } ?>
	 </table>
	 <form action="create.php">
	 	<input type="submit" value="create another record">
	 </form>