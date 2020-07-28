<html>
<head>
	</head>
	<body>

<?php
echo "Hello world<br>";
$a=0;
while($a<=10)
{
	echo $a,"<br> ";
	$a=$a+1;
} ?>
<form method="post" action="insert.php">
<table border="3px">
	
	<tr><td>NAME :</td><td><input type="text" name="name"></td></tr>
	<tr><td>MARKS :</td><td><input type="number" name="mark"></td></tr>
	<tr><td><input type="submit" value="insert"></td></tr>
	</table>
	
</form><br><br>
<a href="view.php"></a> 
 </body></html>  
