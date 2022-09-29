<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <p>maça : <input type="numer" name="p1"></P>
        <p>melancia : <input type="numer" name="p2"></P>
        <p>laranja : <input type="numer" name="p3"></P>
        <p>reponho : <input type="numer" name="p4"></P>
        <p>cenoura : <input type="numer" name="p5"></P>
        <p>batatinha : <input type="numer" name="p6"></P>
        <p><input type="submit" value="Calcular"> </P>  
    </form>
<?php
if($_POST) {
    $v1=$_POST['p1'];
    $v2=$_POST['p2'];
    $v3=$_POST['p3'];
    $v3=$_POST['p4'];
    $v3=$_POST['p5'];
    $v3=$_POST['p6'];
    $total=$v1+$v2+$v3+$v4+$v5+$v6;
    echo $total;
}


?>
    
</body>
</html>