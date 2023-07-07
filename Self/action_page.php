<?php

$name =$_POST['name'];
$age =$_POST['age'];
$number =$_POST['number'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$photo =$_POST['file'];
$nic =$_POST['nic'];

$con  = new mysqli("localhost","root","1234","employee");

if(!$con){
    echo "error:";
}
else{

    $qry = "insert into employee_details(name,number,email,nic) values('".$name."','".$number."','".$nic."','".$nic."')";
    $con->query($qry);
    echo "success";

}

// echo $name . "<br>";
// echo $age . "<br>";
// echo $number . "<br>";
// echo $email . "<br>";
// echo $gender . "<br>";
// echo $photo . "<br>";
// echo $nic . "<br>";