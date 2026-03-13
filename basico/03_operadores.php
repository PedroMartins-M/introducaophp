<?php
    $a = 10;
    $b = 5;
    $soma = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    $resto = $a % $b;
?>

<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <tittle> Operadores Aritméticos </title>
</head>

<br>

<body>
    <?php
        echo"Soma: $soma <br>";
        echo"Subtração: $sub <br>";
        echo"Multiplicação: $mult <br>";
        echo"Divisão: $div <br>";
        echo"Modulo (Resto da Divisão): $resto";
    ?>
</body>
</html>