<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form method="POST">
        Informe um número: <input type="numer" name="num">
        <input type="submit" value="verificar">   
    </form>
    <?php

           if($_POST) { 
            [$num % 2 == 0];
            echo ("Divisivel por 2");
           } else {
            echo ("não divisivel por 2");
           }

    ?>
  



</body>
</html>