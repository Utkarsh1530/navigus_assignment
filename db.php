<?php
$server="localhost";
$username="root";
$password="";
$dbname="lwu";


$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection failed due to". mysqli_connect_error());
}
?>