<?php
$server="localhost";
$username="root";
$password="1234";
$db_name="student_registration";

$conn=new mysqli($server,$username,$password,$db_name);

if(!$conn){
    die(mysqli_error($conn  ));
}

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $mobile=$_POST['mobile'];
    $sex=$_POST['sex'];
    $course=$_POST['course'];

//    echo $name;
//    echo $email;
//    echo $city;
//    echo $mobile;
//    echo $sex;
//    echo $course;

    $qry="insert into student (name,email,city,mobile,gender_id,course_id) values ('$name','$email','$city','$mobile','$sex','$course')";

    $result=mysqli_query($conn,$qry);
    if ($result){
        header('location:display.php');
    }else{
        die(mysqli_error($result));
    }


}
