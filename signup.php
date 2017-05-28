<html>
<head>
    <title>Sign Up.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4 text-center">
            <p class="page-header text-info">Restaurant Search</p>
        </div>
    </div>

    <div class="col-sm-offset-2 col-sm-8" id="shadow">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4 text-center">
                <p class="sub-header text-info">Sign Up</p>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-sm-offset-2 col-sm-6">
                <form class="form-horizontal" method="POST">

                    <div class="form-group">
                        <label for="email" class="col-sm-5 control-label text-right">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Pass" class="col-sm-5 control-label text-right">Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="Pass" id="Pass" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Cpass" class="col-sm-5 control-label text-right">Confirm Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="Cpass" id="CPass" placeholder="Password">
                        </div>
                    </div>

                    <br/>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default" name="signup">Submit</button>
                        </div>
                    </div>

                    <div class="form-group col-sm-offset-4">
                        <div class="col-sm-6">
                            <input type="button" class="form-control" value="Log In Page" name="login" onclick='parent.location="login.php"'>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<br/>

<?php

$mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

function alert($a)
{
    echo "<script>alert('".$a."')</script>";
}

function emp($p,$e)
{
    if(empty($p))
    {
        alert('Password field is empty.');
        return 1;
    }
    elseif(empty($e))
    {
        alert('Email field is empty.');
        return 1;
    }
    else
        return 0;
}

function conpass()
{
    if($_POST['Pass']==$_POST['Cpass'])
        return 0;
    else
    {
        alert('Password and Confirm password are not the same.');
        return 1;
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

//    $dbcon=mysqli_connect("localhost","root","","Restaurant");
$dbcon=@mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
    if(isset($_POST["signup"]))
    {
        $pass = htmlspecialchars($_POST["Pass"]);
        $email=htmlspecialchars($_POST['email']);

        if(emp($pass,$email) or conpass())
        {

        }
        else if($dbcon)
        {
            $fetchquery = "SELECT * FROM LOGIN;";

            $crquery = "CREATE TABLE LOGIN (EID INT(5) UNIQUE NOT NULL, EMAIL CHAR(25) UNIQUE NOT NULL,PASSWORD CHAR(60) NOT NULL);";
/*            $crquery1 = "CREATE TABLE `RV` (`EID` int(5) NOT NULL, `PID` int(5) NOT NULL, UNIQUE KEY `RV` (`EID`,`PID`))";
            $crquery2 = "CREATE TABLE `RL` (`PID` int(5) NOT NULL, `EID` int(5) NOT NULL, UNIQUE KEY `RL` (`PID`,`EID`) )";
            $crquery3 = "CREATE TABLE `RES` (`PID` int(5) NOT NULL, `ID` varchar(35) NOT NULL, `NAME` varchar(40) NOT NULL, `L` int(5) NOT NULL, `V` int(5) NOT NULL, UNIQUE KEY `RES` (`ID`))";
*/
            $res = mysqli_query($dbcon, $fetchquery, $r = MYSQLI_STORE_RESULT);
            if($r==false)
                mysqli_query($dbcon,$crquery,$r=MYSQLI_STORE_RESULT);

            $r=sha1($pass);
            $putquery = "INSERT INTO LOGIN VALUES (" . (mysqli_num_rows($res)+1) . ",'" . $email . "','" . $r . "');";
            $res = mysqli_query($dbcon, $putquery);
            if($res==False)
                alert("The email already exists.Try another email or login with that email.");
            else
                alert("Signed Up successfully.");

            $email = $pass = '';

        }
        else
            alert("There's some error with our servers. Sorry for inconvenience.");
    }
}
?>
</body>
</html>
