<?php
/**
 * Created by PhpStorm.
 * User: RedLegend9
 * Date: 16-10-2016
 * Time: 01:27
 */

$mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

session_start();
if( isset($_SESSION['login']) )
{
    //  alert('Session Exists.');
    $email=$_SESSION['login'];
}
else
{
    //alert('Session Doesnt exist');
    $_SESSION['login']=null;
    header("Location: login.php");
}

if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("Location: login.php");
}

function is_connected()
{
    $connected = @fopen("http://www.google.com:80/","r");
    if($connected)
    {
        return true;
    } else {
        return false;
    }

}

function alert($a)
{
    echo '<script>alert("'.$a.'")</script>';
}
function confirmalert($a)
{
    echo '<script>window.confirm("'.$a.'");</script>';
}

    $n = '';
    $n = $_GET['place'];
    $n = urlencode($n);


    $f = @file_get_contents('https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+' . $n . '&key=AIzaSyDSIEgEASK_Qyvf0CRHD1M1uyZKLfx-Juc');
    $fs = @json_decode($f);

    $fsname = @$fs->results;
?>
<html>
<head>
    <title>Search List.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
        .res{
            cursor: pointer;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".res").click(function(){
                window.location.href = "res.php?resid="+$(this).attr('value');
            });
        });
    </script>
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
            <div class="col-sm-offset-2 col-sm-8 text-center">
              <p class="sub-header text-info">List of restaurants-<br><small style="font-size: 60%">Click on name of restaurant to view details.</small></p>
            </div>
        </div>
        <br/>

        <div class="col-sm-offset-1">
<?php

    $n = '';

    $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

    $dbcon = @mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);

    echo "<div class='container' >";
    echo '<div class="table-responsive col-sm-6">';
    echo '<table class="table table-hover table-bordered" cellspacing="0" cellpadding="2"><thead>';
    echo '<tr><td><b>Res. Name</b></td>';
    echo '<th><b>Views</b></th>';
    echo '<th><b>Likes</b></th></tr></thead><tbody>';
    foreach ($fsname as $a)
    {
        $n = $a->place_id;
        $v = 0;
        $l = 0;
        $squery = 'SELECT * FROM RES WHERE ID="' . $n . '";';
        $res = @$dbcon->query($squery);
        if ($res && $res->num_rows)
        {
            $s = mysqli_fetch_assoc($res);
            $v = $s['V'];
            $l = $s['L'];
        }
        else
        {
            $cntquery = 'SELECT * FROM RES;';
            $res = $dbcon->query($cntquery);
            $cquery = 'INSERT INTO RES VALUES(' .
             (($res->num_rows) + 1) .
              ',"' . $n . '","' . $a->name . '" ,0 , 0);';
            $res = mysqli_query($dbcon, $cquery, $r = MYSQLI_STORE_RESULT);
            $l = 0;
            $v = 0;
        }
        echo "<tr><td class='res' value='" . $n . "'>" . $a->name . "</td><td value='".$a->name."'>" . $v . "</td><td value='".$a->name."'>". $l . "</td></tr>";
    }
    echo '</tbody></table></div></div>';
    mysqli_close($dbcon);
    unset($dbcon);


?>
        </div>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default" name="logout" onclick="">Logout</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
