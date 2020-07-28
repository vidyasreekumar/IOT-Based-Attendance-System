<html>
<head>
    <title>project</title>

</head>
<style>
    h1
    { text-align:center;
      font-size:40px;
    }
    h2{
       padding-left: 0pt;
        font-size: 25px;
    }
    h3{
        padding-right: 0pt;
        font-size: 25px;
    }
    .box1
    {   display: inline-block; 
        background:blanchedalmond;
        width: 500px;
        height: 200px;
        margin-left: 80pt;
        padding-left: 50pt;
    }
    .box2
    {   display:inline-block;
        background:blanchedalmond;
        width: 450px;
        height: 200px;
        float: right;
 
    }
</style>
    <body style="background-color:transparent;background:"green.jpg"; background:"" "n>
        <br>
        <h1>ATTENDENCE SYSTEM</h1>
<br>
<div>
    <div id="inline" class="box1">
        <br><br><form method="post" action="pass.php"> 
        <h2>ADMIN LOGIN</h2>

        Admin id <input type="text" name="id">
        <br><br>
        Password<input type="password" name="pass">
        <!--<a href="admin_login.php">SIGN IN</a>
        <br><br>-->
        <input type="submit" name="insert" value="SIGN IN">
    </form>
    </div>
    <div class="box2">
           <br><br>
           <h3>EMPLOYEE LOGIN</h3>
           <form action="emp.php">
            Employee id<input type="text" name="id">
            <br><br> 
            From :<input type="date" name="date1"><br><br>
            To :<input type="date" name="date2"><br><br>
            <!--Password &nbsp;&nbsp;&nbsp;<input type="password" name="pass">-->
            <br><br>
            <input type="submit" name="insert" value="SIGN IN">
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </form>
            <a href="">Create Account?</a>
            
    </div>
 </div>   
    </body>
</html>