<html>
<head>
	<style>
	.box{
		background-color: orange;
        width: 30%;
        height: 130px;
        padding: 20px;
        margin-left: 200px;

	}.nav
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
    }</style>
	</head>
<body class="body">
        <div class="nav">
            <a href="admin_login.php">TODAY&nbsp;&nbsp;&nbsp;</a>
            <a href="week.php">WEEKLY STATUS&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a class="active">MONTHLY STATUS&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="logout.php">LOGOUT</a>
        </div><br><br>
	<div class="box">
		<form action="month1.php">
		MONTH NUMBER :<input type="number" name="month"><br><br>
        EMPLOYEE ID :<input type="number" name="id"><br><br>
		
			<input type="submit" value="view">
		</form></div></body></html>