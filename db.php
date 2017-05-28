<?php


$mysql_host = "localhost";
$mysql_database =  "a1845018_A";
$mysql_user =  "root";
$mysql_password =  "";

echo $mysql_host."<br>";
echo $mysql_database."<br>";
echo $mysql_user."<br>";
echo $mysql_password."<br>";


$crquery = "CREATE TABLE LOGIN (EID INT(5) UNIQUE NOT NULL, EMAIL CHAR(25) UNIQUE NOT NULL,PASSWORD CHAR(60) NOT NULL);";
$crquery1 = "CREATE TABLE `RV` (`EID` int(5) NOT NULL, `PID` int(5) NOT NULL, UNIQUE KEY `RV` (`EID`,`PID`))";
$crquery2 = "CREATE TABLE `RL` (`PID` int(5) NOT NULL, `EID` int(5) NOT NULL, UNIQUE KEY `RL` (`PID`,`EID`) )";
$crquery3 = "CREATE TABLE `RES` (`PID` int(5) NOT NULL, `ID` varchar(35) NOT NULL, `NAME` varchar(40) NOT NULL, `L` int(5) NOT NULL, `V` int(5) NOT NULL, UNIQUE KEY `RES` (`ID`))";

$dbcon=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
/*echo $mysql_host;
echo $mysql_database;
echo $mysql_password;
echo $mysql_user;
echo getenv('db_host');*/
if($dbcon){

    $res = mysqli_query($dbcon, $crquery);
    if($res === TRUE){
        echo "created Login table";
    }else {
        echo "already created<br>".mysqli_error($dbcon);
    }

    $res = $dbcon->query($crquery1);
    if($res){
        echo "created RV table";
    }
    else {
        echo "already created<br>";
    }

    $res = $dbcon->query($crquery2);
    if($res){
        echo "created RL table";
    }else {
        echo "already created<br>";
    }

    $res = $dbcon->query($crquery3);
    if($res){
        echo "created RES table";
    }else {
        echo "already created<br>";
    }
}
else {
    echo "Server Issue";
}

?>
