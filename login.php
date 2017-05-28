<?php
session_start();
if( isset($_SESSION['login']) )
{
    //  alert('Session Exists.');
    header("Location: search.php");
}
else
{
    //alert('Doesnt');
    $_SESSION['login']=null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Details.</title>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4 text-center">
            <p class="page-header text-info">Restaurant Details</p>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-8" id="shadow">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4 text-center">
                <p class="sub-header text-info">Login</p>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="Email" class="control-label col-sm-4">Email </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Pass" class="control-label col-sm-4">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group col-sm-offset-4">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-3">
                                <input type="button" class="form-control" value="Sign Up" name="signup" onclick='parent.location="signup.php"'>
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" class="form-control" value="Log In." name="login">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";
function emp($n,$p)
{
    if(empty($p) && empty($n))
    {
        alert("Email and Password field empty.");
        return 1;
    }
    elseif(empty($n))
    {
        alert("Email field empty.");
        return 1;
    }
    elseif(empty($p))
    {
        alert("Password field empty.");
        return 1;
    }
    else
        return 0;
}

function alert($a)
{
    echo '<script>alert("'.$a.'")</script>';
}

$dbcon=@mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);

if(isset($_POST["login"]))
{
    $email=$_POST['Email'];
    $pass=$_POST['Pass'];

    if(emp($email,$pass));
    else if($dbcon)
    {
  //      $val = mysqli_query($dbcon,'SELECT 1 FROM LOGIN LIMIT 1',$r=MYSQLI_STORE_RESULT);
/*
        if($r!=TRUE)
            $r=mysqli_query($dbcon,"CREATE TABLE LOGIN (EID EMAIL char(20) NOT NULL UNIQUE , PASSWORD char(20) NOT NULL );");
*/
        $squery="SELECT * FROM LOGIN WHERE EMAIL='". $email. "';";
        $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
        if(mysqli_num_rows($res))
        {
            $row=mysqli_fetch_assoc($res);
            $r=sha1($pass);
            if($row["PASSWORD"]==$r)
            {
                alert("Correct Password");
                $_SESSION['login']=$row['EID']; //To set the eid of the the email.(not email)
                session_write_close();
                header("Location: search.php"); //Head to search page.
            }
            else
                alert("Wrong Password");
        }
        else
            alert("Email doesn't exitst.");
    }
    else
        alert("Some Errors with our database.");

}
?>

</body>
</html>
