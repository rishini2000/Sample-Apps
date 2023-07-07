<?php

$task = $_GET['task'];

$server = "localhost";
$username = "root";
$password = "1234";
$database = "todoapp";

$con = new mysqli($server, $username, $password, $database);
$qry = "INSERT INTO tasks (task) values('" . $task . "')";
$res = $con->query($qry);

if($res){
    echo "Sucessfully added";
    header("location:todo.php");
}else{
    echo "Sucessfully Failed";
}
?>