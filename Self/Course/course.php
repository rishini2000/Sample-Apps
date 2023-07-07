<?php 
include 'add.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        #bit{

            text-align: center;
            color: white;
            background-color: black;
        }
        .form{
            text-align: center;
        }
        .form-group{
            size: 100px;
        }
        
    </style>
</head>
<body>
    <form action="add.php" method="get">
    <h1 id = "bit">BIT Courses</h1>
    <div class="form">
        <input type="text" name="course" id="course" placeholder="Enter Course" class="col-xs-4" >
        <input type="submit" value="Add" name="submit" class="btn btn-primary" >
        <input type="submit" value="show" name="show" class="btn btn-success">
    </div>
   
    </form>
    
</body>
</html>