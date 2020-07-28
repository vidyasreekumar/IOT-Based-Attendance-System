<html>
<head>
	<style>
	.body
    {
        margin:0%;
        background-color: lightgreen;
    }
    .tab
    {
    	vertical-align: 300px;
    	margin-left: 300px;
    	margin-top: 200px;
    	background-color: white;
    }
</style></head>
<body class="body">
<?php
$con=mysqli_connect("localhost","root","","attendance");
$id=$_GET['id'];
$date1=$_GET['date1'];
$date2=$_GET['date2'];
$qry=mysqli_query($con,"SELECT * FROM employee WHERE ID='$id' AND TODAY>='$date1' AND TODAY<='$date2'");?>
<table class="tab" border="2px"><tr><td>ID</td><td>NAME</td><td>DATE</td><td>LOGIN</td><td>LOGOUT</td><td>HOURS</td></tr>
    <?php while($r=mysqli_fetch_array($qry))
     { ?>
        <tr><td><?php echo $r['ID'];?></td>
            <td><?php echo $r['EMP'];?></td>
            <td><?php echo $r['TODAY'];?></td>
            <td><?php echo $r['LOGIN'];?></td>
            <td><?php echo $r['LOGOUT'];?></td>
            <td><?php echo $r['HOURS'];?></td>
            
            
        </tr><?php } ?>
     
</table> </body></html>