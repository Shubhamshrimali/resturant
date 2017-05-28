<?php
/**
 * Created by PhpStorm.
 * User: RedLegend9
 * Date: 16-10-2016
 * Time: 02:40
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
    //alert('Doesnt');
    $_SESSION['login']=null;
    header("Location: login.php");
}

$n='';
$n=$_GET['resid'];
$v=0;
$l=0;
$pid = '';




    $dbcon = @mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);


$seaquery='SELECT * FROM RES WHERE ID="'.$n.'";';
        
        $resea=mysqli_query($dbcon,$seaquery,$r=MYSQLI_STORE_RESULT);
        $sea=mysqli_fetch_assoc($resea);
        $pid2 = $sea['PID'];
        

if(isset($_POST['like']))
{

    function addlike($e,$p,$l,$n)
    {

       $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

        $aquery='INSERT INTO RL VALUES('.$p.','.$e.');';
        $dbcon = @mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
        $res=@mysqli_query($dbcon,$aquery,$r=MYSQLI_STORE_RESULT);
        $l=$l+1;
        if($res)
        {
            $uquery='UPDATE RES SET L='.$l.' WHERE ID="'.$n.'";';
            $res=mysqli_query($dbcon,$uquery,$r=MYSQLI_STORE_RESULT);
            return 1;
        }
        else
        {
            alert("You have already liked it.");
            return 0;
        }
    }
    if($dbcon)
    {
        $squery='SELECT * FROM RES WHERE ID="'.$n.'";';
        $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
        $s=mysqli_fetch_assoc($res);
        $v=$s['V'];
        $l=$s['L'];
        $l=$l + addlike($email,$s['PID'],$l,$n);
    }
    else
    {
        alert('Some errors with our servers.');
    }

}


/// COMMENT 


if(isset($_POST['comment2']))
{

    
    if($dbcon)
    {
        $squery='SELECT * FROM RES WHERE ID="'.$n.'";';
        
        $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
        $s=mysqli_fetch_assoc($res);
        $cmt = $_POST['comment'];
        $pid = $s['PID'];
       $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";
        
        $qquery='REPLACE INTO rc VALUES("'.$pid.'","'.$email.'","'.$cmt.'");';
        $dbcon = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
        $res=mysqli_query($dbcon,$qquery,$r=MYSQLI_STORE_RESULT);
        //$l=$l+1;
       /* if($res)
        {

            $uquery='UPDATE rc SET cmt="'.$cmt.'" WHERE PID="'.$e.'" AND EID ="'.$p.'";';
            $res=mysqli_query($dbcon,$uquery,$r=MYSQLI_STORE_RESULT);
            return 1;
        }
        /*else
        {
            alert("You have already liked it.");
            return 0;
        }*/
    



    }
    else
    {
        alert('Some errors with our servers.');
    }

}


if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("Location: login.php");
}


if($dbcon)
{
    $squery='SELECT * FROM RES WHERE ID="'.$n.'";';

    $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

    $res=mysqli_query($dbcon,$squery,$r=MYSQLI_STORE_RESULT);
    if(mysqli_num_rows($res))
    {
        $s=mysqli_fetch_assoc($res);
        $v=$s['V'];
        $v= $v + addview($email,$s['PID'],$v,$n);
        $l=$s['L'];
    }
    else
    {
        $cquery = 'INSERT INTO RES VALUES(' . (mysqli_num_rows($res) + 1) . ',"' . $n . '","'.$a->name.'" ,0 , 0);';
        $res=mysqli_query($dbcon,$cquery,$r=MYSQLI_STORE_RESULT);
        $v=1;
        $l=0;
    }
}
else
{
    alert('Some errors with our servers.');
}
function addview($e,$p,$v,$n)
{

    $mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

    $aquery='INSERT INTO RV VALUES('.$e.','.$p.');';

    $r='';
    $dbcon=@mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
    $res=@mysqli_query($dbcon,$aquery,$r=MYSQLI_STORE_RESULT);
    $v=$v+1;
    if($res)
    {
        $uquery='UPDATE RES SET V='.$v.' WHERE ID="'.$n.'";';
        $res=mysqli_query($dbcon,$uquery,$r=MYSQLI_STORE_RESULT);
        return 1;
    }
    else
        return 0;
}
function alert($a){
    echo '<script>alert("'.$a.'");</script>';
}






