<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    #table{
        text-align: center;
    }
    .center{
        margin: auto;
    }
</style>
<?php
        if(isset($_GET['submit'])){
        $server = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "courses";

        $conn = mysqli_connect( $server , $username , $password , $dbname);

        $course = $_GET['course'];

        if(!$conn){
            die("connection Failed: " . mysqli_connect_error());
            header("Location: ".$_SERVER['PHP_SELF']);
        }

        $qry ="INSERT INTO courses (course) values('".$course."')";

        if(mysqli_query($conn,$qry)){
            echo "<script>alert ('Data Added Successfully !'); </script>";
        }else{
            echo "Error ". $qry . "<br>" .mysqli_error($conn);
        }

        mysqli_close($conn);
    }elseif(isset($_GET['show'])){

            $server = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = "courses";

            $conn = mysqli_connect( $server , $username , $password , $dbname);

            if(!$conn){
                die("Connection Faild :" .mysqli_connect_error());
            }

            $sql = "SELECT * FROM courses";
            $result = mysqli_query($conn,$sql);

        while($row =mysqli_fetch_assoc($result)){
           echo "<table class = 'table table-bordered' id= 'table'> ";
           echo "<thead><tr><th scope = 'col' class='table-secondary'>Number</th><th scope='col' class = 'table-secondary'>Course</th></tr></thead>";
           echo "<tbody>";
           echo "<tr><td>".$row['id']."</td><td>".$row['course']."</td></tr>";
           echo "</tbody>";
           echo "</table>";
        }
            mysqli_close($conn);
        
    }
   // echo "<a href='./course.php'><button id = 'btnadd'>Add New Course</button></a>"

?>
