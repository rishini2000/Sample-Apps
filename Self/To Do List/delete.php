<?php

$id = $_GET['id'];

$server = "localhost";
$username = "root";
$password = "1234";
$database = "todoapp";

$con = new mysqli($server, $username, $password, $database);
$qry = "DELETE FROM tasks WHERE id='".$id."'";
$res = $con->query($qry);

if($res){
    header("location:todo.php");
}else{
    echo "Sucessfully Failed";
}
?>