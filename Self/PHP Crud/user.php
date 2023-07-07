<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile =$_POST['mobile'];
    $password=$_POST['password'];

    $qry="insert into details (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$qry);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">

    <h1>Enter Your Details Here
  <small class="text-body-secondary"></small>
    </h1>
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="number" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>