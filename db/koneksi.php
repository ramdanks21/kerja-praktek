<?php 
$localhost = "localhost";
$username="root";
$passwrod="ramdan123";
$database = "library";
$con = mysqli_connect($localhost,$username,$passwrod,$database);
if (!$con) {
    die("connection failed". mysqli_connect());
}
?>