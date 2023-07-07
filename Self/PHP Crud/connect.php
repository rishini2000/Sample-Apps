<?php 
$server="localhost";
$username="root";
$password="1234";
$dbname="crud";

$conn =new mysqli($server,$username,$password,$dbname);

if(!$conn){
    die(mysqli_error($conn));
}


?>