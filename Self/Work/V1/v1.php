<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="v1.php" method="get">
        <input type="number" name="num1"><br>
        <br>
        <input type="number" name="num2"><br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
 $num1 = !empty($_GET['num1']);
 $num2 = !empty($_GET['num2']);

 if($num1 && $num2){
    $sum = $num1 + $num2;
 }
 echo $sum
?>