$f=@file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$n."&key=AIzaSyDSIEgEASK_Qyvf0CRHD1M1uyZKLfx-Juc");
$fs=json_decode($f);

$fsname=$fs->result;

$shwquery='SELECT * FROM rc WHERE PID = '.$pid2.';';
        
        $reshw=@mysqli_query($dbcon,$shwquery,$r=MYSQLI_STORE_RESULT);

        

?>
<html>
<head>
    <title>Restaurant Details.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<div>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4 text-center">
            <p class="page-header text-info">Restaurant Details</p>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-8" id="shadow">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 text-center">
                <p class="sub-header text-info">Restaurant Details-</p>
            </div>
        </div>
        <br/>

<?php
echo "
<div class='table-responsive col-sm-10 col-sm-offset-1'>
    <table class='table table-hover table-bordered' cellspacing='0' cellpadding='2'>
        <thead>
        <tr><td><b>Field</b></td>
            <td><b>Detail</b></td>
        </tr></thead>
        <tbody>
        <tr><td><b>Name</b></td><td>$fsname->name</td></tr>
        <tr><td><b>Address</b></td><td>$fsname->formatted_address</td></tr>";

echo "<tr><td><b>Website</b></td><td>";
if (@array_key_exists('website', $fsname))
       echo '<a>'.$fsname->website."</a></td></tr>";
else
    echo 'N.A.</td></tr>';

echo "<tr><td><b>Contact Number<b></b></td><td>";
if(@array_key_exists('international_phone_number', $fsname))
        echo $fsname->international_phone_number."</td></tr>";
else
    echo 'N.A.</td></tr>';

echo '<tr><td><b>Open Hours:</b></td><td>';

if(@array_key_exists('opening_hours', $fsname)) {
    echo '<b>Open Hours:</b><br><br>';
    foreach ($fsname->opening_hours->weekday_text as $r)
        echo $r . '<br>';
    echo '</td>';
}
else
    echo 'N.A.</td></tr>';

echo "<tr><td><b>Online Rating</b></td><td>";
if (@array_key_exists('rating', $fsname))
    echo $fsname->rating."</td></tr>";
else
    echo 'N.A.</td></tr>';


echo '<tr><td><b>Views:</b></td><td>'.$v.'</td>';
echo '<tr><td><b>Likes:</b></td><td>'.$l.'</td>';

 echo '<tr><td><b>Comments:</b></td><td>';
   
while ($shw=@mysqli_fetch_assoc($reshw)) {
   // foreach($shw as $field) {
        echo '<b>User Id:</b>'.$shw['EID'].' ==> ' . htmlspecialchars($shw['cmt']) . '</br>';
    }
  echo '</td></tr>';  


?>
        </tbody>

        </table>
    </div>


<form class="form-horizontal" name="like" method="post">
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default" name="like">Like</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <input type="text" class="input-sm" name="comment"></input>
            <?php

            $shw2query='SELECT * FROM rc WHERE (EID = '.$email.' AND PID = '.$pid2.');';
        
        $reshw2=@mysqli_query($dbcon,$shw2query,$r=MYSQLI_STORE_RESULT);
        $shw2=@mysqli_fetch_assoc($reshw2);
            if(!$shw2['cmt'])
            {
                echo "<button type='submit' class='btn btn-default' name='comment2'>Comment</button>";
            }
            else
            {
                echo "<button type='submit' class='btn btn-default' name='comment2'>Update Comment</button>";   
            }
            ?>
            

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
    <div id="map-canvas">
    </div>
</div>
</div>
</body>

</html>
