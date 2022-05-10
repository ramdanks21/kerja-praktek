<?php 
$localhost = "localhost";
$username="root";
$passwrod="";
$database = "library";
$con = mysqli_connect($localhost,$username,$passwrod,$database);
if (!$con) {
    die("connection failed". mysqli_connect());
}
?>