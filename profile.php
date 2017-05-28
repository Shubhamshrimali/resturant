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

$e='';
$mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

//$dbcon=mysqli_connect('localhost','root','','restaurant');
$dbcon = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
$squery='SELECT * FROM LOGIN WHERE EID="'.$email.'";';
$res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
$s=mysqli_fetch_assoc($res);
$e=$s['EMAIL'];


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
    <title>Profile | Restaurant Search.</title>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4 text-center">
            <p class="page-header text-info">User Profile</p>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-8" id="shadow">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 text-center">
                <p class="sub-header text-info"><b>Email</b> - <?php echo $e; ?></p>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-sm-offset-4">
                <p class="sub-header">Views</p>
            </div>
        </div>

        <?php

$dbcon = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
//        $dbcon=mysqli_connect('localhost','root','','restaurant');
        if($dbcon)
        {
            $squery='SELECT * FROM RV WHERE EID='.$email.';';
            $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
            if(mysqli_num_rows($res))
            {
                echo "<div class='container' >";
                echo '<div class="table-responsive col-sm-4 col-sm-offset-1">';
                echo '<table class="table table-hover table-bordered" cellspacing="0" cellpadding="2"><thead>';
                echo '<tr><td class="text-center"><b>Name</b></td></tr>';
                echo '</thead><tbody>';
                while($row=mysqli_fetch_assoc($res))
                {
                    $tquery='SELECT * FROM RES WHERE PID='.$row['PID'].';';
                    $res1=mysqli_query($dbcon,$tquery,$r=MYSQLI_STORE_RESULT);
                    $row1=mysqli_fetch_assoc($res1);
                    echo '<tr><td>'.$row1['NAME'].'</td></tr>';
                }
                echo '</tbody></table></div></div>';
            }
            else
                alert('No Views so far.');
        }
        else
            alert('Error with server.');
        ?>

        <div class="row">
            <div class="col-sm-offset-4">
                <p class="sub-header">Likes</p>
            </div>
        </div>

        <?php

      $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

$dbcon = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
            if($dbcon)
            {

                $squery='SELECT * FROM RL WHERE EID='.$email.';';
                $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
                if(mysqli_num_rows($res))
                {
                    echo "<div class='container' >";
                    echo '<div class="table-responsive col-sm-4 col-sm-offset-1">';
                    echo '<table class="table table-hover table-bordered" cellspacing="0" cellpadding="2"><thead>';
                    echo '<tr><td class="text-center"><b>Name</b></td></tr>';
                    echo '</thead><tbody>';
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $squery='SELECT * FROM RES WHERE PID='.$row['PID'].';';
                        $res1=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
                        $row1=mysqli_fetch_assoc($res1);
                        echo '<tr><td>'.$row1['NAME'].'</td></tr>';
                    }
                    echo '</tbody></table></div></div>';
                }
                else
                    alert('No Likes so far.');
            }
            else
                alert('Error with server.');
        ?>
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default" name="logout" onclick="">Logout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
