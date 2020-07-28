
<html>
    <head>
        <title>admin_page</title>
    </head>
    <style>
    .nav
    {
        background: crimson;
        width: 100%;
        margin:0px;
        height: 23px;
        margin-top: 150px;
    }
    .nav a
    {
        float: left;
        
        font-size: 20px;
        color:white;
        text-decoration: none;
    }
    .nav a:hover
    {
        color:black;
    }
    .nav a.active
    {
        background-color:cornsilk;
        color:crimson;
    }
    .body
    {
        margin:0%;
        background-color:deepskyblue;
    }
    </style>
    <body class="body">
        <?php
$con=mysqli_connect("localhost","root","","attendance");
$qry=mysqli_query($con,"SELECT * FROM employee WHERE TODAY=CURDATE()");
        ?>
        
        
        <div class="nav">
            <a class="active">TODAY&nbsp;&nbsp;</a>
            <a href="week.php">WEEKLY STATUS&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="month.php">MONTHLY STATUS&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="logout.php">LOGOUT</a>
        </div>
<br><br>

<table border="2px"><tr><td>ID</td><td>NAME</td><td>DATE</td><td>LOGIN</td><td>LOGOUT</td><td>HOURS</td></tr>
    <?php while($r=mysqli_fetch_array($qry))
     { ?>
        <tr><td><?php echo $r['ID'];?></td>
            <td><?php echo $r['EMP'];?></td>
            <td><?php echo $r['TODAY'];?></td>
            <td><?php echo $r['LOGIN'];?></td>
            <td><?php echo $r['LOGOUT'];?></td>
            <td><?php echo $r['HOURS'];?></td>
            
            
        </tr><?php } ?>
     
</table> 
</body>
</html>