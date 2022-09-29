<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao - 1</title>
</head>
<body>
    <form method="POST">
        valor 1: <input type="numer" name="valor1">
        valor 2: <input type="numer" name="valor2">
        valor 3: <input type="numer" name="valor3">
        <input type="submit" value="Calcular">   
    </form>
<?php
if($_POST) {
    $v1=$_POST['valor1'];
    $v2=$_POST['valor2'];
    $v3=$_POST['valor3'];
    $total=$v1+$v2+$v3;
    echo $total;
}


?>
</body>
</html>