<?php

$server="localhost";
$username="root";
$password="Gaurav@prew7646";
$db="sparksbank";

$conn=mysqli_connect($server,$username,$password,$db);
if($conn)
{
    //connection sucessfully"
}
else
    die("connection faild")
?>