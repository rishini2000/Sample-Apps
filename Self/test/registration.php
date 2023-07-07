<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$email = $_POST['email'];
$number = $_POST['number'];

$my_server = "localhost";
$user_name = "root";
$password = "1234";
$db_name = "test";

$con = new mysqli($my_server, $user_name, $password, $db_name);

if(!$con){
    die("Could not connect to" .$con->connect_error);
}else{
    $qry = "insert into registration (first_name, last_name ,age, email,number) values ('".$first_name."','".$last_name."','".$age."','".$email."','".$number."')";
    $con->query($qry);
    echo "success";
}



?>