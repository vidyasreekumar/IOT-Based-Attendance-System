
		<?php
		
		$id=$_GET['id'];
		$con=mysqli_connect("localhost","root","","attendance");
		$qry=mysqli_query($con,"SELECT * FROM employee WHERE ID=$id");
	    $row=mysqli_fetch_array($qry);
	    ?>
	    <form action="edit2.php">
	    	emp name :<input type="text" name="name" value="<?php echo $row[2];?>"><br><br>
	    	emp id :<input type="number" name="id" value="<?php echo $row[1];?>"><br><br>
	    	<input type="submit" value="save">
	    </form>
	    