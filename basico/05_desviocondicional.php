<?php
    $idade = 18;
?>

<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <tittle> Calcular Idade</title>
</head>

<br>
<hr>

<body>
    <?php

        echo"Idade: $idade <br>";

        if($idade >= 18)
            {
                echo"Você é maior de idade.";
            }
            else
                {
                    echo"Você é menor de idade.";
                }
    ?>
</body>
</html>