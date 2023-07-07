<html>

<head>
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        h1 {
            text-align: center;
            background-color:deepskyblue;
            color: aliceblue;
            padding: 10px;
        }

        form {
            position: relative;
            top: 50px;
            text-align: center;
        }

        table {
            /* position: relative; */
            /* left: 550px;     */
            text-align: center;
            width: 100px;
        }       

        #txtTask {
            position: relative;
            width: 400px;
            left: 550px;
        }

        #btn {
            position: relative;
            top: -60px;
            left: 230px;
        }

        a{
            text-decoration: none;
            
        }
    </style>
</head>

<body>
    <h1>Todo App</h1>
    <form action="add.php" method="GET">
        <input id="txtTask" type="text" class="form-control" placeholder="Enter Task" name="task"><br>
        <input id="btn" class="btn btn-primary" type="submit" value="ADD" />
    </form>

    <div class="row">
        <div class="col-lg-3"></div>

        <div class="col-lg-6">


        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th> </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php

            $server = "localhost";
            $username = "root";
            $password = "1234";
            $database = "todoapp";

            $con = new mysqli($server, $username, $password, $database);
            $qry = "SELECT * FROM tasks";
            $data = $con->query($qry);

            while ($row = $data->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['task'] . "</td>";
                echo "<td><h5><a class='badge text-bg-danger' href='delete.php?id=".$row['id']."'><i class='bi bi-trash'></i>&nbspDelete</a></h5></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>


        </div>
        <div class="col-lg-3"></div>
    </div>

    
</body>

</html>