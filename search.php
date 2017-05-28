<?php

session_start();
if( isset($_SESSION['login']) )
{
    //  alert('Session Exists.');
    $email=$_SESSION['login'];
}
else
{
    //alert('Doesnt');
    $_SESSION['login']=null;
    header("Location: login.php");
}

if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("Location: login.php");
}

function alert($a)
{
    echo '<script>alert("'.$a.'")</script>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Search.</title>
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
            <div class="col-sm-offset-2 col-sm-8 text-center">
                <p class="sub-header text-info">Enter the city to search for restaurants</p>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <form class="form-horizontal" method="get" action="rsearch.php">
                    <div class="form-group">
                        <label for="place" class="control-label col-sm-4">City </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="place" name="place" placeholder="City"/>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group col-sm-offset-4">
                        <div class="row">
                            <div class="col-sm-3 col-sm-offset-4">
                                <input type="submit" class="form-control" value="Submit" name="Submit">
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="button" class="btn btn-default" name="profile" onclick="parent.location='profile.php';">Profile</button>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default" name="logout">Logout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>